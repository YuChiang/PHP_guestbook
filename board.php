<?php
    include("mysql_connect.php");

    session_start();
    if($_SESSION['usr'] == null){
        header("Location:index.php");
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Guestbook</title>
    </head>
    <body>
        <a href="post.php">Post!</a><br>
        <?php 
            $query = "SELECT `account`, `content` FROM `rakuda_yuchiang`.`message`";
            $result = mysql_query($query);

            while(list($account, $content) = mysql_fetch_array($result)){ 
        ?>
                <font style="background-color:#CCFFFF ">作者：</span>
                <?php echo $account ?><br>
                <font style="background-color:#9999FF">標題：</span>
                <?php echo $content ?><br>
        <?php 
            }
        ?>
    </body>
</html>