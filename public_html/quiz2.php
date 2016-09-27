<?php
$fName = $_GET['fName'];
echo "First Name: $fName<br />";
if(empty($fName)) {
    echo '<script language="javascript">';
    echo 'alert("Please enter a first name.")';
    echo '</script>';
    
    echo '<script language = "javascript">';
    echo 'window.history.back()';
    echo '</script>';
}

$lName = $_GET['lName'];
echo "Last Name: $lName<br />";

if(empty($lName)) {
    echo '<script language="javascript">';
    echo 'alert("Please enter a last name.")';
    echo '</script>';
    
    echo '<script language = "javascript">';
    echo 'window.history.back()';
    echo '</script>';
}

echo "<br />";

$mail = $_GET['email'];
echo $mail . "<br />";

$at = strpos($mail, '@');
$user = substr($mail, 0, $at);
$site = substr($mail, $at + 1);
$dot = strpos($site, '.');
$domain = substr($site, $dot + 1);

echo $user."<br />";
echo $site."<br />";
echo $domain."<br />";

if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    echo "Your email address is valid. <br />";
    }
else {
    echo '<script language="javascript">';
    echo 'alert("Your email is an invalid type. Please renter your email.")';
    echo '</script>';
    
    echo '<script language = "javascript">';
    echo 'window.history.back()';
    echo '</script>';

}

$salt = 'abc123';
$pWord = $_GET['pWord'];
echo "Password: "; 
echo sha1($pWord, $salt)."<br />";
echo "<br />";

$gen = $_GET['gender'];
echo "Gender: $gen<br />";
echo "<br />";
echo "Food: <br />";
if(isset($_GET['food'])){
$food  = $_GET['food'];
foreach ($food as $value){
echo $value."<br />";
}
}
else {
echo "WRONG DUMMY!";
}
echo "<br />";
echo "Payment: <br />";
$pay = $_GET['payment'];
echo $pay;
?>

