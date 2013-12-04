<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/csshorizontalmenu.css" />
<script type="text/javascript" src="js/csshorizontalmenu.js"></script>
<title>Chayatoru Properties Ltd.</title>
</head>

<body>
	<div id="mainbody">
    	<!--start header-->
    		<?php include ('headerforlogin.php') ?>
        <!--end header-->
        <div id="content_body">
        	<!--start left_side-->
            	<?php //include ('left.php') ?>
            <!--end left_side-->
            
            <!--start left_side-->
            	<div id="login">
        	<img src="images/login_logo.png" />
            
            
<?php

if(isset($_SESSION['admin_access_error']))

{
	if($_SESSION['admin_access_error']==1)
	{

?>    

<center>
<h4 style="color:#F00">Wrong Information !!</h4>
</center>

<?php
	}
	
	unset($_SESSION['admin_access_error']);
}
?>
        	<form action="admin_login_check.php" method="post">
            <table align="center" class="loing_page">
            	<tr align="center" class="tablet">
                	<td><span class="user_name">User Name</span></td>
                    <td><input type="text" class="user_box" name="user_name" /></td>
                </tr>
               
                <tr align="center" class="tablet">
                	<td><span class="user_name">Password</span></td>
                    <td><input type="password" class="user_box" name="password" /></td>
                </tr>
                
            </table>
           
            <table>
          
            	 <tr>
                 
                	<td>
                    	<button type="submit" class="signin">Signin</button>
                    </td>
                </tr>
            </table>
            </form>  
        </div><!--end login-->
        
        <div class="logo_image">
            <img src="images/chayator.png" />
            <img src="images/thirows.png" />
            <img src="images/chaya.png" />
        </div><!--end log_image-->
            <!--end left_side-->
        </div><!--end content_body-->
        <div class="clear"></div>
        
    </div><!--end mainbody-->

</body>
</html>
