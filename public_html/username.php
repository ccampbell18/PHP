<?php
echo "<html>";
echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:#ff0000'>Click below to register</div><br />";
echo "<form name = 'form' action = 'database.php' method = 'get'>";
echo "Name <input type = 'text' name = 'name'><br />";
echo "Username <input type = 'text' name = 'username'><br />";
echo "Password <input type = 'password' name = 'password'><br />";
echo "<input type = 'submit' value = 'Click to Register'>";
echo "</form>";

echo "Click below to login <br />";
echo "<form name = 'form' action = 'database2.php' method = 'get'>";
echo "Username <input type = 'text' name = 'username'><br />";
echo "Password <input type = 'password' name = 'password'><br />";
echo "<input type = 'submit' value = 'Click to Login'>";
echo "</form>";
echo "</html>"
?>