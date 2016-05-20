<?php
 include 'connection.php';
 $image = $_FILES['image']['name'];
 $name = $_POST['name'];
 $about =$_POST['about'];
 $type = $_POST['type'];
 mysql_query("INSERT INTO `recipes`(`NAME`, `TYPE`, `IMAGE`, `ABOUT`) VALUES ('$name','$type','$image','$about')");
 header("location: recipes.php");
?>