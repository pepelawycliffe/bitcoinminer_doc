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
    
// echo "M1".$result->mocions."M2";

$mocions = $result->mocions;

$int = (int)$mocions;

if ($int >= 10000)
{
    $user = $_POST['user'];
	$method = $_POST['method'];
    $mocion = $mocions;
	$reciver = 'Admin';
    $noti_type = 'Payment Request';
		
	
	$noti_reciver = 'Admin';
    $sql_noti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
    
    
    $query_noti = $dbh->prepare($sql_noti);
	$query_noti-> bindParam(':notiuser', $user, PDO::PARAM_STR);
	$query_noti-> bindParam(':notireciver', $noti_reciver, PDO::PARAM_STR);
    $query_noti-> bindParam(':notitype', $noti_type, PDO::PARAM_STR);
    $query_noti->execute();

	$sql="insert into payments (sender, method, mocions) values (:sender, :method, :mocions)";
	
	$query = $dbh->prepare($sql);
	$query-> bindParam(':sender', $user, PDO::PARAM_STR);
	$query-> bindParam(':method', $method, PDO::PARAM_STR);
	$query-> bindParam(':mocions', $mocion, PDO::PARAM_STR);
    $query->execute(); 
	$msg="Request Send";
	
	echo "Request Send";
	
	$mocions = $int - 10000;
	
	$sqle="UPDATE users SET mocions=(:mocions) where email=(:email)";
	$querye = $dbh->prepare($sqle);
	$querye-> bindParam(':email', $email, PDO::PARAM_STR);
	$querye-> bindParam(':mocions', $mocions, PDO::PARAM_STR);
	$querye->execute();
}
else{
    echo "You need more Points";
}

} else{
    
 echo "Sorry, your email or password is incorrect";
 
}

}

?>