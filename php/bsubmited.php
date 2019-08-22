<?php
if(isset($_POST['submit']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $quilification =  $_POST['quilification'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `student` SET `First_name`='".$fname."', `Last_name`='".$lname."', `Age`='".$age."', `Gender`='".$gender."', `Quilification`='".$quilification."', `Email`='".$email."', `Phone`='".$phone."', `Address`='".$address."'";

      $result = mysqli_query($conn, $sql) or die("Error" . mysqli_error($conn));
      if($result)
      {
        
      }
      else
      {
        echo "Failed to save Data";
      } 
  }
  
  $last_id = mysqli_insert_id($conn);
?>
