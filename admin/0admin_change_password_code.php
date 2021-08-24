<?php
session_start();
//echo $_SESSION['user'];
$email=$_SESSION['user'];

$op=$_POST['old_password'];
//echo $op;
$np=$_POST['new_password'];
//echo $np;
$cnp=$_POST['confirm_password'];
//echo $cnp;
//die();
mysql_connect('localhost','root','');
mysql_select_db("humsafar");
$query="select * from tbl_admin_login where email='$email'";
$res=mysql_query($query);
//echo $res;
if($row=mysql_fetch_assoc($res))
{
	$pp=$row['password'];
}
     if($op==$pp)
     {
	   if($op==$np)
	   {
		   header("location:admin_change_password.php");
	   }
	   else if($np==$cnp)
	   {
		 $query="update tbl_admin_login set password='$np' where email='$email'";
		 mysql_query($query);
		 session_destroy();
		 header("location:index.php");
	   }
	   else
	   {
	   header("location:admin_change_password.php");
	   }
	 }
else 
{
	header("location:admin_change_password.php");
}	

?>