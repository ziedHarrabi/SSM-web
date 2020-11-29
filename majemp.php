<?php
$c=$_GET["mat"];
$n=$_GET["nom"];
$t=$_GET["gsm"];
$l=$_GET["login"];
$p=$_GET["pwd"];


$con=mysqli_connect("localhost","root","","steg_app");

if(isset($_GET["MODIFIER"]))
{
$res=mysqli_query($con,"update agent set nom='$n', tel='$t', login='$l', password='$p' where cin='$c' ");
}
if(isset($_GET["SUPPRIMER"]))
{
$res=mysqli_query($con,"delete from agent where cin='$c' ");
} 
header('location: index.php');
?>