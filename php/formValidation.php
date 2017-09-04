<?php
require('config.php');
// define variables and set to empty values
$nameErr = $emailErrm= "";
$name = $email  = "";
$flag = 0;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["textinput"])) {
    $nameErr = "Name is required";
    $flag = 1;
  } else {
    $name = test_input($_POST["textinput"]);
  }

  if (empty($_POST["mail"])) {
    $emailErr = "Email is required";
    $flag = 1;
  } else {
    $email = test_input($_POST["mail"]);
  }

  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
  $flag = 1;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  $flag = 1;
  }

  if($flag == 0){
    echo "Your feedback is submitted";
  } else {
    echo "$nameErr";
    echo "$emailErr";
  }

}

extract($_POST);
$con=mysqli_connect($svr,$usr,$pwd,$db);
$sql="INSERT INTO feedback VALUES ('$textinput','$profession','$organisation','$mail','$feedback')";
$d=mysqli_query($con,$sql);
if($d){
	echo"<center><h1>DONE!!!</h1></center>";
}
else{
	echo"ERROR!!!";
}

?>
