<?php
include("db.php");
$id = $_GET['cat'];
$delete_action = "DELETE FROM cbhsms_db.tb_diseases WHERE sick_id='$sick_id'";
mysql_query($delete_action);
header('location: table.php');
?>