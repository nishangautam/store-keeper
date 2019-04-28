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

          

        <?php foreach($purchase as $pur) : ?>

              <tr class='content'>

                <td ><?php echo $pur['supplier_name'];?></td>      
                <td><?php echo $pur['created_at']; ?></td>
                <td><?php echo $pur['category_id'];?></td>
                <td> <?php echo $pur['product_name'];?></td>
                <td><?php echo $pur['quantity']?></td>
                <td><?php echo $pur['price']?></td>
               <td><?php echo $pur['final_amount']?></td>
               
          </tr>
          <?php endforeach; ?>
        
            </table>
          </div>
      </div>
    </div>