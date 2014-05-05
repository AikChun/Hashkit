<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>My Profile</h2>

		</div>

		<br/>

		<div class="form-horizontal">

			<div class="form-group">

				<label for="profile-email" class="col-lg-2 control-label">Email:</label>

				<div class="col-lg-10">

					<?php

						echo $authUser['email'];

					?>

				</div>

			</div>

			<div class="form-group">

				<label for="profile-group_id" class="col-lg-2 control-label">Group ID:</label>

				<div class="col-lg-10">

					<?php

						echo $authUser['group_id'];

					?>

				</div>

			</div>

			<div class="form-group">

				<label for="profile-profile" class="col-lg-2 control-label">Profile:</label>

				<div class="col-lg-10">

					<?php

						echo $authUser['profile'];

					?>

				</div>

			</div>

		</div>

		<div class="modal-footer">

		</div>

		<div class="form-group pull-right">

			<a href="/descriptions/show_test_results" class="btn btn-primary" data-dismiss="modal">View History</a>
			<a href="/Users/edit_my_own_profile" class="btn btn-primary" data-dismiss="modal">Edit My Profile</a>
			<a href="/" class="btn btn-default" data-dismiss="modal">Back to Home</a>

		</div>

	</div>

</div>
