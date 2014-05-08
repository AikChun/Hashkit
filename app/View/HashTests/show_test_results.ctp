<div class="container">

	<div class="jumbotron">
		
		<div class="modal-header">
			
			<h2>Your Hash Results</h2>

		</div>

		<br>

		<div class="">

			<?php

				echo '<table class="table table-striped table-bordered">';

					echo '<tr>';

						echo '<td>';
							echo $this->Paginator->sort('id');
						echo '</td>';

						echo '<td>';
							echo $this->Paginator->sort('created');
						echo '</td>';

					echo '</tr>';

					foreach ($hashtests as $hashtest){

						echo '<tr>';

							echo '<td>';
								echo h($hashtest['HashTest']['id']);
							echo '</td>';

							echo '<td>';
								echo h($hashtest['HashTest']['created']);
							echo '</td>';

							echo '<td>';
								echo $this->Html->link(__('View'), array('action' => 'view', $hashtest['HashTest']['id']));
								echo ' | ';
								echo $this->Html->link(__('Edit'), array('action' => 'edit', $hashtest['HashTest']['id']));
								echo ' | ';
								echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hashtest['HashTest']['id']), null, __('Are you sure you want to delete # %s?', $hashtest['HashTest']['id']));
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

		</div>

		<div class="pull-right">

				<a href="/" class="btn btn-default">Back to Home</a>

			</div>

		</div>

	</div>

</div>