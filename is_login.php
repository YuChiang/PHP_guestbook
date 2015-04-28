<?php 
	function is_login(){
		return isset($_SESSION['usr']);
    }
    function redirect($goto){
    	if(is_login()){
    		header("Location: ".$goto);
    	}
    }

    function login(){
    	if(!is_login()){
            var_dump(is_login.php);
    		header("Location: index.php");
    	}
    }