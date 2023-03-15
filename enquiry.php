<?php
  $firstname = $_POST['firstname'];
  $lastname =$_POST['lastname'];
  $email = $_POST['email'];
  $address =$_POST['address'];
  $phone =$_POST['phone'];
  $message =$_POST['message'];
  $submit =$_POST['submit'];
  //databse connection
   $con = new mysqli("localhost","root","","website");
   if(!$con)
   {
     echo "connection failed".mysqli_connect_error();
   }
   if($_POST['submit'])
   {
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email = $_POST['email'];
    $address =$_POST['address'];
    $phone =$_POST['phone'];
    $message =$_POST['message'];
    $query = "insert into enquiry values('$firstname','$lastname','$email','$address','$phone','$message')";
     $data = mysqli_query($con,$query);
   }
   if($data)
   {
     echo "enquiry received";
   }
   else
   {
     echo "submission failed";
   }
?>