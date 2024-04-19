<?php

error_reporting(0);
session_start();
session_abort();

$con = mysqli_connect('localhost', 'root', '', 'responsiveweb');

$id = 12;
$user = $_SESSION['val2'];
$email = $_SESSION['val3'];
$mobile = $_SESSION['val4'];
$comment = $_SESSION['val5'];



$query = "insert into userinfodata (id, user, email, mobile, comment) values( $id, '$user', '$email', $mobile, '$comment')";

mysqli_query($con, $query);



header('location:index.php');
