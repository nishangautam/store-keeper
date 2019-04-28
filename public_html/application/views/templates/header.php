<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #000080;
  color: white;
  text-decoration: none;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
  text-decoration: none;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>/assets/img/title.jpg">
   	<title><?php $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top  bg-dark ">
  <a class="navbar-brand" href="<?php echo base_url();?>">Ci Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <?php if(!$this->session->userdata('logged_in')) : ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>customer">Customer</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>supplier">Supplier</a>
      </li>
     
      <?php endif; ?>
    </ul>
    <ul class="navbar-nav nabbar-right ">
     <?php if(!$this->session->userdata('logged_in')) : ?>
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>users/login">Login</a></li>
      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>users/register">Register</a></li>
      <?php endif; ?>
      <?php if($this->session->userdata('logged_in')) : ?>
     <!--  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>categories/create">Create Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>customer/create">Create Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>supplier/create">Create Supplier</a>
      </li> -->
      <li class="nav-item">
      <p class="nav-link"><i class="fa fa-user">  <?php echo $this->session->userdata('username'); ?> </i></p> 
      </li>
      <li><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
    <?php endif; ?>
    </ul>
    
  </div>
</nav> 
<br>
<br>
<br>
  <?php if($this->session->userdata('logged_in')) : ?>
  <div class="sidebar">
    <a class="nav-link" href="<?php echo base_url();?>"><i class="fa fa-fw fa-home"></i>Home</a>
 
  <a class="nav-link" href="<?php echo base_url();?>category/create">Create Category</a>
  <a class="nav-link" href="<?php echo base_url();?>supplier/create">Create Supplier</a>
  <a class="nav-link" href="<?php echo base_url();?>customer/create">Create Customer</a>
  <a class="nav-link" href="<?php echo base_url();?>product/create">Create Product</a>
  <a class="nav-link" href="<?php echo base_url();?>purchase/purchase">Create Purchase</a>
  <a class="nav-link" href="<?php echo base_url();?>sale/sale">Create Sale</a> 
  <a class="nav-link" href="<?php echo base_url();?>category/">View Category</a>
  <a class="nav-link" href="<?php echo base_url();?>supplier/">View Supplier</a>
  <a class="nav-link" href="<?php echo base_url();?>customer/">View Customer</a>
  <a class="nav-link" href="<?php echo base_url();?>product/">View Product</a>
  <a class="nav-link" href="<?php echo base_url();?>purchase/">View Purchase</a>
  <a class="nav-link" href="<?php echo base_url();?>sale/">View Sale</a>
</div>
 <?php endif; ?>
<div class="content">
  <div class="container">
 
 
  <div class="col col-sm-4">
     <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>



  </div>

</div>

   