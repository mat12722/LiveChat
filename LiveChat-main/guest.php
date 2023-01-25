<?php

session_start();

include "son.php";

$name = "guest".sprintf("%06d", mt_rand(1, 999999));

$s = "select * from usertable where userLogin = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
$reg = "insert into usertable(userLogin) values ('$name')";
$_SESSION['username'] = $name;
mysqli_query($con,$reg);
echo"<script type='text/javascript'>
location='./live.php';
</script>";
?>