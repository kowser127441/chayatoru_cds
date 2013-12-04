<?php
session_start();

if (isset($_SESSION['admin_access']) && isset($_SESSION['user_id'])  && isset($_SESSION['password']) ) 
{

	include('verification.php');
	$verification = new Verification();
	
	if($verification->isValid())
	{
		//echo "success";	
	}
	else 
	{
		header("Location:logout.php");
		die();	
	}
	
}
else
{
	header("Location:logout.php");
	die();
}
	
// Session Time out

$inactive =600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: logout.php");
		die();
		echo "session time out";
    }
}
$_SESSION['timeout'] = time();
?>
<?php

include('connection.php');

$client_number = mysql_escape_string($_POST['client_number']);
$client_name = mysql_escape_string($_POST['client_name']);
$client_phone = mysql_escape_string($_POST['client_phone']);
$client_address = mysql_escape_string($_POST['client_address']);
$client_block = mysql_escape_string($_POST['client_block']);
$client_land = mysql_escape_string($_POST['client_land']);
$quality = mysql_escape_string($_POST['quality']);
$client_priceofperkatha = mysql_escape_string($_POST['client_priceofperkatha']);
$follow_update = mysql_escape_string($_POST['follow_update']);
$client_comment1 = mysql_escape_string($_POST['client_comment1']);
$client_comment2 = mysql_escape_string($_POST['client_comment2']);
$date = mysql_escape_string($_POST['date']);

$sql = "INSERT INTO client
(
client_number,
client_name,
client_phone,
client_address,
client_block,
client_land,
quality,
client_priceofperkatha,
follow_update,
client_comment1,
client_comment2,
date

)
VALUES
(
'$client_number',
'$client_name',
'$client_phone',
'$client_address',
'$client_block',
'$client_land',
'$quality',
'$client_priceofperkatha',
'$follow_update',
'$client_comment1',
'$client_comment2',
'$date'


)";
if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;

	 
	  
 // die('Error: ' . mysql_error());
  }
  
  
 else
  {
	  $_SESSION['error']= 2;
	  

  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
die();

?>

