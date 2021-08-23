<?php
	if(!isset($_SESSION['fname']))
	{
		header('location:index.php');
	}
	else
	{
		echo "Welcome ".$_SESSION['fname'];
	}
?>