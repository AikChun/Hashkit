<div class="users view">
<h2 class="hightitle"><?php echo __('Password Recovery'); ?></h2>
<?php echo $this->Form->create('User', array('action' => 'forget_password', 'style' => "margin-left:62px;"));?>
<?php echo $this->Form->input('email',array('style'=>'float:left'));?>
<?php echo $this->Form->end('Submit');?>
</div>