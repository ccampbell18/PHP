<?php
include "connect.php";


$name = ($_GET['name']);
$username = ($_GET['username']);
$password = ($_GET['password']);
$validation = FALSE;


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

if(empty($name)) {
    echo "You need to enter a name.";
    $validation = FALSE;
}
else if (empty($username)){
    echo "You need to enter a username.";
    $validation = FALSE;
}
else if (empty($password)){
    echo "You need to enter a password.";
    $validation = FALSE;
}
else{
    $validation = TRUE;
}

if(!empty($password)){
	if(strlen($password) < 6){
echo "The password is too short. Please enter a password that is at least 6 characters long.";
$validation = FALSE;
}
else{
    $validation = TRUE;
}

}



if($validation) {
    $query = "insert into users (name, username, password) values('$name', '$username', '$password')";
    $result = mysql_query($query, $connection);
    if (!$result) {
        echo "Sorry that name is taken.";
        echo "<a href = 'username.php'>Back to register</a>";
    } else {
        echo "Thanks for registering.";
    }
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
