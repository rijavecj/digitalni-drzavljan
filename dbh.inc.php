<?php


$conn = mysqli_connect('localhost', 'digitalni', 'drzavljan', 'test');
mysqli_set_charset($conn,"utf8");

if (!$conn){
  die("Povezava ni uspela: ".mysqli_connect_error());
}


