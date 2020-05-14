<?php

$conn=mysqli_connect('localhost', 'root', '', 'test');

if(!$conn){
    die("Connection filed: ".mysqli_connect_error());
}

?>