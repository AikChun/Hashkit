<div class="hashTests view">

<?php
echo $this->Form->create('HashTests', array('action' => 'compute_and_compare_input'));
?>
<fieldset>
<legend> Get Your Hashing Fun!</legend>
<?php
echo $this->Form->input('plaintext', array(
'type' => 'text',
'div' => false,
'label' => 'Please enter your plaintext:'
));
echo $this->Form->input('id', array(
'type' => 'hidden',
'div' => false,
'value' => 1
));
?>
<br><br><br>
<div class="or" style="font-size:200%">OR</div>
<br><br>

<?php
echo $this->Form->input('file_upload', array(
'type' => 'file',
'div' => false,
'label' => 'Upload your text file'
));
?>
</fieldset>
	<div class="email" style="">
		<input type="checkbox" name="data[HashTests][email]" value="1" id="email_checkbox"/> Send email notification when results are done.
	</div>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
