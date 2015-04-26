<?php 
	session_start();
	include("mysql_connect.php");
	if($_SESSION['usr'] == null){
		header("Location: index.php");
	}
	