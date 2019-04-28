<h2><?=$title ?> </h2>

<?php foreach ($posts as $post) { ?>
	<h3> <?php echo $post['title']; ?> </h3>
	<div class="alert alert-primary" role="alert">
  
	<small>Posted on: <?php echo $post['created_at']; ?><strong> <?php echo  $post['name'];?></strong></small>
</div>
<div class="alert alert-danger" role="alert">
  
	<div class="">
	<?php echo word_limiter($post['body'],50) ; ?>
</div>
</div>
<a class="btn btn-outline-danger" href="<?php echo site_url('/posts/' .$post['slug']);?>">Readmore</a>
	<?php
}
?>

