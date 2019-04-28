<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('category/create');?>
<div class="form-group">
	<label>Name</label>
	<input type="text" class="form-control" name="category_name" placeholder="Enter Name">
</div>
<button type="submit" class="btn btn-warning">Submit</button>
</form>