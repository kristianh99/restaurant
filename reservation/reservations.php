<?php
include_once("connect.php");
if(isset($_POST['submit'])) {
    $quests = $_POST['guest'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $suggestions = $_POST['suggestions'];

    $sql = "SELECT email FROM reservation WHERE email='$user_email'";
    $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    if(!$row['email']){
        $sql = "INSERT INTO reservation(ID_reservation, num_of_guests, email, phone, date, time, suggestions) VALUES (NULL, '$quests', '$user_email', '$user_phone', '$date', '$time', '$suggestions')";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
        echo "reservated";
    } else {
        echo "1";
    }
}