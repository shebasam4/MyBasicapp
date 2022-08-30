<?php

@include 'config.php';

session_start();
$a=0;
if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}
$a=$_SESSION['user_id'];

$select = " SELECT * FROM user_form " ;

   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){
     
   $rows = mysqli_fetch_all($result);
  
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
  
  
</head>
<body>
   
<div class="container">

   <div class="content">
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
     

      

   <table class="table table-dark">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Age</th>
        <th>Post Code</th>
        <th>Registration Number</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($rows as $value) {
      
   ?>
      <tr>
        <td><?php echo $value[1] ?></td>
        <td><?php echo $value[9] ?></td>
        <td><?php echo $value[2] ?></td>
        <td><?php echo $value[5] ?></td>
        <td><?php echo $value[7] ?></td>
        <td><?php echo $value[8] ?></td>
      </tr>
    <?php  }
    ?>
      
    </tbody>
  </table>




   </div>


   



</div>

</body>
</html>