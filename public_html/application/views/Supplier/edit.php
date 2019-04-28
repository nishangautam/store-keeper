<h2><?=$title ?> </h2>
<?php echo validation_errors();?>
<?php echo form_open('supplier/update');?>
<input type="hidden" name="id" value="<?php echo $supplier['supplier_id']; ?>">