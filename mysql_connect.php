<?php

// ===================
//  php connect MySQL 
// ===================
	// database setting
	// Connecting database

	include ("info.php");
	$link = mysql_connect($db_host, $db_user, $db_passwd);
    if(!$link){
    	die('Could not connect: ' . mysql_error() . '<br/>');
    }else{
		// echo 'Connected successfully.<br/>';
    }

	//Connecting database by UTF8
	mysql_query("SET NAMES utf8");

	// Selecting database
	$db_selected = mysql_select_db($db_name, $link);
	if(!$db_selected){
		die('Could not select database.<br/>' . mysql_error());
	}


?>
	
