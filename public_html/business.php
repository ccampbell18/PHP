<?php
echo "<div style ='font:22px Arial,Tahoma,sans-serif;color:#000000'><strong>Click Below to Register</strong></div><br />";
echo "<form name = 'form' action = 'customer.php' method = 'get'>";
echo "First Name<br /><input type = 'text' name = 'fName'><br />";
echo "Last Name<br /><input type = 'text' name = 'lName'><br />";
echo "Cell Number<br /><input type = 'text' name = 'cellNum'>Ex: 5555555555<br />";
echo "Zip Code<br /><input type = 'text' name = 'zip'>Ex: 55555<br />";
echo "Password<br /><input type = 'password' name = 'password'> *Must be at least 6 characters long*<br />";
echo "<br /><input type = 'submit' value = 'Click to Register'>";
echo "<hr>";
echo "</form>";

echo "<div style ='font:22px Arial,Tahoma,sans-serif;color:#000000'><strong>Click Below to Login</strong></div><br />";
echo "<form name = 'form' action = 'login.php' method = 'get'>";
echo "Cell Number<br /><input type = 'text' name = 'cellNum'><br />";
echo "Password<br /><input type = 'password' name = 'password'><br />";
echo "<br /><input type = 'submit' value = 'Click to Login'>";
echo "</form>";

?>