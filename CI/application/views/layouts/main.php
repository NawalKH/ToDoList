<!DOCTYPE html>
<html>
<head>
	<title>To Do list</title>

 <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}

.jumbotron{
background-color:rgba(0, 0, 0, 0.3)
}

body
{
  background-image: url("./back.jpg");
  background-position: center;
}
</style>


</head>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1000px">

<!-- Header -->
<header class="w3-panel w3-center w3-opacity" style="padding:40px 16px">
  <h1 class="w3-xlarge">WELCOME</h1>
  <h1>To Do list app</h1>

  <?php if($this->session->userdata('logged_in')) : ?>
     <p style="color:#F08080;">Hello <?php echo $this->session->userdata('username'); ?></p>
    <?php endif; ?>


  <div class="w3-padding-32" > 
    <div class=" w3-border" >
    <!--<div class="w3-bar w3-border">-->
 <?php if($this->session->userdata('logged_in')) : ?>
     <a href="<?php echo base_url(); ?>home/index" class="w3-bar-item w3-button ">Home</a>
     <a href="<?php echo base_url(); ?>tasks/index" class="w3-bar-item w3-button" style="color:grey;"><?php $this->load->view('users/login'); ?></a>
      <?php endif; ?>
     <!-- <a href="#" class="w3-bar-item w3-button">notes</a> -->
    
    </div>
  </div>
</header>
</div>

<!-- End header Content -->
 <?php if(!$this->session->userdata('logged_in')) : ?>
<center>
<div class="jumbotron" style="width: 35%" >
<?php $this->load->view('users/login'); ?>
</div></center>

<?php endif; ?>

<?php $this->load->view($main_content); ?>

</body>

</html>

