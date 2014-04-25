<div class="hashResults view">
<?php
	echo 'Plaintext entered: '. $output[0]['HashResult']['plaintext']. '<br><br>';
?>
<table>
<?php foreach($output as $key => $data): ?>
	<tr>
	<td>Selected Algorithm: <?php echo $data['HashResult']['hash_algorithm_name'];?> <br>
	</td>
	</tr>
	<tr>
	<td>Message Digest: <br><?php echo $data['HashResult']['message_digest'];?> <br></td>
	<br>
	</tr>
<?php endforeach;?>	
</table>

	
<table>
	<tr>
	<td>Analysis: <?php echo $output[0]['HashResult']['description'];?> <br></td>
	</tr>
	<?php 
	$collision_pt = $output[0]['HashResult']['collision_pt'];
	$collision_md = $output[0]['HashResult']['collision_md'];
	?>

	<?php foreach($output[0]['HashResult']['collision_pt'] as $key => $data):?>
	<tr>
	<td><?php echo $collision_pt[$key];?></td>
	<td><?php echo $collision_md[$key];?></td>
	<?php endforeach;?>
	</tr>
	
</table>

<table>
	<tr>
	<td>Comparing between selected algorithmn:</td>
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
<br>Recommended Hash Function: <?php echo $last['HashResult']['recommendation'];?> <br>
</div>