<h2><?= $title; ?></h2>
<div class="panel-body">
        <table class="table table-scripped table-borderd">
        <tr>
          <th>Supplier Id</th>
          <th>image</th>
          <th>Title</th>
          <th>Supplier Name</th>
          <th>Supplier Address</th>
          <th>Supplier Email</th>
          <th>Supplier Contact</th>
          
         <th>Action</th>
          </tr>

        <?php foreach($supplier as $sup) : ?>

              <tr class='content'>
                <td><?php echo $sup['supplier_id']; ?></td>
                <td ><img width="100px" height="100px" src=""></td>      
                <td><?php echo $sup['title']; ?></td>
                <td><?php echo $sup['supplier_name']; ?></td>
                <td><?php echo $sup['supplier_address']; ?></td>
                <td><?php echo $sup['supplier_email']; ?></td>
                <td><?php echo $sup['supplier_contact']; ?></td>
                   <td>
                            <a class=" btn btn-danger" href="<?php echo base_url(); ?>supplier/<?php echo $sup['slug'] ?>">More Details..</a>
                           
                   </td>
          </tr>
          <?php endforeach; ?>
            </table>
          </div>
      
