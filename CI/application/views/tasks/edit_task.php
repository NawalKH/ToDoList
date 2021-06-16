<style type="text/css">
body
{
  background-color: #ecf8ec;
}
</style>

<center>

<h1>Edit task</h1>
<!--Display Errors-->
<?php echo validation_errors('<p class="text-error">'); ?>
 <?php echo form_open('tasks/edit/'.$this_task->id.''); ?>
<!--Field: First Name-->
<p>
<?php echo form_label('task Name:'); ?>
<?php
$data = array(
              'name'        => 'task_name',
              'value'       => $this_task->task_name
            );
?>
<?php echo form_input($data); ?>
</p>
<!--Field: Last Name-->
<p>
<?php echo form_label('task Body:'); ?>
<?php
$data = array(
              'name'        => 'task_body',
              'value'       => $this_task->task_body
            );
?>
<?php echo form_textarea($data); ?>
</p>

<!--Submit Buttons-->
<?php $data = array("value" => "Update task",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>

</center>