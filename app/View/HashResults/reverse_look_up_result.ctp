<div class="hashResults view">
<?php
if(is_array($data)) {
	echo 'This is the plaintext equivalent of the message digest <br>';
	echo 'These are the matching plaintext values: <br>';
	foreach($data as $key => $value ) {
		echo $value['Dictionary']['plaintext'];
	}
} else {
	echo 'There are no values matched to this message digest';
}
?>

</div>

