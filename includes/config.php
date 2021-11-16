<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root'); // Database Username
define('DB_PASS',''); // Database Username Password
define('DB_NAME','btcminer'); // Database Name
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
