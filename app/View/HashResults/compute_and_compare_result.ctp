<div class="hashResults view">

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

	
<table>
	<tr>
	<td><B>Analysis: <B></td>
	</tr>
	<tr>
	<td><?php echo $output[0]['HashResult']['description'];?> <br></td>
	</tr>
	<?php 
	if(count($ptline) > 1) {
	$collision_pt = $output[0]['HashResult']['collision_pt'];
	$collision_md = $output[0]['HashResult']['collision_md'];
	?>

	<?php foreach($output[0]['HashResult']['collision_pt'] as $key => $data):?>
	<tr>
	<td><?php echo $collision_pt[$key];?></td>
	<td><?php echo $collision_md[$key];?></td>
	<?php endforeach;?>
	<?php } ?>
	</tr>
</table>

<table>
	<tr>
	<td><B>Comparing between selected algorithmn:<B></td>
	</tr>

	<tr>
	<td>Algorithm</td>
	<?php foreach($output as $key => $data):?>
	<td><?php echo $data['HashResult']['hash_algorithm_name'];?></td>
	<?php endforeach;?>
	</tr>

	<tr>
	<td>Speed(MB/s)</td>
	<?php foreach($output as $key => $data):?>
	<td><?php echo $data['HashResult']['speed'];?></td>
	<?php endforeach;?>
	</tr>

	<tr>
	<td>Collision Resistence</td>
	<?php foreach($output as $key => $data):?>
	<td><?php echo $data['HashResult']['collision_resistance'];?></td>
	<?php endforeach;?>
	</tr>

	<tr>
	<td>preimage Resistence</td>
	<?php foreach($output as $key => $data):?>
	<td><?php echo $data['HashResult']['preimage_resistance'];?></td>
	<?php endforeach;?>
	</tr>


	<tr>
	<td>2nd preimage Resistence</td>
	<?php foreach($output as $key => $data):?>
	<td><?php echo $data['HashResult']['2nd_preimage_resistance'];?></td>
	<?php endforeach;?>
	</tr>
</table>
<?php $last = end($output);?>
<table>
	<tr>
	<td><B>Recommended Hash Function: <B></td>
	</tr>
	<tr>
	<td><?php echo $last['HashResult']['recommendation'];?></td>
	</tr>
</table>
</div>