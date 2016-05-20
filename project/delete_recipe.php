<?php 
include 'connection.php';
$id=$_GET['id'];
mysql_query("DELETE FROM `recipes` WHERE ID='$id'");
header("location: recipes.php");
 ?>