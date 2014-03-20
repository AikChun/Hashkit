<div class="hashResults index">
	<h2><?php echo __('Hash Results'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('plaintext'); ?></th>
			<th><?php echo $this->Paginator->sort('message_digest'); ?></th>
	</tr>
	<?php foreach ($hashResults as $hashResult): ?>
	<tr>
		<td><?php echo h($hashResult['HashResult']['id']); ?>&nbsp;</td>
		<td><?php echo h($hashResult['HashResult']['plaintext']); ?>&nbsp;</td>
		<td><?php echo h($hashResult['HashResult']['message_digest']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
