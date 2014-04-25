<div class="hashResults view">

	<?php echo "For the sample space of " . '<font color="red">'. $samplespace . '<font color="black">'. " and the total size of hash function output " . '<font color="red">'. $totalhash . '<font color="black">' . ","?>
	<br>

	<?php echo "the probability of getting a collision in numbers of tries: " . round($probability,2) . " %"; ?>
	<br>

	<?php echo "the required sample space to get 99% probability of getting a collision: " . $requiredsamplespace . " hashes"; ?>
	<br>

	<?php echo $this->Form->button('<-',array('controller' => 'HashTests', 'action' => 'calculate_probability_of_collision'));?>
	<?php echo $this->Form->button('home',array('controller' => 'HashTests', 'action' => 'hash_function_properties'));?>
</div>
