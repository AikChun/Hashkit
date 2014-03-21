<?php
	
?>
<div class="users view">
<div style="float:center">
<div class="header" style="font-size:165%">
Welcome!
</div>
<br><br>This is a project done by a group of University of Wollongong (UOW) students. <br>
The purpose of this project to provide the public with some tools for cryptographic application.<br><br>

<?php echo $this->Html->link('Sign in', array('controller' => 'users', 'action' => 'login')); ?>
	
 or 

<?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'register'));?>

to begin using our product!

</div>
</div>
