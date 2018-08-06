<?php
    $myFile = $_FILES["file"];
    $myName = $myFile["name"];
    $myPath = "upload/header/".$myName;
    move_uploaded_file($myFile["tmp_name"],$myPath);

    //move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$myFile["name"]);
?>
