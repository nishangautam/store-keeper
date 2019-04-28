<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('product/create');?>
<div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($category as $cat): ?>
        <option value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
<div class="form-group">
	<label>Title</label>
	<input type="text" class="form-control" name="title" placeholder="Enter Name">
</div>
<div class="form-group">
	<label>Product Name</label>
	<input type="text" class="form-control" name="product_name" placeholder="Enter Name">
</div>
<div class="form-group">
	<label>Price</label>
	<input type="text" class="form-control" name="product_price" placeholder="Enter Name">
</div>

<button type="submit" class="btn btn-warning">Submit</button>
</form>