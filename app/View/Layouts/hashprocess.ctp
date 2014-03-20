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
						echo $this->Html->link('Sign in', array('controller' => 'users', 'action' => 'login'));
						echo " | ";
						echo $this->Html->link('Register!', array('controller' => 'users', 'action' => 'register'));
						//echo $this->Html->link(('Logout'), array('controller' => 'users', 'action' => 'logout'));
						echo "</div>";
		?>
			</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			<div class="actions">
				<h3><?php echo __('Quick Links'); ?></h3>

			<ul>
			<li> <?php echo $this->Html->link('Home', '/'); ?> </li>
			<li><?php echo $this->Html->link('Begin a Test', '/pages/begintest');?></li>
			<li><?php echo $this->Html->link('My Test Results', array('controller' => 'HashResults', 'action' => 'showmytestresults'))?></li>
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

