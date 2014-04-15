<div class="hashResults view">

<?php
echo $this->Form->create('HashTests', array('action' => 'basic_hashing_input','type' => 'file'));
?>


<fieldset>
<legend> Get Your Hashing Fun!</legend>
<?php
echo $this->Form->input('plaintext', array(
'type' => 'text',
'div' => false,
'label' => 'Please enter your plaintext:'
));
?>

<br><br><br>
<div class="or" style="font-size:200%">OR</div>
<br><br>

<?php
echo $this->Form->input('file_upload',array(
'type' => 'file',
'div' => false,
'label' => 'Upload your text file'
));
?>
</fieldset>

<?php echo $this->Form->end(__('Submit')); ?>

</div>
