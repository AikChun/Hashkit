<div class="hashResults view">
<?php
	echo 'Plaintext entered: '. $output[0]['HashResult']['plaintext']. '<br><br>';
?>
<?php foreach($output as $key => $data): ?>
	Selected Algorithm: <?php echo $data['HashResult']['hash_algorithm_name'];?> <br>
	Digest: <?php echo $data['HashResult']['message_digest'];?> <br>
	<br>
<?php endforeach;?>	

	Analysis: <?php echo $output[0]['HashResult']['description'];?> <br><br> 

<table>
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
