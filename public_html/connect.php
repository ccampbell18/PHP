<?php
$dbName = ccampbell18;
$connection = mysql_connect("localhost", "ccampbell18", "password");
if(!$connection){
    echo "nope <br />";
}
else {
    echo "Good <br />";
}
	echo mysql_get_host_info($connection)."<br />";
	echo mysql_get_proto_info($connection)."<br />";
	echo mysql_get_server_info($connection)."<br />";
?>
