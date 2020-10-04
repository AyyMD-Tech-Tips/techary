<?php

$conn = mysqli_connect('localhost' , 'root' , '' , 'techary');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}