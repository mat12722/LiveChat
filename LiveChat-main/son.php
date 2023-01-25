<?php
include "baza.php";
$con = mysqli_connect($host, $hostusr, $hostpsw);
mysqli_select_db($con, 'userregistration');
?>