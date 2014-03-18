<div class="hashprocesses view">
<!-- <h2><?php echo __('Hashprocess'); ?></h2> -->
<!-- 	<dl> -->
<!-- 		<dt><?php echo __('Id'); ?></dt> -->
<!-- 		<dd> -->
<!-- 			<?php echo h($hashprocess['Hashprocess']['id']); ?> -->
<!-- 			&#38;nbsp; -->
<!-- 		</dd> -->
<!-- 		<dt><?php echo __('Plaintext'); ?></dt> -->
<!-- 		<dd> -->
<!-- 			<?php echo h($hashprocess['Hashprocess']['plaintext']); ?> -->
<!-- 			&#38;nbsp; -->
<!-- 		</dd> -->
<!-- 		<dt><?php echo __('Message Digest'); ?></dt> -->
<!-- 		<dd> -->
<!-- 			<?php echo h($hashprocess['Hashprocess']['message_digest']); ?> -->
<!-- 			&#38;nbsp; -->
<!-- 		</dd> -->
<!-- 	</dl> -->
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->Form->create('Hashprocess', array('action' => 'HashingPlaintext'));?>
	
	<?php 
		$algorithms = array();
		foreach($data as $key => $model ) : 
			$name = $model['Hashname']['name'];	
			$algorithms[$name] = $name;
		endforeach;
		echo $this->Form->input('Select', array(
			'type'=>'select',
			'multiple'=>'checkbox',
			'label'=> __(''),
			'class'=>'listOfCheckBox',
			'options'=> array('Algorithms'=> $algorithms)
			)
		);
	?>
	<?php echo $this->Form->end(__('Submit')); ?>

<!--
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hashprocess'), array('action' => 'edit', $hashprocess['Hashprocess']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hashprocess'), array('action' => 'delete', $hashprocess['Hashprocess']['id']), null, __('Are you sure you want to delete # %s?', $hashprocess['Hashprocess']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hashprocesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hashprocess'), array('action' => 'add')); ?> </li>
	</ul>
-->
</div>
