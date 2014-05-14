<div class="container">
<?php echo $data['User']['group_id'];
		echo 'Hello World';
?>

	<div class="jumbotron">
		
		<div class="modal-header">
			
			<h2>Edit User</h2>

		</div>

		<br>

		<?php
			echo $this->Form->create('User', array('action' => 'edit', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Name:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('name', array(
						'class' => 'form-control',
						'label' => false,
					));

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Email:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('email', array(
						'class' => 'form-control',
						'label' => false,
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">User Group:</label>
	
			<div class="col-lg-3">

				<select class="form-control" name="data[User][group_id]" required>

				<option value="">(choose one)</option>
					<option value="1"<?php if($groupId == 1){echo ' selected';}?>>Super Administrator</option>
					<option value="2"<?php if($groupId == 2){echo ' selected';}?>>Administrator</option>
					<option value="3"<?php if($groupId == 3){echo ' selected';}?>>Normal User</option>
				
				</select>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Profile:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('profile', array(
						'class' => 'form-control',
						'label' => false,
					));

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Status:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('status', array(
						'class' => 'form-control',
						'placeholder' => 'Status of current user',
						'label' => false
					));

				?>

			</div>

		</div>

		<div class="modal-footer">

			<div class="col-lg-5.5 pull-right">		

				<a href="/Users/index" class="btn btn-default">Back</a>
			
			</div>

			<div class="col-lg-7 pull-right">

				<?php

					$edit_user_save = array(
						'class' => 'btn btn-primary',
						'label' => 'Save'
					);

					echo $this->Form->end($edit_user_save);
					
				?>			

			</div>

		</div>
			
	</div>

</div>
