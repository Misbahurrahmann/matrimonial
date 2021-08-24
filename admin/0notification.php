<?php
include("connection.php");
$query="select * from tbl_notification";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/notification.css" rel="stylesheet" type="text/css"/>
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



	<div id="name" style="height:50px;width:1200px;background-color:gray;font-size:30px;color:white;margin-top:10px;margin-bottom:10px;"><center>Notification &nbsp;&nbsp;Management</center></div>
	
<table border="1px" style="height:100px;width:1200px;font-size:20px;text-align:center;">

<form action="notificationcode.php" method="post">
<center><input type="text"style="height:100px;font-size:30px; auto;width:600px;" name="notification"></center><br/>
<input type="submit"style="height:50px;font-size:30px; auto;width:150px;margin-left:500px;">
</form>
<center>
<table border="1px" style="height:100px;width:1200px;font-size:20px;text-align:center;">
<tr>
<th >S No</th>
<th>notification</th>
<th>delete</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))	
{
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['notification'];?></td>
<td><a href="deletenotification.php?id=<?php echo $row['n_id'];?>">delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</center>
</div>
</body>
</html>
