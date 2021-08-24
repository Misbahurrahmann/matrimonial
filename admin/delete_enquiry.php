<?php
$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("humsafar");
$query="delete from tbl_enquiry where eq_id='$id'";
mysql_query($query);
header("Location:enquiry.php");
?>