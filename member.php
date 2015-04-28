
<?php session_start(); 
    include("mysql_connect.php");
    echo '<a href="logout.php">Logout</a>&nbsp;&nbsp;';
    mysql_query("SET NAMES utf8");

//prevent from some nobody
    include("is_login.php");
    is_login();

    if(ISSET($_SESSION['usr']))
    {
        echo '<a href="board.php">Guestbook Board</a><hr>';

        $result = mysql_query("SELECT * FROM `login`");
        while($row = mysql_fetch_row($result))
        {
             echo "$row[0] - User: $row[1] <br>";
        }
    }