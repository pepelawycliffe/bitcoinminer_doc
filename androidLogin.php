<?php
session_start();
include('includes/config.php');

$status = '1';
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT email,password FROM users WHERE email=:email and password=:password and status=(:status)";

$query = $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':status', $status, PDO::PARAM_STR);
$query-> execute();

$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['email'];

echo "Success";

} else{
 echo "Sorry, your email or password is incorrect";
 
 // print_r(json_encode($_POST));
}


?>