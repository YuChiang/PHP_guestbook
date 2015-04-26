
<?php session_start(); 
    include("mysql_connect.php");
    echo '<a href="logout.php">Logout</a>  <br><br>';

//prevent from some nobody
    if(ISSET($_SESSION['usr']))
    {

        echo '<a href="board.php">Guestbook Board</a><br>    ';

        echo '<a href="register.php">Register</a>    ';
        echo '<a href="update.php">Update</a>    ';
        echo '<a href="delete.php">Delete</a>  <br><br>';
    
        $result = mysql_query("SELECT * FROM `login`");
        while($row = mysql_fetch_row($result))
        {
             echo "$row[0] - User: $row[1] <br>";
        }
    }
    else
    {
        header("Location: index.php");
    }
?>