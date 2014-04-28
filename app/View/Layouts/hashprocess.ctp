<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'FYP: Hashkit');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		//echo $this->Html->css('Bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, '/'); ?>

		<?php 
						echo "<div style='float:right'>";
						//echo "Logged in as ";
						if(empty($authUser)) {
							echo $this->Html->link('Sign in', array('controller' => 'users', 'action' => 'login'));
							echo " | ";
							echo $this->Html->link('Register!', array('controller' => 'users', 'action' => 'register'));
						}
						//echo $this->Html->link(('Logout'), array('controller' => 'users', 'action' => 'logout'));
						else {
							echo $this->Html->link($authUser['name'], '/');
							echo " | ";
							echo $this->Html->link(('Logout'), array('controller' => 'users', 'action' => 'logout'));
						}
						echo "</div>";
		?>
			</h1>
		</div>	
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

			<div class="actions">
				<?php  if($authUser['group_id'] == 1) :?>
				<h3><?php echo __('Admin Actions'); ?></h3>
				<ul>
					<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index', 'controller' => 'users')); ?></li>
					<li><?php echo $this->Html->link(__('Add Users'), array('controller' => 'users', 'action' => 'admin_add')); ?></li>
				</ul>
				<?php endif;?>

				<h3><?php echo __('Quick Links'); ?></h3>
				<ul>
					<li> <?php echo $this->Html->link('Home', '/'); ?> </li>
					<?php if(!empty($authUser)) :?>
					<li><?php echo $this->Html->link('Hash functions and properties', '/pages/hash_function_properties');?></li>	
					<li><?php echo $this->Html->link('Begin a Test', '/pages/begin_test');?></li>
					<li><?php echo $this->Html->link('My Test Results', array('controller' => 'HashResults', 'action' => 'show_my_test_results'))?></li>
					<?php endif;?>
					<li><?php echo $this->Html->link('Blog', 'http://hashkitproject.blogspot.sg/')?></li>
				</ul>
			</div>

		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
