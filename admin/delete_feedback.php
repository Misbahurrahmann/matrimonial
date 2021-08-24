<?php
$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("humsafar");
$query="delete from tbl_feedback where f_id='$id'";
mysql_query($query);
header("Location:feedback.php");
?>