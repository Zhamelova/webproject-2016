<?php 
include 'connection.php';
$id=$_GET['id'];
mysql_query("DELETE FROM `images` WHERE ID='$id'");
header("location: gallery.php");
 ?>