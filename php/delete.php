<?php
  require 'config/conn.php';

  if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = "DELETE FROM Student WHERE id = $id";
    $row = mysqli_query($conn, $sql) or die("Error" . mysqli_error($conn)) ;
   header("Location: ../index.php");
  }
?>