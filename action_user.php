<?php

@include 'config.php';
@include 'user_page.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
   $regno = mysqli_real_escape_string($conn, $_POST['regno']);
   

   
         $insert = "update user_form set name='$name', email='$email',lname='$lname',age='$age',,postcode='$postcode',regno='$regno' where id = $a";
         echo $insert;
         mysqli_query($conn, $insert);
         header('location:user_page.php');
      
   

};


?>
