<div class="container">
	<div class="jumbotron">
		<?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
		<div class="modal-header">

			<h2>Add User</h2>

		</div>
		<br/>
		<div class="form-group">

			<label class="col-lg-2 control-label">Name :</label>

			<div class="col-lg-5">
				<?php echo $this->Form->input('name',array(
						'class' => 'form-control',
						'placeholder' => 'name',
						'label' => false,
						'required'

				)); ?>
			</div>
		</div>
		<br/>
		<div class="form-group">

			<label class="col-lg-2 control-label">Email address :</label>

			<div class="col-lg-5">
				<?php echo $this->Form->input('email',array(
						'class' => 'form-control',
						'placeholder' => 'email address',
						'label' => false,
						'required'

				)); ?>
			</div>
		</div>
		<br/>
		<div class="form-group">

			<label class="col-lg-2 control-label">Password :</label>

			<div class="col-lg-5">
				<?php echo $this->Form->input('password',array(
						'class' => 'form-control',
						'placeholder' => 'password',
						'label' => false,
						'required'

				)); ?>
			</div>
		</div>
		<br/>

		<div class="form-group">
			<label class="col-lg-2 control-label">Choose Group:</label>
			<div class="col-lg-2">
				<select class="form-control" name="data[User][group_id]">
					<option value="">(choose one)</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
			</div>
		</div>
		<br/>
		<div class="form-group">

			<label class="col-lg-2 control-label">Profile :</label>

			<div class="col-lg-5">
				<?php echo $this->Form->input('profile',array(
						'class' => 'form-control',
						'placeholder' => 'orekad adspfke amapdm...',
						'label' => false,
						'required'

				)); ?>
			</div>
		</div> 
		<br/>
		<div class="form-group">
			<div class="col-lg-12">
				<?php echo $this->Form->buttoon('Submit',array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Submit',
						'type' => 'Submit'

				)); ?>
			</div>
		</div> 
	</div>
</div>
