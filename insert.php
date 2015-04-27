<?php
session_start();
if($_SESSION["usr"] != true){
	header("Location:index.php");
	$_SESSION["msg"] = "請登入";
	//echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
<?php
	$acc = $_SESSION["usr"];
	$sub = $_POST["subject"];
	$con = $_POST["content"];
	//和資料庫連線檢查
	include("mysql_connect.php");
	if(isset($con)){
		// $sql = "insert into `rakuda_yuchiang`.`message` (`account`,`content`) values ('{$acc}','{$con}');";
        $sql = "INSERT INTO `rakuda_yuchiang`.`message` (`id`, `account`, `subject`, `content`) VALUES (NULL, '{$acc}', '{$sub}', '{$con}');";
		mysql_query($sql);
	}
	header("Location: board.php");
?>