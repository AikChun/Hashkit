<div class="container">

	<div class="jumbotron">

		<div class="modal-header">

			<h2>Forgot Password</h2>

		</div>

		<br/>

		<?php
			echo $this->Form->create('User', array('action' => 'forget_password','class' => 'form-horizontal'));
		?>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Email:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('email', array(
						'class' => 'form-control',
						'placeholder' => 'you@example.com',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="modal-footer">
			
			<?php

				$forget_password_send = array(
					'class' => 'btn btn-primary pull-right',
					'label' => 'Send'
				);

				echo $this->Form->end($forget_password_send);

			?>

		</div>

	</div>

</div>

<!--
<div class="users view">
<h2 class="hightitle"><?php echo __('Password Recovery'); ?></h2>
<?php
echo $this->Form->inputs(array(
	'legend' => __('Reset password'),
	'User.email' => array('type' => 'email'),
));
?>
<?php echo $this->Form->end('Submit');?>
</div>
-->