<?php
$e=$_POST["email"];
$p=$_POST["pass"];

if($e=="admin@gmail.com")
{
	if($p=="steg")
	{
		
header('location: index.php');
	}
	else
	{
	header('location: Login.php');	
	}
}
else
	{
	header('location: Login.php');	
	}
?>