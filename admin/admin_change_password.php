<?php

?>
<html>
<head>
<link href="css/admin_change_password.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="gray">
<form action="admin_change_password_code.php" method="post">
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
<li><a href="admin_dashboard.php">HOME</a></li>
<li><a href="admin_change_password.php">Change Password</a></li>
<li><a href="admin_logout.php">Logout</a></li>
</ul>
</div>
<br/><br/><br/>
<h1>Change Password</h1>
<tr>
<th><big>Old Password</big></th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><input type="password" name="old_password" style="height:30px; width:200px;"/></td><br/><br/>
</tr>
<tr>
<th><big>New Password</big></th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><input type="password" name="new_password"style="height:30px; width:200px;"/></td><br/><br/>
</tr>
<tr>
<th><big>Confirm Password</big></th> 
<td><input type="password" name="confirm_password"style="height:30px; width:200px;"/></td><br/><br/>
</tr>
<input type="submit" value="Change Password" style="height:30px; width:150px;"/>
<input type="reset" value="Reset" style="height:30px; width:100px;"/>
</div>
<div id="header">
<br/>
<h4 style="color:white;">Copyright Policy Terms and Condition Privacy Policy Disclaimer<br/>
© 2017 govt. polytechnic mahoba All rights reserved.<br/><br/>
Designed & Developed by Shubham sharma</h4>
</div>
</form>
</head>
</html>