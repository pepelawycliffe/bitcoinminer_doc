<?php
include('includes/config.php');

$name= $_POST['name'];
$email= $_POST['email'];
$password= md5($_POST['password']);
$mocions= $_POST['mocions'];
$device_info= $_POST['deviceinfo'];

$sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$cnt = 1;	
		
		if ($query->rowCount() > 0)
		{
		    echo "This email is already used!";
		}
		else {
		    
		    $noti_type= 'Create Account';
		    $reciver= 'Admin';
		    $sender= $email;

$sql_noti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";

$query_noti = $dbh->prepare($sql_noti);
$query_noti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$query_noti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$query_noti-> bindParam(':notitype', $noti_type, PDO::PARAM_STR);
$query_noti->execute();    
    
$sql ="INSERT INTO users(name, email, password, mocions, deviceinfo, status) VALUES(:name, :email, :password, :mocions, :deviceinfo, 1)";

$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':mocions', $mocions, PDO::PARAM_STR);
$query-> bindParam(':deviceinfo', $device_info, PDO::PARAM_STR);
$query->execute();
$last_insert_id = $dbh->lastInsertId();

if($last_insert_id)
{
echo "Registration Successful!";

} 
else {
$error="Something went wrong. Please try again";
echo "Something went wrong. Please try again";
}

}

?>