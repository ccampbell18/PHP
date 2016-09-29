<?php
include "connect.php";

$name = stripslashes($_GET['name']);
$username = stripslashes($_GET['username']);
$password = md5(stripslashes($_GET['password']));



/*$query = "insert into users (name, username, password) values('$name', '$username', '$password')";
$result = mysql_query($query, $connection);
if (!$result){
    echo "sorry";
    echo mysql_error();
}
else{
    echo mysql_affected_rows($connection);
    echo "Your form has been submitted successfully!<br />";
}*/

$query = "insert into users (name, username, password) values('$name', '$username', '$password')";
$result = mysql_query($query, $connection);
if(!$result){
    echo "Sorry that name is taken, idiot.";
    echo"<a href = 'username.php'>Back to register</a>";
}
else{
    echo "Thanks for registering.";
}

/*echo "<table border='1'>";
echo "<tr><th>Name</th><th>Username</th><th>Password</th></tr>";
while (($row = mysql_fetch_assoc($result)) != FALSE){
    echo "<tr><td>{$row['name']}</td>";
    echo "<<td>{$row['username']}</td>";
    echo "<td>{$row['password']}</td></tr>\n";
}
echo "</table>";

mysql_free_result($result);
mysql_close($connection);*/

?>