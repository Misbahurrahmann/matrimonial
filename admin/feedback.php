<?php
session_start();
include("connection.php");
$query="select * from tbl_feedback";
$res=mysql_query($query);
//header("location:edit_profile.php");
?>
<html>
<head>
<link href="css/feedback.css" rel="stylesheet" type="text/css"/>
</head>
<body>
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
<h1>Feedback</h1>

<table border="1" align="center">
<tr>
<th>S.NO</th>
<th>F id</th>
<th>User id</th>
<th>Topic</th>
<th>Message</th>
<th>F date</th>
<th>Delete</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))

{
	?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['f_id'];?></td>
<td><?php echo $row['user_id'];?></td>
<td><?php echo $row['topic'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['f_date'];?></td>
<td><a href="delete_feedback.php?id=<?php echo $row['f_id']?>">delete</a></td>
</tr>
<?php
$i++;
}

?>
</table>

<div id="header">
<h4 style="color:white;">Copyright Policy Terms and Condition Privacy Policy Disclaimer<br/>
© 2017 govt. polytechnic mahoba All rights reserved.<br/><br/>
Designed & Developed by Shubham sharma</h4>
</div>
</div>
</center>
</body>
</html>