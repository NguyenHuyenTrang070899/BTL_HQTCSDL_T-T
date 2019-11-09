<?php
//$con=mysql_connect('localhost','root','');
	$domain = "/ShopWeb";
	$con=mysqli_connect('localhost','root','') or die('cannot connect to server');
	mysqli_select_db($con,'shopweb') or die('cannot select database');

	$items = 0;
	$pice = 0;
?>