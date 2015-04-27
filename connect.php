<?php
	// ============================
	// ID, PW confirm with database
	// ============================

	session_start();
	//if this page has to "connect" to database, we have to "include" it	
	include("mysql_connect.php");

	$id = $_POST['id'];
	$pw = md5($_POST['pw']);

	//Selecting data from database.
	$sql = "SELECT * FROM `login` where `usr` = '{$id}'";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);

	if(ISSET($id) && ISSET($pw)){
		if(md5($row[2]) === $pw){
	        $_SESSION['usr'] = $id;
			header("Location: member.php");
			exit();
		}
		else{
			header("Location: index.php");
			exit();
		}		
	}
