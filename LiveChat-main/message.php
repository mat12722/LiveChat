<?php
session_start();

include "son.php";

if (isset($_POST['send'])) {
    $user = $_SESSION['username'];
    $mess = $_POST['message'];

    $file = $_FILES['file'];

    $filename = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');
    if ($fileError == 4) {
        include "insert.php";
    }
    if (in_array($fileActualExt, $allowed )) {
        if ($fileError === 0) {
           if ($fileSize < 5000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = './pictures/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                include "insert.php";
           }else {
                echo"<script type='text/javascript'>
                alert('Your file is too big!');
                location='./live.php';
                </script>";
           }
        }else{
            echo"<script type='text/javascript'>
            alert('There was an error uploading your file!');
            location='./live.php';
            </script>";
        }
    }else {
        echo"<script type='text/javascript'>
        alert('You cannot upload files of this type!');
        location='./live.php';
        </script>";
    }
}
?>