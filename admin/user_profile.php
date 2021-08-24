<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db("humsafar");
$query="select * from tbl_registration";
$res=mysql_query($query);
//header("location:edit_profile.php");
?>
<html>
<head>
<link href="css/user_profile.css" rel="stylesheet" type="text/css"/>
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
<h1>User Profile</h1>
<br/>
<table border="1" align="center">
<tr>
<th>S.NO</th>
<th>NAME</th>
<th>FATHER NAME</th>
<th>F_OCCUPATION</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>DOB</th>
<th>HIGH_QUALI</th>
<th>RELIGION</th>
<th>CATEGORY</th>
<th>SUB CATEGORY</th>
<th>PROFESSION</th>
<th>PIC NAME</th>
<th>STATE</th>
<th>CITY</th>
<th>REG_DATE</th>
<th>DELETE</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))

{
	?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['father_name'];?></td>
<td><?php echo $row['f_occupation'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['high_quali'];?></td>
<td><?php echo $row['religion'];?></td>
<td><?php echo $row['category'];?></td>
<td><?php echo $row['sub_category'];?></td>
<td><?php echo $row['profession'];?></td>
<td><?php echo $row['pic_name'];?></td>
<td><?php echo $row['state'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['reg_date'];?></td>
<td><a href="delete_profile.php?id=<?php echo $row['id']?>">delete</a></td>
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