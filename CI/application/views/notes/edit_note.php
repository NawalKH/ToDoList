<style type="text/css">
body
{
  background-color: #ecf8ec;
}
</style>

<center><h1>Edit Note</h1>
<p style="color: #00008B;" >TASK :<strong> <?php echo $task_name; ?></strong></p>

<!--Display Errors-->
<?php echo validation_errors('<p class="text-error">'); ?>
<?php echo form_open('notes/edit/'.$this->uri->segment(3).''); ?>

<!--Field: note Name-->
<p>
<?php echo form_label('note Name:'); ?><br>
<?php
$data = array(
              'name'        => 'note_name',
              'value'       => $this_note->note_name
            );
?>
<?php echo form_input($data); ?>
</p>

<!--Field: note Body-->
<p>
<?php echo form_label('note Body:'); ?><br>
<?php
$data = array(
              'name'        => 'note_body',
              'value'       => $this_note->note_body
            );
?>
<?php echo form_textarea($data); ?>
</p>

<!--Field: Date-->

<!--Submit Buttons-->
<?php $data = array("value" => "Update note",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?></center>