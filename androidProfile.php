<?php
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

$sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	

if($query->rowCount() > 0)
{
    
echo "N1".$result->name."N2";
echo "M1".$result->mocions."M2";
echo "E1".$result->email."E2";
echo "I1".$result->id."I2";



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