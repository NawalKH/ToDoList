<style type="text/css">
body
{
  background-color: #ecf8ec;
}
</style>


<center><h1>Add a task</h1>
<p>Please fill out the form below to create a new task</p>
<!--Display Errors-->
<?php echo validation_errors('<p class="text-error">'); ?>
 <?php echo form_open('tasks/add'); ?>
<!--Field: First Name-->
<p>
<div style="color: black;" >
<?php echo form_label('Task Name:'); ?><br>
<?php
$data = array(
              'name'        => 'task_name',
              'value'       => set_value('task_name')
            );
?>
<?php echo form_input($data); ?>
</p>
<!--Field: Last Name-->
<p>
<?php echo form_label('Task Body:'); ?><br>
<?php
$data = array(
              'name'        => 'task_body',
              'value'       => set_value('task_body')


            );
?>
<?php echo form_textarea($data); ?>

</p>

<!--Field: Date-->
<p>
<?php echo form_label('Due Date:'); ?><br>
<input type="date" name="due_date" />
</p>


<!--Submit Buttons-->
<?php $data = array("value" => "Add task",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?></div></center>