<?php
session_start();
$user=$_POST['user'];
//echo $user;
$password=$_POST['password'];
//echo $password;
mysql_connect('localhost','root','');
mysql_select_db("humsafar");

$query="select * from tbl_admin_login where email='$user' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$_SESSION['user']=$user;
	header("location:admin_dashboard.php");
}
else
{
	header("location:index.php");
}

?>