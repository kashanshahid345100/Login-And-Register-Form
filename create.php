<?php

include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "INSERT INTO users(u_name, u_email,u_pass) VALUES ('$name','$email' , '$pass')";
$result =  mysqli_query($try,$query);

if($result){
    echo "Data Enter Successfully";
    header('Location:login.html');
}else{
    echo "Something Wrong";
}





?>