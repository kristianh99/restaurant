<?php
$connection = mysqli_connect('localhost','root', '', 'restaurant', '3307');
if(isset($_POST['insertdata'])) {
    $user_name = $_POST['username'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $query = "INSERT INTO users(ID_user, username,email, password) VALUES (NULL, '$user_name', '$user_email', '$user_password')";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
    echo '<script> alert("Data Saved");</script>';
    header('Location: index.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
    }
}