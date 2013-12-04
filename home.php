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




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/csshorizontalmenu.css" />
<link rel="stylesheet" type="text/css" href="datepickr.css" />
<script type="text/javascript" src="js/csshorizontalmenu.js"></script>
<script src="js/PopupWindow.js"></script>
<script src="js/date.js"></script>
<script src="js/AnchorPosition.js"></script>
<script src="js/CalendarPopup.js"></script>
<title>Chayatoru Properties Ltd.</title>


 
 

</head>

<body>
	<div id="mainbody">
    	<!--start header-->
    		<?php include ('header.php') ?>
        <!--end header-->
        <div id="content_body">
        	<!--start left_side-->
            	<?php include ('left.php') ?>
            <!--end left_side-->
            
            <!--start left_side-->
            	<?php include ('right.php') ?>
            <!--end left_side-->
        </div><!--end content_body-->
        <div class="clear"></div>  
    </div><!--end mainbody--><div class="clear"></div> 
	<!--start footer-->
         <?php include ('footer.php') ?>
    <!--end footer-->
</body>
</html>
