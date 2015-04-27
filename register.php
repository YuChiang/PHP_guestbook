<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
</head>
<body>
	<form name="form_register" method="post" action="login_insert.php">
		<?php 
			include("mysql_connect.php");
		?>
		Account:<br>
		<input type="text" name="usr">
		<br><br>
		Password<br/>
		<input type="password" name="pwd" /> <br>

		<input type="submit" name="submit" value="送出">
		<input type="Reset" name="reset" value="重新填寫">
	</form>
	
</body>
</html>