<?php
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
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["mail"])) {
    $emailErr = "Email is required";
    $flag = 1;
  } else {
    $email = test_input($_POST["email"]);
  }

  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
  $flag = 1;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  $flag = 1;
  }

  if(flag == 0){
    echo "Your feedback is submitted";
  } else {
    echo "$nameErr";
    echo "emailErr";
  }

}
?>