<?php if($this->session->userdata('logged_in')) : ?>

    <!--Start Form-->
    <?php $attributes = array('id' => 'logout_form', 'class' => 'form-horizontal'); ?>
    <?php echo form_open('users/logout',$attributes); ?>

         <!--Submit Buttons-->
    <?php $data = array("value" => "Logout", "name" => "submit", "class" => "w3-bar-item w3-button"); ?>
    <?php echo form_submit($data); ?>
    <?php echo form_close(); ?>

<?php else : ?>


<?php if($this->session->flashdata('login_failed')) : ?>
    <?php echo '<p class="text-error">' .$this->session->flashdata('login_failed') . '</p>'; ?>


<?php endif; ?>


<style type="text/css">
	h4, .n
	{color:lightgray;}
</style>
<!-- LOGIN FORM -->

<?php $attr= array('id' =>'login_form','calss'=>'form-horizontal' ); ?>
<?php echo form_open('users/login', $attr);?>
<center>
<p>
<!-- user name-->
 <h4>Username: 
 <?php $data=array('name'=> 'username','style'=>'width:30%;','value'=>set_value('username'));?>
 <?php echo form_input($data); ?> </h4>
 </p>
 <p>
 <!-- password-->
  <h4>Password:
 <?php $data=array('name'=> 'password','style'=>'width:30%','value'=>set_value('password'));?>
 <?php echo form_password($data); ?> </p></h4>
 </p>
 <!--  sumbit-->
 <?php $data=array('name'=> 'submit','class'=>'btn btn','value'=>'Login');?>
 <?php echo form_submit($data); ?> 


</p></center>
<?php echo form_close() ; ?>


<div class="n" style="font-size: 16px;"> new user ! <a style="color: #00008B;" href="<?php echo base_url(); ?>users/register">Register</a></div>

<?php endif; ?>