<?php
include'header';
echo "Click below to register <br />";
echo "<form name = 'form' action = 'database.php' method = 'get'>";
echo "Name <input type = 'text' name = 'name'><br />";
echo "Username <input type = 'text' name = 'username'><br />";
echo "Password <input type = 'password' name = 'password'><br />";
echo "<input type = 'submit' value = 'Click to Register'>";
echo "</form>";

echo "Click below to login <br />";
echo "<form name = 'form' action = 'database2.php' method = 'get'>";
echo "Username <input type = 'text' name = 'username'><br />";
echo "Password <input type = 'text' name = 'password'><br />";
echo "<input type = 'submit' value = 'Click to Login'>";
echo "</form>";

?>