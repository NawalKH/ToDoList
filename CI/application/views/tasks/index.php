<style type="text/css">
body
{
  background-color: #ecf8ec;
}
</style>

<center>
<h1>tasks</h1>
<?php if($this->session->flashdata('task_created')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_created') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('task_deleted')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_deleted') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('task_updated')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('task_updated') . '</p>'; ?>
<?php endif; ?>

<p>These Are Your Current Tasks</p>  </center>
<ul class="task_items">
<?php foreach ($tasks as $task) : ?>
    <li>
        <div class="task_name"><a style="color: #00008B;" href="<?php echo base_url(); ?>tasks/show/<?php echo $task->id; ?>"><?php echo $task->task_name; ?></a></div>
        <div class="task_body" style="color: #696969;"><?php echo $task->task_body; ?></div><hr>
    </li>
<?php endforeach; ?>
</ul>
 
<center><p >To create a new task - <a style="color: #000080;" href="<?php echo base_url(); ?>tasks/add">CLICK HERE </a></center<<p> 