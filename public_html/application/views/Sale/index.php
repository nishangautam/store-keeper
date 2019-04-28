<h2><?= $title; ?></h2>
<div class="panel-body">
        <table class="table table-scripped table-borderd">
        <tr>
          
          
          <th>Supplier Name</th>
          <th>Date</th>
          <th>Category</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Rate(.Rs)</th>
          <th>Total(.Rs)</th>          
          </tr>

          

        <?php foreach($sale as $sal) : ?>

              <tr class='content'>

                <td ><?php echo $sal['customer_name'];?></td>      
                <td><?php echo $sal['created_at']; ?></td>
                <td><?php echo $sal['category_id'];?></td>
                <td> <?php echo $sal['product_name'];?></td>
                <td><?php echo $sal['quantity']?></td>
                <td><?php echo $sal['price']?></td>
               <td><?php echo $sal['final_amount']?></td>
               
          </tr>
          <?php endforeach; ?>
        
            </table>
          </div>
      </div>
    </div>