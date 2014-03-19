<div class="hashResults view">

<?php
echo $this->Form->create('HashResults', array('action' => 'inputPlaintext'));
?>
<fieldset>
<legend> Get Your Hashing Fun!</legend>
<?php
echo $this->Form->input('HashResult.plaintext', array(
'type' => 'text',
'div' => false,
'label' => 'Please enter your plaintext:'
));
?>
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
