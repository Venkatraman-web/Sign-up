<?php
// if($_SERVER == 'POST')
$name = $_POST['Name'];
$email = $_POST['Email'];
$pass = $_POST['password'];
$confirm = $_POST['confirm'];

   // Connecting to the database
$servername = "localhost";
$username = "root";
$password = ""; // The password should be blank only
$database = "sign-up";

$conn = mysqli_connect($servername, $username, $password, $database);  // mysqli_connect connects to the database server
print('<br>');

if(!$conn){ 
   die("Sorry we falied to connect: ". mysqli_connect_error()); // If you put something in the password it would throw an -> mysqli_connect_error <- error
}else{
print("");
}

$sql = "INSERT INTO `user` (`Name`, `Email`, `Password`, `Confirm`) VALUES ('$name', '$email', '$pass', '$confirm')";
$result = mysqli_query($conn, $sql);

if($result){ 
   print('<script>alert("You have successfully registered ")</script>');
}else{
    print("The record has not been inserted successfully because of ". mysqli_error($conn));
}


   ?>