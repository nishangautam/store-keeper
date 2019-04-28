<h2><?= $title; ?></h2>
<div class-"panel-body">
        <table class="table table-scripped table-borderd">
        <tr>
          <th>category Id</th>
          
          <th>Category Name</th>
          <th>Date</th>
          
         <th>Action</th>
          </tr>

        <?php foreach($category as $cat) : ?>

              <tr class='content'>
                <td><?php echo $cat['category_id'];?></td>
               
                <td><?php echo $cat['category_name'];?></td>
                <td><?php echo $cat['created_at'];?></td>
                   <td>

<a class=" btn btn-danger" href="<?php echo base_url(); ?>category/<?php echo $cat['category_id'] ?>">More Details..</a>
                           
                   </td>
          </tr>
          <?php endforeach; ?>
            </table>
          </div>
      
