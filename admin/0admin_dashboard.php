<?php
session_start();
//echo "WELCOME";
//echo "<br/>";
//echo $_SESSION['user'];
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:login.php");
}
?>
<html>
<head>
<link href="css/admin_dashboard.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="gray">
<center>
<div id="outer">
<div id="section">
<div id="sec1">
<img src="../images/a22.jpg" style="height:100%; width:100%; border-radius:50%;"/></div>
<div id="sec2">
<img src="../images/a23.png" style="height:100%; width:100%; border-radius:0px 50px;"/></div>
</div>
<div id="menu">
<ul>
<li><a href="marriage_requests.php">Marriage Requests Mgmt</a></li>
<li><a href="user_profile.php">UserProfile Mgmt</a></li>
<li><a href="notification.php">Notification Mgmt</a></li>
<li><a href="enquiry.php">Enquery Mgmt</a></li>
<li><a href="feedback.php">Feedback Mgmt</a></li>
<li><a href="#">Settings</a>
<ul class="submenu">
<a href="admin_change_password.php"><li>Change password</li></a><br/>
<a href="admin_logout.php"><li>Logout</li></a>
</ul>
</li>
</ul>
</div>



<div id="section1">
<div class="sec"><a href="marriage_requests.php"><img src="../images/a24.png" 
style="height:50%; width:50% border-radius:100%"/><br/><br/><big><big>Marriage Requests Mgmt</big></big></a></div>
<div class="sec"><a href="user_profile.php"><img src="../images/a25.jpg" 
style="height:50%; width:50% border-radius:100%"/><br/><br/><big><big>UserProfile Mgmt</big></big></a></div>
<div class="sec"><a href="#"><img src="../images/a26.jpg" 
style="height:50%; width:50% border-radius:100%"/><br/><br/><big><big>Notification Mgmt</big></big></a></div>
<div class="sec"><a href="enquiry.php"><img src="../images/a27.jpg" 
style="height:50%; width:50% border-radius:100%"/><br/><br/><big><big>Enquery Mgmt</big></big></a></div>
<div class="sec"><a href="feedback.php"><img src="../images/a28.jpg" 
style="height:50%; width:50% border-radius:100%"/><br/><br/><big><big>Feedback Mgmt</big></big></a></div>
<div class="sec"><a href="admin_change_password.php"><img src="../images/a29.jpg" 
style="height:50%; width:50% border-radius:100%"/><br/><br/><big><big>Settings</big></big></a></div>
</div>


<div id="header">
<h4 style="color:white;">Copyright Policy Terms and Condition Privacy Policy Disclaimer<br/>
© 2017 govt. polytechnic mahoba All rights reserved.<br/><br/>
Designed & Developed by Shubham sharma</h4>
</div>
</div>
</center>
</body>
</html>