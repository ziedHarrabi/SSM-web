<?php
$c=$_POST["matricule"];
$n=$_POST["name"];
$t=$_POST["tel"];
$l=$_POST["login"];
$p=$_POST["password"];
$la=0;
$lo=0;

$con=mysqli_connect("localhost","root","","steg_app");

$res=mysqli_query($con,"insert into agent values('$c','$n','$t','$l','$p','$la','$lo')");

if($res==1)
{
	header('location:index.php');
}
else
{
	header('location:AjoutEmploye.php');
}

?>