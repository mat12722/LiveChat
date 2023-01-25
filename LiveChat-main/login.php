<?php

session_start();

include "son.php";

$name = $_POST['userName'];
$pass = $_POST['userPasswords'];

$s = "select * from usertable where userLogin = '$name' && userPassword = '$pass' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    $_SESSION['username'] = $name;
    echo"<script type='text/javascript'>
    alert('Login successful');
    location='./live.php';
    </script>";
}else{
    echo"<script type='text/javascript'>
    alert('Wrong password or login');
    location='./loginPage.html';
    </script>"; 
}
?>