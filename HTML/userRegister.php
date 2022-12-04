<?php
include_once('con_db.php');
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirmPassword = trim($_POST['confirmPassword']);
$date = date("m/d/y");

echo "Los datos son los siguientes: <br>";
echo "$username, $email, $password, $confirmPassword";

$connect = conn();
$sql = "INSERT INTO `user`(`Username`, `Email`, `Password`, `Date`) VALUES ('$username','$email','$password','$date')";
$result = mysqli_query($connect, $sql)or trigger_error("Query failed! SQL - Error: ".mysli_error($connect), E_USER_ERROR);
echo "$sql";
?>