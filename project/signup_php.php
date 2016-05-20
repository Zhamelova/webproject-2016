<?php
	session_start();
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	include("connection.php");
	//check is fields empty
	if (empty($name) || empty($username) || empty($password)){
		echo "Fill empty fields!";
		return;
	}
	//check is this login in database
	$result=mysql_query("SELECT `USERNAME` FROM `project` WHERE USERNAME='$username'");
	$array=mysql_fetch_array($result);
	if(!empty($array['USERNAME'])){
		echo "Your login is bisy. Please try again.";
		return;
	}
	//insert into db
	mysql_query("INSERT INTO `project`(`NAME`, `USERNAME`, `PASSWORD`) VALUES ('$name','$username','$password')");
	//insert id to session
	$res=mysql_query("SELECT `ID` FROM `project` WHERE USERNAME='$username'");
	$arr=mysql_fetch_array($res);
	$_SESSION['id'] = $arr['ID'];
?>
