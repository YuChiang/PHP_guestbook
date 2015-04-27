<?php
    session_start();
    include("mysql_connect.php");
    if($_SESSION['usr'] == null){
        header("Location:index.php");
        exit();
        
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Guestbook</title>
    </head>
    <body>
        <a href="post.php">Post!</a>&nbsp;&nbsp;
        <a href="logout.php">Logout</a><br>

        <?php 
            $query = "SELECT `account`, `subject`, `content` FROM `rakuda_yuchiang`.`message`";
            $result = mysql_query($query);
            echo "<hr/>";
            while(list($account, $subject, $content) = mysql_fetch_array($result)){ 
        
                echo "Account: ".$account."<br/>";
                echo "Subject: ".$subject."<br/>";
                echo "Content: ".$content."<hr/>";
         
            }
            echo "共".mysql_num_rows($result)."筆";
        ?>
    </body>
</html>