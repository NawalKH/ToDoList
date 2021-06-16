<style type="text/css">
body
{
  background-color: #ecf8ec;
}
</style>

<div  id="actions" style="  background: #DCDCDC; position: fixed;  right: 6%; float:right; width:12%; text-align: center; " >
    <h4>task Actions</h4>
    <a href="<?php echo base_url(); ?>notes/add/<?php echo $task->id; ?>">Add note</a><br>
   <a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit task</a><br>
  <a onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->id; ?>">Delete task</a>
</div>

<center>
<h1><?php echo $task->task_name; ?></h1>
<?php if($this->session->flashdata('note_deleted')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('note_deleted') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('note_created')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('note_created') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('note_updated')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('note_updated') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('marked_complete')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('marked_complete') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('marked_new')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('marked_new') . '</p>'; ?>
<?php endif; ?>


Created on:  <strong><?php echo date("n-j-Y",strtotime($task->create_date)); ?></strong><br>

<?php if ($task->due_date != 0): ?>
Due Date: <strong><?php echo date("n-j-Y",strtotime($task->due_date)); ?></strong>
<?php endif ?>

<br /><br />
<div style="max-width:500px;"><?php echo $task->task_body; ?></div>
<br /><br />

<h3> Notes</h3>
<?php if($notes) : ?>
  
    <?php foreach($notes as $note) : ?>
      <a href="<?php echo base_url(); ?>notes/show/<?php echo $note->note_id; ?>"><?php echo $note->note_name; ?></a><br>
    <?php endforeach; ?>
 
<?php else : ?>
    <p>There are no notes</p>
<?php endif; ?>
<br />
</center>