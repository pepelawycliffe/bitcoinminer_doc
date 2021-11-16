<?php

error_reporting(0);
include('includes/config.php');
	
	$user = $_POST['user'];
	$title = $_POST['title'];
    $message = $_POST['message'];
	$reciver = 'Admin';
    $noti_type = 'Send Feedback';
		
	
	$noti_reciver = 'Admin';
    $sql_noti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
    
    
    $query_noti = $dbh->prepare($sql_noti);
	$query_noti-> bindParam(':notiuser', $user, PDO::PARAM_STR);
	$query_noti-> bindParam(':notireciver', $noti_reciver, PDO::PARAM_STR);
    $query_noti-> bindParam(':notitype', $noti_type, PDO::PARAM_STR);
    $query_noti->execute();

	$sql="insert into feedback (sender, reciver, title, feedbackdata) values (:user, :reciver, :title, :message)";
	
	$query = $dbh->prepare($sql);
	$query-> bindParam(':user', $user, PDO::PARAM_STR);
	$query-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
	$query-> bindParam(':title', $title, PDO::PARAM_STR);
	$query-> bindParam(':message', $message, PDO::PARAM_STR);
    $query->execute(); 
	$msg="Feedback Send";
	
	echo "Feedback Send";

?>