<style type="text/css">
body
{
  background-color: #ecf8ec;
}
</style>

<center><h1>Add a Note</h1>
<p style="color: #00008B;" >TASK : <strong> <?php echo $task_name; ?></strong></p>

<!--Display Errors-->
<?php echo validation_errors('<p class="text-error">'); ?>
<?php echo form_open('notes/add/'.$this->uri->segment(3).''); ?>

<!--Field: note Name-->
<p>
<?php echo form_label('Note Name:'); ?><br>
<?php
$data = array(
              'name'        => 'note_name',
              'value'       => set_value('note_name')
            );
?>
<?php echo form_input($data); ?>
</p>

<!--Field: note Body-->
<p>
<?php echo form_label('Note Body:'); ?><br>
<?php
$data = array(
              'name'        => 'note_body',
              'value'       => set_value('note_body')
            );
?>
<?php echo form_textarea($data); ?>
</p>


<!--Submit Buttons-->
<?php $data = array("value" => "Add note",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?></center>