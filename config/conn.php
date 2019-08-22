<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "test";//IN DATABASE CREATE TABLE NAME "test"

  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);//THIS IS FOR CONNECTION TO THE DB

  if(!$conn){
    die("Connection Error" . mysqli_connect_error());
  }