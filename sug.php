<?php 
	session_start();
	if($_SESSION["usr"]==null){
		header("Location: index.php");
	}
 ?><html>
<head>
	<meta charset="utf-8">
	<title>留言板</title>
</head>
<body>
	<center>
		<a href="view.php">--留言紀錄--</a>
		<a href="logout.php">登出--</a>
		<hr>
		<form name="form1" method="post" action="add.php">
			帳號：
			<?php
				include("mysql_connect.php");
				echo $_SESSION["usr"];
			?>
			<br>
			Content(in 150 words)：
			<br>
			<textarea rows=10 name="content"></textarea><br>
			<input type="submit" name="Submit" value="送出">
			<input type="Reset" name="Reset" value="重新填寫">
		</form>

	</center>
	
</body>
</html>