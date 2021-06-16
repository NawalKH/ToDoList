<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}

  body
{
  background-image: url("../back.jpg");
  background-position: center;
}

</style>
</head>

<body>
<div class="w3-content" style="max-width:1000px">
<header class="w3-panel w3-center w3-opacity" style="padding:40px 16px">

<h1>Register</h1>

<div class="w3-padding-32">
    <div class="w3-bar w3-border">
      <a  href="<?php echo base_url(); ?>" class="w3-bar-item w3-button w3-light-grey">Home</a>
      </div>
      </div>


<p>Please fill out the form below to create an account</p>
<!--Display Errors-->
<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
 <?php echo form_open('users/register'); ?>
<!--Field: First Name-->

<center>


<p>
<?php echo form_label('First Name:'); ?><br>
<?php
$data = array(
              'name'        => 'first_name',
              'value'       => set_value('first_name')
            );
?>
<?php echo form_input($data); ?>
</p>
<!--Field: Last Name-->
<p>
<?php echo form_label('Last Name:'); ?><br>
<?php
$data = array(
              'name'        => 'last_name',
              'value'       => set_value('last_name')
            );
?>
<?php echo form_input($data); ?>
</p>

<!--Field: Email Address-->
<p>
<?php echo form_label('Email Address:'); ?><br>
<?php
$data = array(
              'name'        => 'email',
              'value'       => set_value('email')
            );
?>
<?php echo form_input($data); ?>
</p>

<!--Field: Username-->
<p>
<?php echo form_label('Username:'); ?><br>
<?php
$data = array(
              'name'        => 'username',
              'value'       => set_value('username')
            );
?>
<?php echo form_input($data); ?>
</p>

<!--Field: Password-->
<p>
<?php echo form_label('Password:'); ?><br>
<?php
$data = array(
              'name'        => 'password',
              'value'       => set_value('password')
            );
?>
<?php echo form_password($data); ?>
</p>

<!--Field: Password2-->
<p>
<?php echo form_label('Confirm Password:'); ?><br>
<?php
$data = array(
              'name'        => 'password2',
              'value'       => set_value('password2')
            );
?>
<?php echo form_password($data); ?>
</p>

<!--Submit Buttons-->
<?php $data = array("value" => "Register",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>

</center>
</div>

</header>
</body>