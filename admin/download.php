<?php 
session_start();
//error_reporting(0);
session_regenerate_id(true);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
	header("Location: index.php"); //
	}
	else{?>
<table border="1">
									<thead>
										<tr>
										<th>#</th>
											<th>Name</th>
											<th>Email</th>
											<th>Mocions</th>
											<th>Device Info</th>
										</tr>
									</thead>

<?php 
$file_name="Users list";
$sql = "SELECT * from users";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

echo '  
<tr>  
<td>'.$cnt.'</td> 
<td>'.$name = $result->name.'</td> 
<td>'.$email = $result->email.'</td> 
<td>'.$mocions = $result->mocions.'</td> 
<td>'.$device_info = $result->deviceinfo.'</td> 					
</tr>  
';
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; file_name=".$file_name."-report.xls");
header("Pragma: no-cache");
header("Expires: 0");
			$cnt++;
			}
	}
?>
</table>
<?php } ?>