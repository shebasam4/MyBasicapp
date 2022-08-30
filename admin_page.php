<?php

@include 'config.php';

session_start();
$a=0;
if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}
 $a=  $_SESSION['user_id'];
 echo $a;
$select = " SELECT * FROM user_form WHERE id =$a ";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result);


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
   $regno = mysqli_real_escape_string($conn, $_POST['regno']);
   

   
         $insert = "update user_form set name='$name', email='$email',lname='$lname',age='$age',postcode='$postcode',regno='$regno' where id = $a";
         
         mysqli_query($conn, $insert);
         header('location:admin_page.php');
      
   

};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Settings</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
   <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
   <div class="topnav">
  <a class="active" href="admin_page.php">Home</a>
  <a href="admin_userdetails_page.php">User Details</a>
  <a href="admin_appointmentdetails_page.php">Appointments</a>
  <a href="admin_page.php">Settings</a>
  <a href="logout.php">Logout</a>
  <a href="#about">About</a>
</div>
</head>
<body>
<div class="">
<h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
</div>
<div class="form-container">

   <form action="" method="post">
      <h3>Personal Details</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    
      <input type="text" name="name" value=<?php echo $row[1]?>>
	   <input type="text" name="lname" value=<?php echo $row[9]?>>
      <input type="email" name="email" value=<?php echo $row[2]?>>
	   <input type="number" name="age" value=<?php echo $row[5]?>>
      <input type="text" name="postcode" value=<?php echo $row[7]?>>
      <input type="text" name="regno" value=<?php echo $row[8]?>>
	  
     
      <input type="submit" name="submit" value="Update" class="form-btn">
      
   </form>

</div>

</div>
</body>
</html>