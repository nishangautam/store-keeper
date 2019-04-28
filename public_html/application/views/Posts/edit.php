<h2><?=$title ?> </h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/update');?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="<?php echo $post['title'] ?>" value="<?php echo $post['title'] ?>">
  </div>
  
  <div class="form-group">
    <label >Body</label>
    <div >
    <textarea class="form-control" name="body" id="editor" placeholder="Add body"> <?php echo $post['body'] ?></textarea>
    	
    </div>
    <div>
      <div class="form-group">
         <label>Category Name:</label>
    <select name="category_id" class="form-control">
    <?php foreach($categories as $category): ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
    <?php endforeach; ?>
    </select>
  </div>
  
    </div>
  </div>
 <button type="submit" class="btn btn-warning">Submit</button>
</form>