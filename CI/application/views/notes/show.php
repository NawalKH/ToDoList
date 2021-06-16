<style type="text/css">
body
{
  background-color: #ecf8ec;
}
</style>

<div  id="actions" style="  background: #DCDCDC; position: fixed;  right: 6%; float:right; width:12%; text-align: center; " >
    <h4>Note Actions</h4>
  <hr>   <a href="<?php echo base_url(); ?>notes/add/<?php echo $note->task_id; ?>">Add note</a><br>
    <a href="<?php echo base_url(); ?>notes/edit/<?php echo $note->id; ?>">Edit note</a><br>
    <a onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>notes/delete/<?php echo $note->task_id; ?>/<?php echo $this->uri->segment(3); ?>">Delete note</a><br>
</div>
<center>
<h1><?php echo $note->note_name; ?></h1>
<div id="info">

 Created On: <strong><?php echo date("n-j-Y",strtotime($note->create_date)); ?></strong>

<br />
<div style="max-width:500px;"><?php echo $note->note_body; ?></div>
<br /><br><hr /></center>

<!--<- Go Back to <a href="<?php echo base_url(); ?>tasks/show/<?php echo $note->task_id; ?>"><?php echo $note->task_name; ?></a>-->