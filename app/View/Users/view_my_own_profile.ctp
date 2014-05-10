<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>My Profile</h2>

		</div>

		<br/>

		<div class="form-horizontal">

			<div class="form-group">

				<label class="col-lg-2 control-label" style="top: -7px;">Name:</label>

				<div class="col-lg-10">

					<?php
						echo $authUser['name'];
					?>

				</div>

			</div>

			<div class="form-group">

				<label class="col-lg-2 control-label" style="top: -7px;">Email:</label>

				<div class="col-lg-10">

					<?php
						echo $authUser['email'];
					?>

				</div>

			</div>

			<div class="form-group">

				<label class="col-lg-2 control-label" style="top: -7px;">Profile:</label>

				<div class="col-lg-10">

					<?php
						echo $authUser['profile'];
					?>

				</div>

			</div>

		</div>

		<div class="modal-footer">

			<div class="form-group pull-right">

				<a href="/HashTests/show_test_results" class="btn btn-primary">View History</a>
				<a href="/Users/edit_my_own_profile" class="btn btn-primary">Edit My Profile</a>
				<a href="/" class="btn btn-default">Back to Home</a>

			</div>

		</div>

	</div>

</div>
