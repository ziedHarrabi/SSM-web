<?php
$c=$_POST["compt"];
$f=$_POST["fact"];
$dd=$_POST["dd"];
$df=$_POST["df"];
$z=$_POST["montant"];
$k=$_POST["kilo"];
$m=$z * $k;
$pp=$_POST["prepaye"];
$la=0;
$lo=0;

$con=mysqli_connect("localhost","root","","steg_app");
if($df > $dd)
{
$res=mysqli_query($con,"insert into facture values('$c','$f','$dd','$df','$m','$k','$pp')");

if($res==1)
{
	header('location:index.php');
}
else
{
	header('location:AjoutFacture.php');
}
}
else
{
	header('location:AjoutFacture.php');
}
?>