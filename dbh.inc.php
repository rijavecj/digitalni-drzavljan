<?php


$conn = mysqli_connect('localhost', 'admin', '', 'test');
mysqli_set_charset($conn,"utf8");

if (!$conn){
  die("Povezava ni uspela: ".mysqli_connect_error());
}


