<?php session_start(); 
	//將session清空
	unset($_SESSION['usr']);
	header("Location: index.php");
