<div class="hashAlgorithms view">
<?php
if(!empty($output)) : ?>
	
	<table>
	<tr>
	<td><B>Plaintext entered: </B></td>
	</tr>
	<?php $ptline = explode("\n",$output[0]['HashResult']['plaintext']);?>
	<?php if(count($ptline > 1)) { ?>
	<tr>
	<?php foreach($ptline as $key1 => $data1):?>
	<td><?php echo $data1; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php }else{ ?>
	<tr>
	<td><?php echo $output[0]['HashResult']['plaintext']; ?></td>
	</tr>
	<?php } ?>
</table>

<table>
	
	<?php foreach($output as $key1 => $data1):?>
	<?php $mdline = explode("\n",$data1['HashResult']['message_digest']);?>
	<tr>
	<td><B>Selected Algorithm: <B><?php echo $data1['HashResult']['hash_algorithm_name'];?>
	</td>
	</tr>
	<tr>
	<td><B>Message Digest: <B></td>
	</tr>
	<?php foreach($mdline as $key2 => $data2): ?>
	<tr>
	<td><?php echo $data2;?> </td>
	<?php endforeach;?>
	<?php endforeach;?>	
	</tr>
</table>

<?php
endif;
if(empty($output)) :
	
?>
Please select and choose your choice of algorithm.
<?php
	endif;
?>
</div>
