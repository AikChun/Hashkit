<div class="container">

	<div class="jumbotron">
		
		<div class="modal-header">
			
			<h2>All Users</h2>

		</div>

		<br>

		<div>

			<?php

				echo '<table class="table table-striped table-bordered">';

					echo '<tr>';

						echo '<td>';
							echo $this->Paginator->sort('id');
						echo '</td>';

						echo '<td>';
							echo $this->Paginator->sort('name');
						echo '</td>';

						echo '<td>';
							echo $this->Paginator->sort('email');
						echo '</td>';

						echo '<td>';
							echo $this->Paginator->sort('group_id');
						echo '</td>';

						echo '<td>';
							echo $this->Paginator->sort('status');
						echo '</td>';

						echo '<td>';
							echo 'Actions';
						echo '</td>';

					echo '</tr>';

					foreach ($users as $user){

						echo '<tr>';

							echo '<td>';
								echo h($user['User']['id']);
							echo '</td>';

							echo '<td>';
								echo h($user['User']['name']);
							echo '</td>';

							echo '<td>';
								echo h($user['User']['email']);
							echo '</td>';

							echo '<td>';

								if (h($user['User']['group_id']) == 1) {
									echo 'Super Administrator';
								} elseif (h($user['User']['group_id']) == 2) {
									echo 'Administrator';
								} elseif (h($user['User']['group_id']) == 3) {
									echo 'Normal User';
								}

							echo '</td>';

							echo '<td>';
								echo h($user['User']['status']);
							echo '</td>';

							echo '<td>';
								echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']));
								echo ' | ';
								echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']));
								echo ' | ';
								echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id']));
							echo '</td>';

						echo '</tr>';

					}
				
				echo '</table>';

			?>

			<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
			?>

			<ul class="paging pager">

				<?php

					echo $this->Paginator->prev('< ' . __('Previous | '), array(), null, array('class' => 'prev enabled'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('Next') . ' >', array(), null, array('class' => 'next disabled'));
				
				?>
		
			</ul>

		</div>

		<div class="modal-footer">

			<div class="pull-right">

				<a href="/Users/admin_add" class="btn btn-primary ">Add User</a>
				<a href="/" class="btn btn-default">Back to Home</a>

			</div>

		</div>

	</div>

</div>