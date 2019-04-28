<h2><pre><?php echo $supplier['title']; ?></pre></h2>

 <br><h2>
  
<?php echo $supplier['supplier_name']; ?><br>
<?php echo $supplier['supplier_address']; ?><br>
<?php echo $supplier['supplier_contact']; ?><br>
<?php echo $supplier['supplier_email']; ?><br>
<?php echo $supplier['supplier_contact']; ?><br>
</h2>
<a class=" btn btn-primary" href="<?php echo base_url(); ?>supplier/edit/<?php echo $supplier['slug'];?>">Edit supplier</a>
<a class=" btn btn-danger" href="<?php echo base_url(); ?>supplier/delete/<?php echo  $supplier['slug']; ?>">Delete supplier</a>