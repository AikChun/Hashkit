<?php

echo '<script language="javascript">';
echo 'function displayInfo(){
		var myWindow = window.open("","myWindow","width=200,height=100");
		myWindow.document.write("<p>Hello User!</p>");
	  }';
echo '</script>';

?>

<p style='font-size:165%'>Welcome</p>

<br>This is a project done by a group of University of Wollongong (UOW) students. </br>
<br>The purpose of this project to provide the public with some tools for cryptographic application.</br>

<?php

if(empty($authUser)): 

echo $this->Html->link('Sign in', array('controller' => 'users', 'action' => 'login')); 

?>
	
 or 

<?php

echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'register'));

?>

to begin using our product!

<?php

endif;

?>

<br/>
<br/>
<input type="submit" value="More Information!" onClick="displayInfo()" style="height:30px; width:165px" /><br/>