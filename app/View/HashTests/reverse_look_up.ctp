<div class="hashTests view">
<?php
echo $this->Form->create('HashTests');
	echo $this->Form->input('hash_algorithm', array(
    'options' => $data 
	));
echo $this->Form->input('message_digest', array(
'type' => 'text',
'div' => false,
'label' => 'Please enter your message digest:'
));
echo $this->Form->end(__('Submit'));

?>
</div>


