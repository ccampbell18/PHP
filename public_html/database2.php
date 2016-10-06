<?php
include 'connect.php';
$username = stripslashes($_GET['username']);
$password = md5(stripslashes($_GET['password']));
$query = "select * from users where username = '$username'";
$result = mysql_query($query, $connection);

echo mysql_num_rows($result);
while (false !== ($row = mysql_fetch_assoc($result))) {

    if ($password == $row['password']){
        echo "GOOD";
    }
    else {
        echo "BAD";
    }
}
?>