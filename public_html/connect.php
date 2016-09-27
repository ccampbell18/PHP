<?php
$dbName = "ccampbell18";
$connection = mysql_connect("localhost", "ccampbell18", "password");
if(!$connection){
    echo "nope <br />";
}
else {
    echo "Good <br />";
}

if(@mysql_select_db($dbName, $connection)=== FALSE){
	echo "Could not select $dbName";
	mysql_close($connection);
}
else{
	echo"<br />Connection to database is Good.";
}
