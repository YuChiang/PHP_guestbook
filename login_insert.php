<?php
	$usr = $_POST["usr"];
	$pwd = $_POST["pwd"];
	//和資料庫連線檢查
	include("mysql_connect.php");
	if(isset($usr) && isset($pwd)){
        $sql = "INSERT INTO `rakuda_yuchiang`.`login` (`id`, `usr`, `pwd`) VALUES (NULL, '{$usr}', '{$pwd}');";
		mysql_query($sql);
	}
	header("Location: index.php");
?>