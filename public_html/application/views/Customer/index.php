<h2><?= $title; ?></h2>
<div class="panel-body">
        <table class="table table-scripped table-borderd">
        <tr>
          <th>Customer Id</th>
          <th>image</th>\
          <th>Title</th>
          <th>Customer Name</th>
          <th>Customer Address</th>
          <th>Customer Email</th>
          <th>Customer Contact</th>
          
         <th>Action</th>
          </tr>

        <?php foreach($customer as $cus) : ?>

              <tr class='content'>
                <td><?php echo $cus['customer_id'];?></td>
                <td ><img width="100px" height="100px" src=""></td>      
                <td><?php echo $cus['title'];?></td>
                <td><?php echo $cus['customer_name'];?></td>
                <td><?php echo $cus['customer_address'];?></td>
                <td><?php echo $cus['customer_email'];?></td>
                <td><?php echo $cus['customer_contact'];?></td>
                   <td>

<a class=" btn btn-danger" href="<?php echo base_url(); ?>customer/<?php echo $cus['slug'] ?>">More Details..</a>
                           
                   </td>
          </tr>
          <?php endforeach; ?>
            </table>
          </div>
      
