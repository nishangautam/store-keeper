<h2><pre><?php echo $Product['title']; ?></pre></h2>

 <br><h2>
  
<?php echo $product['product_id']; ?><br>
<?php echo $product['product_name']; ?><br>
<?php echo $product['product_price']; ?><br>
<?php echo $product['product_quantity']; ?><br>
<?php echo $product['category_name']; ?><br>
<a class=" btn btn-primary" href="<?php echo base_url(); ?>product/edit/<?php echo $product['slug'];?>">Edit product</a>
<a class=" btn btn-danger" href="<?php echo base_url(); ?>product/delete/<?php echo  $product['slug']; ?>">Delete product</a>
</h2>