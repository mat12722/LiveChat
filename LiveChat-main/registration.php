<?php

session_start();

include "son.php";

$name = $_POST['userName'];
$pass = $_POST['userPasswords'];

$s = "select * from usertable where userLogin = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo"<script type='text/javascript'>
    alert('Username already taken');
    location='./registerPage.html';
    </script>";
}
else {
    $reg = "insert into usertable(userLogin, userPassword) values ('$name', '$pass')";
    mysqli_query($con,$reg);
    echo"<script type='text/javascript'>
    alert('Registration successful');
    location='./loginPage.html';
    </script>";
}
?>