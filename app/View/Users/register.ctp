<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Registration</h2>

		</div>

		<br/>

		<?php
			echo $this->Form->create('User', array('action' => 'register', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Name:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('name', array(
						'class' => 'form-control',
						'placeholder' => 'Full Name',
						'label' => false,
						'required'
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
						'placeholder' => 'you@example.com',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Password:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('password', array(
						'class' => 'form-control',
						'placeholder' => 'Password',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Confirm Password:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('confirm_password', array(
						'class' => 'form-control',
						'placeholder' => 'Password',
						'label' => false,
						'type' => 'password',
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Profile:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('profile', array(
						'class' => 'form-control',
						'placeholder' => 'Your description',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="modal-footer">

			<font color="grey" class="pull-right">By clicking 'Sign up', you agree to our <a href="#terms_and_conditions" data-toggle="modal" data-target=".terms_and_conditions">Terms and Conditions</a>.
			</font>

			<br>

			<?php

				$options = array(
					'class' => 'btn btn-primary pull-right',
					'label' => 'Sign Up'
				);

				echo $this->Form->end($options);
				
			?>
		
		</div>

	</div>

	<div class="modal fade terms_and_conditions" role="dialog">
	
		<div class="modal-dialog modal-lg">

			<div class="modal-content">

			<form class="form-horizontal">

				<div class="modal-header">

					<h4>Terms and conditions</h4>

				</div>

				<div class="modal-body">

					<div class="container">

					  <div class="row">
					
							<div class="col-xs-3" id="leftCol">

									<ul class="nav nav-stacked" id="sidebar">

										<li><a href="#sec0">Introduction</a></li>
										<li><a href="#sec1">License to use website</a></li>
										<li><a href="#sec2">Acceptable use</a></li>
										<li><a href="#sec3">Restricted access</a></li>
										<li><a href="#sec4">No warranties</a></li>
										<li><a href="#sec5">Limitations of liability</a></li>
										<li><a href="#sec6">Reasonableness</a></li>
										<li><a href="#sec7">Other parties</a></li>
										<li><a href="#sec8">Indemnity</a></li>
										<li><a href="#sec9">Breaches of these terms and conditions</a></li>
										<li><a href="#sec10">Variation</a></li>
										<li><a href="#sec11">Assignment</a></li>
										<li><a href="#sec12">Severability</a></li>
										<li><a href="#sec13">Exceptions</a></li>
										<li><a href="#sec14">Exceptions</a></li>     
										<li><a href="#sec15">Entire agreement</a></li>

									</ul>

							</div>
							  
							<div class="col-xs-5">

								<h2 id="sec0">Introduction</h2>

								These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.   If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website. 
								<br>
								This website uses cookies.  By using this website and agreeing to these terms and conditions, you consent to our HashKit's use of cookies in accordance with the terms of HashKit.
								<br>
								<h2 id="sec1">License to use website</h2>
								You may view, download for caching purposes only, and print pages from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.  
								<br>
								<h2 id="sec2">Acceptable use</h2>
								You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.
								<br>
								You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.
								<br>
								You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without HashKit’s express written consent.
								<br>
								<h2 id="sec3">Restricted access</h2>
								Access to certain areas of this website is restricted. HashKit reserves the right to restrict access to other areas of this website, or indeed this entire website, at HashKit’s discretion.
								<br>
								If HashKit provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.  
								<br>
								HashKit may disable your user ID and password in HashKit’s sole discretion without notice or explanation.
								<br>
								<h2 id="sec4">No warranties</h2>
								This website is provided “as is” without any representations or warranties, express or implied.  HashKit makes no representations or warranties in relation to this website or the information and materials provided on this website.  
								<br>
								Without prejudice to the generality of the foregoing paragraph, HashKit does not warrant that:
								<br>
								*this website will be constantly available, or available at all; or
								<br>
								*the information on this website is complete, true, accurate or non-misleading.
								<br>
								*Nothing on this website constitutes, or is meant to constitute, advice of any kind. 
								<br>
								<h2 id="sec5">Limitations of liability</h2>
								HashKit will not be liable to you (whether under the law of contact, the law of torts or otherwise) in relation to the contents of, or use of, or otherwise in connection with, this website:
								<br>
								to the extent that the website is provided free-of-charge, for any direct loss;
								<br>
								for any indirect, special or consequential loss; or
								<br>
								for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or corruption of information or data.
								<br>
								These limitations of liability apply even if HashKit has been expressly advised of the potential loss.
								<br>
								<h2 id="sec6">Reasonableness</h2>
								By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.  
								<br>
								If you do not think they are reasonable, you must not use this website.
								<br>
								<h2 id="sec7">Other parties</h2>
								You accept that, as a limited liability entity, HashKit has an interest in limiting the personal liability of its officers and employees.  You agree that you will not bring any claim personally against HashKit’s officers or employees in respect of any losses you suffer in connection with the website.
								<br>
								Without prejudice to the foregoing paragraph, you agree that the limitations of warranties and liability set out in this website disclaimer will protect HashKit’s officers, employees, agents, subsidiaries, successors, assigns and sub-contractors as well as HashKit. 
								<br>
								<h2 id="sec8">Indemnity</h2>
								You hereby indemnify HashKit and undertake to keep HashKit indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by HashKit to a third party in settlement of a claim or dispute on the advice of HashKit’s legal advisers) incurred or suffered by HashKit arising out of any breach by you of any provision of these terms and conditions
								<br>
								<h2 id="sec9">Breaches of these terms and conditions</h2>
								Without prejudice to HashKit’s other rights under these terms and conditions, if you breach these terms and conditions in any way, HashKit may take such action as HashKit deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.
								<br>
								<h2 id="sec10">Variation</h2>
								HashKit may revise these terms and conditions from time-to-time.  Revised terms and conditions will apply to the use of this website from the date of the publication of the revised terms and conditions on this website.  Please check this page regularly to ensure you are familiar with the current version.
								<br>
								<h2 id="sec11">Assignment</h2>
								HashKit may transfer, sub-contract or otherwise deal with HashKit’s rights and/or obligations under these terms and conditions without notifying you or obtaining your consent.
								<br>
								You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions.  
								<br>
								<h2 id="sec12">Severability</h2>
								If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect.  If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect. 
								<br>
								<h2 id="sec13">Exceptions</h2>
								Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in this website disclaimer will exclude or limit HashKit’s liability in respect of any:
								<br>
								death or personal injury caused by HashKit’s negligence;
								<br>
								fraud or fraudulent misrepresentation on the part of HashKit; or
								<br>
								matter which it would be illegal or unlawful for HashKit to exclude or limit, or to attempt or purport to exclude or limit, its liability.
								<br>
								<h2 id="sec14">Unenforceable provisions</h2>
								If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.
								<br>
								<h2 id="sec15">Entire agreement</h2>
								These terms and conditions constitute the entire agreement between you and HashKit in relation to your use of this website, and supersede all previous agreements in respect of your use of this website.
							  
							</div>
						
						</div>
					
					</div>						
				</div>

				<div class="modal-footer">

					<a class="btn btn-default" data-dismiss="modal">Close</a>

				</div>

			</form>

		</div>

	</div>

</div>

<script>
	
	$(document).ready(function() {

		$('#UserRegisterForm').submit(function() {
			var password = $('#UserPassword').val();
			var confirmPassword = $('#UserConfirmPassword').val();

			try {
				var errorMessage = '';
				if(password != confirmPassword) {
					throw 'Your passwords do not match!';
				}
				if(password.search(/\d/) == -1) {
					errorMessage += 'must contain at least one number.\n';
				}

				if(password.search(/[a-zA-Z]/)) {
					errorMessage += 'must contain at least one character.\n';
				}

				if(password.length < 8) {
					errorMessage += 'must be at least 8 characters long.';
				}

				if(errorMessage != '') {
					throw 'Your password must contain' + errorMessage;
				}
			} catch (err) {
				alert(err);
				event.preventDefault();
			}

			
		});

	});

</script>
