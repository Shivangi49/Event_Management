<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'eventmanagement');

$user = $_POST['user'];
$email = $_POST['email'];
$etype = $_POST['etype'];
$comments = $_POST['comments'];

$query ="insert into userinfodata (username,email,etype,comment)
values ('$user','$email','$etype','$comments')";

mysqli_query($con,$query);

header('location:index.php');
?>