<h2><?= $title; ?></h2>  
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('categories/edit');?>
<div class="form-group">
	<label>Name</label>
	<input type="text" class="form-control" name="name"  value="">
</div>
<button type="submit" class="btn btn-warning">Submit</button>
</form>