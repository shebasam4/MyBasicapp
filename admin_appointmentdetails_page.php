<?php

@include 'config.php';

session_start();
$a=0;
if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}
$a=$_SESSION['user_id'];
$id=0;
$userid=0;
$select = " SELECT * FROM user_appointment where app_status=0" ;

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
  <a class="active" href="admin_page.php">User Details</a>
  <a href="admin_userdetails_page.php">User Details</a>
  <a href="appointment_form.php">Appointments</a>
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
      <h1>Appointments</h1>
      

   <table class="table table-dark">
    <thead>
      <tr>
        <th>username</th>
        <th>Booked Date</th>
        <th>Registration Number</th>
        <th>Approve</th>
        
        
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($rows as $value) {
        $id1=0;
        $userid1=0;
        $id1=$value[0];
        $userid1=$value[1];
   ?>
       
      <tr>
        <td><?php echo $value[17] ?></td>
        <td><?php echo $value[2] ?></td>
        <td><?php echo $value[18] ?></td>
        <td><form action="action_appointment.php" method="post">
          <input type="submit" name="submit" value="Confirm Appointment" class="form-btn"></td>
          </form>
      </tr>
    <?php  }
    ?>
      
    </tbody>
  </table>


    

   </div>

   
   



</div>

</body>
</html>