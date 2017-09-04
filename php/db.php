<?php
require('config.php');
session_start();
if (isset($_SESSION['uo'])) {
	echo "You need to logout your current Eco session to Reset database ";
}
echo "<script type=\"text/javascript\">alert('Click OK for New or reset installation. Ctrl+w to exit without reset.');</script>";
$con=mysqli_connect($svr,$usr,$pwd);
$sql="drop database tce-nss";
$x=mysqli_query($con,$sql);

$sql="create database tce-nss";
$y=mysqli_query($con,$sql);

$con=mysqli_connect($svr,$usr,$pwd,$db);

//$sql = "drop table feedback";
//$dt = mysqli_query($con, $sql);

$sql="create table feedback( name char(20), profession char(10), organisation char(10), email varchar(30), feedback varchar(300));";
$a=mysqli_query($con,$sql);
if($y) {
echo "<br>Initialized Database <br>";
} 
if($a) {
echo "<br>Initialized Tables ...<br>";
echo "<br>We are all set now you can use Eco" ;
}
else {
echo "Please configure config.php , Installation FAILED :( ";
}
