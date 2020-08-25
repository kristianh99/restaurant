<?php

$conn=mysqli_connect('localhost', 'root', '', 'restaurant');

if(!$conn){
    die("Connection filed: ".mysqli_connect_error());
}

?>