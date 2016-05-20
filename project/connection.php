<?php 
	$con = new mysqli("localhost","root",
		"","test");
	if(!$con){
		die($con->error);
	}
?>