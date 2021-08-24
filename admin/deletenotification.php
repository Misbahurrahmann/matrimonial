<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_notification where n_id='$id'";
mysql_query($query);
header("Location:notification.php");

?>