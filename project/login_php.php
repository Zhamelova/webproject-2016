<?php
	session_start(); 
	include('connection.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result=mysql_query("SELECT * from project where USERNAME='$username' AND PASSWORD='$password'");
	$row=mysql_fetch_array($result);
	//check is correct username and password
	if ($row['USERNAME']==$username && $password==$row['PASSWORD']){
			 $_SESSION['id'] = $row['ID'];
			 echo "";
    }else{
		echo "Your login or password is incorrect";
	}
?>