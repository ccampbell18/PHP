<?php
include 'connect.php';

$Cell = stripslashes($_GET['cellNum']);
$Password = md5(stripslashes($_GET['password']));
$query = "select * from business where cell_num = '$Cell'";
$result = mysql_query($query, $connection);

while (false !== ($row = mysql_fetch_assoc($result))) {

    if ($Password == $row['password']){
        echo "You logged in successfully.";
    }
    else {
        echo "You DONKEY! YOU MESSED UP!!!!";
    }
}

?>