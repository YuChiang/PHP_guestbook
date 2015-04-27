<?php
	session_start();
	if($_SESSION['usr'] == null){
		header("Location:index.php");
        exit();
		
	}

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Post</title>
</head>
<body>
	<a href="board.php">View all post</a>&nbsp;&nbsp;
	<a href="logout.php">Logout</a>
	<hr>
	<form name="form1" method="post" action="insert.php">
		<?php 
			include("mysql_connect.php");
			echo "{$_SESSION['usr']} want to say:<br/><br/>";
		?>
		Subject:<br>
		<input type="text" name="subject">
		<br><br>
		Content(in 150 words):<br>
		<textarea rows=5 name="content"></textarea>
		<br>
		<input type="submit" name="submit" value="送出">
		<input type="Reset" name="reset" value="重新填寫">
	</form>
	
</body>
</html>