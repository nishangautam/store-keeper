<h2><pre><?php echo $customer['title']; ?></pre></h2>

 <br><h2>
  
<?php echo $customer['customer_name']; ?><br>
<?php echo $customer['customer_address']; ?><br>
<?php echo $customer['customer_contact']; ?><br>
<?php echo $customer['customer_email']; ?><br>
<?php echo $customer['customer_contact']; ?><br>
<a class=" btn btn-primary" href="<?php echo base_url(); ?>customer/edit/<?php echo $customer['slug'];?>">Edit Customer</a>
<a class=" btn btn-danger" href="<?php echo base_url(); ?>customer/delete/<?php echo  $customer['slug']; ?>">Delete Customer</a>
</h2>