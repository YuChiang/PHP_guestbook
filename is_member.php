<?php 
	function is_member(){
		if($_SESSION['usr'] == null){
	        header("Location: not_login.php");
	        exit();
    	}
    }