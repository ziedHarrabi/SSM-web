<?php
$c=$_POST["compt"];
$a=$_POST["agent"];
$la=$_POST["lat"];
$lo=$_POST["lon"];
$d=Date("Y-m-d");
$et="en attente";

$con=mysqli_connect("localhost","root","","steg_app");

$res=mysqli_query($con,"insert into mission (compteur,numagent,date,etat,latitude,longitude) values('$c','$a','$d','$et','$la','$lo')");

if($res==1)
{
	header('location:Missions.php');
}
else
{
	header('location:AffecterMission.php');
}

?>