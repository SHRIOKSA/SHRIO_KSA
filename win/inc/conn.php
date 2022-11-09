<?php
$conn = mysqli_connect('localhost','root','root','win');

if(!$conn){
  //  echo 'faill';
  echo 'Error: ' . mysqli_connect_error();
}