<div class="pages view">

<div class="header" style="font-size: 165%">
Hash Functions and their properties
<br>
<br>
What is a hash function ? 

<br>
<?php echo $this->Html->link('The probability of having a single collision', array('controller' => 'HashTests','action' => 'calculate_probability_of_collision'));?>
<br>
<?php echo $this->Html->link('Avalanche effect', array('controller' => 'HashTests','action' => 'avalanche_effect'));?>
<br>
<?php echo $this->Html->link('Hash analyser', array('controller' => 'HashTests','action' => 'hash_analyser'));?>
<br>
<?php echo $this->Html->link('Birthday attack', array('controller' => 'HashTests','action' => 'birthday_attack'));?>
</div>
</div>
