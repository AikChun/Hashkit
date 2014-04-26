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

	  	<?php 

	  		echo $this->Html->charset(); 
			echo $this->Html->meta('icon');
			echo $this->Html->css('new');
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
			echo $this->Html->script('bootstrap.js');
			echo $this->Html->script('jquery-2.1.0.js');

			$this->Js->JqueryEngine->jQueryObject = '$j';
			echo $this->Html->scriptBlock(
    			'var $j = jQuery.noConflict();',
    			array('inline' => false)
			);
	  	?>

	  	<title>
			<?php echo $cakeDescription ?>
			<?php echo $title_for_layout; ?>
	  	</title>

		<style>

			#cssmenu {
			  background: #000000;
			  width: auto;
			}
			#cssmenu ul {
			  list-style: none;
			  margin: 0;
			  padding: 0;
			  line-height: 1;
			  display: block;
			  zoom: 1;
			}
			#cssmenu ul:after {
			  content: ' ';
			  display: block;
			  font-size: 0;
			  height: 0;
			  clear: both;
			  visibility: hidden;
			}
			#cssmenu ul li {
			  float: left;
			  display: block;
			  padding: 0;
			}
			#cssmenu ul li a {
			  color: #ffffff;
			  text-decoration: none;
			  display: block;
			  padding: 15px 25px;
			  font-family: 'Open Sans', sans-serif;
			  font-weight: 700;
			  text-transform: uppercase;
			  font-size: 14px;
			  position: relative;
			  -webkit-transition: color .25s;
			  -moz-transition: color .25s;
			  -ms-transition: color .25s;
			  -o-transition: color .25s;
			  transition: color .25s;
			}
			#cssmenu ul li a:hover {
			  color: #333333;
			}
			#cssmenu ul li a:hover:before {
			  width: 100%;
			}
			#cssmenu ul li a:after {
			  content: '';
			  display: block;
			  position: absolute;
			  right: -3px;
			  top: 19px;
			  height: 6px;
			  width: 6px;
			  background: #ffffff;
			  opacity: .5;
			}
			#cssmenu ul li a:before {
			  content: '';
			  display: block;
			  position: absolute;
			  left: 0;
			  bottom: 0;
			  height: 3px;
			  width: 0;
			  background: #333333;
			  -webkit-transition: width .25s;
			  -moz-transition: width .25s;
			  -ms-transition: width .25s;
			  -o-transition: width .25s;
			  transition: width .25s;
			}
			#cssmenu ul li.last > a:after,
			#cssmenu ul li:last-child > a:after {
			  display: none;
			}
			#cssmenu ul li.active a {
			  color: #333333;
			}
			#cssmenu ul li.active a:before {
			  width: 100%;
			}

			@media screen and (max-width: 768px) {
			  #cssmenu ul li {
				float: none;
			  }
			  #cssmenu ul li a {
				width: 100%;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			  }
			  #cssmenu ul li a:after {
				display: none;
			  }
			  #cssmenu ul li a:before {
				height: 1px;
				background: #ffffff;
				width: 100%;
				opacity: .2;
			  }
			  #cssmenu ul li.last > a:before,
			  #cssmenu ul li:last-child > a:before {
				display: none;
			  }

			}

			 #wrap { 
			  width: 900px; 
			  margin: 0 auto; 
			 }

		</style>

	</head>

	<body>

		<div id='wrap'>

		<div id='header'>

			<hr/>
			<p align='center'> MAYBE OUR LOGO HERE </p>
			<hr/>

		</div>

		<div id='cssmenu'>

			<ul>

				<li class='active'><a href='/'><span>Home</span></a></li>
				<li><a href='http://hashkitproject.blogspot.sg/'><span>Blog</span></a></li>
				<li><a href='/Users/HelpfulInformation'><span>Helpful Information</span></a></li>
				<li><a href='/Users/AboutUs'><span>About Us</span></a></li>
				<li class='last'><a href='/Users/ContactUs'><span>Contact Us</span></a></li>

			</ul>

		</div>

		<p align='right'>

			<?php if($authUser):?>

				<a href="/"> <?php echo $authUser['name'];?> </a>
				<a> | </a>
				<a href="/Users/Logout"> Logout</a>

			<?php endif;?>

			<?php if(!$authUser):?>

				<a href="/Users/Login">Sign In</a>
				<a> | </a>
				<a href="/Users/Register"> Register</a>

			<?php endif;?>

		</p>

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>

		</div>

	<?php echo $this->Js->writeBuffer(); ?>// Write cached scripts	
	</body>

</html>