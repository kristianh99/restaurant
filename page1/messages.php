<?php

function setMessage($conn){
    if(isset($_POST['submit'])){
        $ID_user=$_POST['ID_user'];
        $date=$_POST['date'];
        $message=$_POST['message'];

        $sql="INSERT INTO contact (ID_user,date,message) VALUES ('$ID_user','$date','$message')";
        global $conn;
        $result = mysqli_query($conn, $sql);
    }
}

?>
