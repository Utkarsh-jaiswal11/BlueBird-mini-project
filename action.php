<?php
   $fullName = $_POST['fullName'];
   $userName = $_POST['userName'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $password = $_POST['password'];
   $confirmPassword = $_POST['confirmPassword'];
   $gender = $_POST['gender'];

   //database connection
   $conn = new mysqli('localhost' , 'root', '', 'bluebird');
   if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
   }
   else{
    $stmt = $conn->prepare("insert into registration(fullName, userName, email, number, password, confirmPassword, gender)
    values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisss", $fullName, $userName, $email, $number, $password, $confirmPassword, $gender);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
   }






?>