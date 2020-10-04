<?php

$conn = mysqli_connect('localhost' , 'root' , 'pass' , 'techary');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}