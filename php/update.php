<?php
    if(isset($_GET['upd'])){
    $id = $_GET['upd'];
    $sql = "SELECT * FROM Student WHERE id = $id";
    $row = mysqli_query($conn, $sql) or die("Cann't fetch the Data" . mysqli_error($conn));
    $result = mysqli_fetch_assoc($row);
    $gender = $result['Gender'];
    $quilification = $result['Quilification'];
    $age = $result['Age'];
  }
          
  if(isset($_POST['update'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $age = $_POST['age'];
      $address = $_POST['address'];
      
      $quilification = $_POST['quilification'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      
$sqli = "UPDATE Student SET `First_name` = '".$fname."', `Last_name` = '".$lname."', `Age` = '".$age."', `Gender` = '".$gender."', `Quilification`='".$quilification."', `Email` = '".$email."', `Phone` = '".$phone."', `Address` = '".$address."' WHERE id = $id";
    $row = mysqli_query($conn, $sqli) or die ("failed" . mysqli_error($conn));
    if($row){
      header("Location: index.php");
    }
  }
  
?>