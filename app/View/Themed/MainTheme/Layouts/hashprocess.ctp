<html>
<?php echo $this->fetch('content');?>
	<div class="actions">
		<h3><?php echo __('Quick Links'); ?></h3>

	<ul>
	<li> <?php echo $this->Html->link('Home', array('controller' => 'hashprocesses', 'action' => 'view')); ?> </li>
	</ul>
</html>


