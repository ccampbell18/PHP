<?php
include "connect.php";


$fName = stripslashes($_GET['fName']);
$lName = stripslashes($_GET['lName']);
$Cell = stripslashes($_GET['cellNum']);
$Zip = stripslashes($_GET['zip']);
$Password = stripslashes($_GET['password']);
$validation = FALSE;


if(empty($fName)) {
    echo "Please Enter your first name.";
    echo "<a href = 'business.php'>Back to register</a>";
    $validation = FALSE;
}
else if(empty($lName)) {
    echo "Please Enter your last name.";
    echo "<a href = 'business.php'>Back to register</a>";
    $validation = FALSE;
}
else if(empty($Cell)) {
    echo "Please Enter your cell number.";
    echo "<a href = 'business.php'>Back to register</a>";
    $validation = FALSE;
}
else if(empty($Zip)) {
    echo "Please Enter your zip code.";
    echo "<a href = 'business.php'>Back to register</a>";
    $validation = FALSE;
}
else if(empty($Password)) {
    echo "Please Enter a password.";
    echo "<a href = 'business.php'>Back to register</a>";
    $validation = FALSE;
}else{
    $validation = TRUE;
}

if(!empty($Password)) {
    if (strlen($Password) < 6) {
        echo "The password is too short. Please enter a password that is at least 6 characters long.";
        echo "<a href = 'business.php'>Back to register</a>";
        $validation = FALSE;
    }else{
        $Password_md5 = md5($Password);
        $validation = TRUE;
    }
}


if(!empty($Cell)) {
    if (strlen($Cell) < 10 || strlen($Cell) > 10) {
        echo "The phone number is in the incorrect format. Please enter the correct format.";
        echo "<a href = 'business.php'>Back to register</a>";
        $validation = FALSE;
    }else{
        $validation = TRUE;
    }
}

if(!empty($Zip)) {
    if (strlen($Zip) < 5 || strlen($Zip) > 5) {
        echo "The zip code is in the incorrect format. Please enter the correct format.";
        echo "<a href = 'business.php'>Back to register</a>";
        $validation = FALSE;
    }else{
        $validation = TRUE;
    }
}


if($validation) {
    $query = "insert into business (first_name, last_name, cell_num, zip_code, password) VALUES('$fName', '$lName', '$Cell', '$Zip', '$Password_md5')";
    $result = mysql_query($query, $connection);
    if (!$result) {
        echo "Sorry that name is taken.";
        echo "<a href = 'business.php'>Back to register</a>";
    } else {
        echo "Thanks for registering.";
    }
}

?>