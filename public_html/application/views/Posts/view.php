<div class="alert alert-primary" role="alert">
	
<h2> <?php echo $post['title']; ?></h2>

<small> Posted on: <?php echo $post['created_at'];?> </small><br>
<div class="row">
	<div class="col-sm-3">
		
	<img src="<?php echo base_url();?>/assets/img/posts/<?php echo $post['post_image'];?>" width="250">
	
	</div >
	<div class="col-sm-9">
		
	<?php echo $post['body']; ?>
	</div>
</div>
</div>
<a class=" btn btn-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>">Edit Post</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?></br>
<input type="submit" value="Delete" class="btn btn-danger">
</form>