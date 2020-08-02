<?php

    include_once 'connectdatabase.php';

    //the POST will receive data from product input.php, so inside bracket need correspond name
    // using parameter $ to store all incoming data from form
    $toDest = (isset($_POST['toDest']) ? $_POST['toDest'] : '');
    $fromDest = (isset($_POST['fromDest']) ? $_POST['fromDest'] : '');
    $departDate = (isset($_POST['departDate']) ? $_POST['departDate'] : '');

    $query = "SELECT * FROM `busschedule` WHERE `toDest`='$toDest' AND `fromDest` = '$fromDest' AND `departDate`='$departDate';";

    $result = $connect->query($query);

    include 'display.php';
?>

