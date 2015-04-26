<?php
    session_start();
    include("mysql_connect.php");
    if($_SESSION['usr'] == null){
        header("Location:index.php");
    }
    $acc = $_SESSION['usr'];
	$sub = $_POST['subject'];
	$con = $_POST['content'];
	if(isset($sub) && isset($con)){
		$sql = "INSERT INTO `rakuda_yuchiang`.`message` (`account`, `subject`, `content`) VALUES ('{$acc}','{$sub}'),'{$con}')";
		mysql_query($sql);
	}
	header("Location:board.php");
	