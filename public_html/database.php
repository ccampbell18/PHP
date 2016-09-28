<?php
include "connect.php";

$name = $_GET['name'];
$username = $_GET['username'];
$password = $_GET['password'];

$query = "insert into users (name, username, password) values('$name', '$username', '$password')";
$result = mysql_query($query, $connection);
if (!$result){
    echo "sorry";
    echo mysql_error();
}
else{
    echo mysql_affected_rows($connection);
    echo "Your form has been submitted successfully!<br />";
}
?>