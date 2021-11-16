<?php
include('includes/config.php');

$status = '1';
$email = $_POST['email'];
$password = md5($_POST['password']);
$mocions = $_POST['mocions'];

$sql = "SELECT email,password FROM users WHERE email=:email and password=:password and status=(:status)";

$query = $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':status', $status, PDO::PARAM_STR);
$query-> execute();

$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{

$sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	

if($query->rowCount() > 0)
{
    
    $mocions = $result->mocions + $mocions;

$sql="UPDATE users SET mocions=(:mocions) where email=(:email)";
    $query = $dbh->prepare($sql);
	$query-> bindParam(':mocions', $mocions, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query->execute();
	
	echo "M1".$result->mocions."M2";
	echo "Mocions Added";


} else{
    
 echo "Sorry, your email or password is incorrect";
 
}

}
else {
    
    $sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
    echo $result->status;
}


?>