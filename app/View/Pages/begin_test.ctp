<div class="pages view">

<div class="header" style="font-size: 165%">
Begin a Test 
<br>
<br>
</div>
<?php echo $this->Html->link('Basic Hashing', array('controller' => 'HashTests', 'action' => 'basic_hashing'));?>
<br>
<?php echo $this->Html->link('Compute and Compare', array('controller' => 'HashTests','action' => 'compute_and_compare'));?>
<br>
	<?php echo $this->Html->link('Reverse Hash Look up', array('controller' => 'HashTests', 'action' => 'reverse_look_up'));?>
</div>
