<?php
    require_once('connectdatabase.php');

    $id = $_GET['id'];
    $name = $_POST['name'];
    $cardNumber = $_POST['cardNumber'];
    $cvv = $_POST['cvv'];
    $cardExpired = $_POST['cardExpired'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $ticketNum = $_POST['ticketNum'];

    $query = "INSERT INTO `history`(`name`, `creditCard`, `cvv`, `expiration`, `email`, `phoneNum`, `busid`, `ticketNum`) VALUES ('$name','$cardNumber','$cvv','$cardExpired','$email','$phoneNum','$id','$ticketNum')";

    $result = $connect->query($query);

    if($result){

        $query = "SELECT MAX(`id`) FROM `history`";
        $result = $connect->query($query);

        $row = $result->fetch_assoc();

        echo "<script type='text/javascript'>window.location='receipt.php?id=".$row['MAX(`id`)']."';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Payment Unsucessful. Please try again later');window.location='index.php';</script>";
    }
?>