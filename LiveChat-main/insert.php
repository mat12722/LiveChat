<?php
    $s = "select * from chat where name = '$user' && userMessage = '$mess'";
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);
    $reg = "insert into chat(name, userMessage, img, Data) values ('$user', '$mess', '$fileNameNew'
    ,NOW())";
    mysqli_query($con,$reg);
    header('location: ./live.php');
?>