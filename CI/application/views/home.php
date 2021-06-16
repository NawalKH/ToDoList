<style type="text/css">
body
{
  background-color: #ecf8ec;
}
</style>

<?php if($this->session->flashdata('registered')) : ?>

    <?php echo '<p class="text-success">' .$this->session->flashdata('registered') . '</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('login_success')) : ?>

    <?php echo '<p class="text-success">' .$this->session->flashdata('login_success') . '</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('logged_out')) : ?>

    <?php echo '<p class="text-success">' .$this->session->flashdata('logged_out') . '</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('noaccess')) : ?>

    <?php echo '<p class="text-danger">' .$this->session->flashdata('noaccess') . '</p>'; ?>
<?php endif; ?>


<?php if($this->session->userdata('logged_in')) : ?>

<center> <h3>My Latest tasks</h3>

<center><p >To create a new task - <a style="color: #000080;" href="<?php echo base_url(); ?>tasks/add">CLICK HERE </a></center<<p> 

<table class=" table-sm table-striped" width="70%"  cellspacing="5" cellpadding="5">
    <tr >
        <th style=" text-align: center;">task Name</th>
        <th style="  text-align: center;">Created On</th>
        <th style=" text-align: center;">View</th>
    </tr>
    <?php if(isset($tasks)) : ?>
    <?php foreach($tasks as $task) : ?>
    <tr>
        <td style=" text-align: center;"><?php echo $task->task_name; ?></td>
        <td style=" text-align: center;"><?php echo $task->create_date; ?></td>
        <td style=" text-align: center;" ><a href="<?php echo base_url(); ?>tasks/show/<?php echo $task->id; ?>">View task</a></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table></center>

 <?php endif; ?>