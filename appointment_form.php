<?php

@include 'config.php';
session_start();
$a=0;
$a=  $_SESSION['user_id'];

$select = " SELECT * FROM user_form WHERE id =$a ";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result);




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Appointment</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style3.css">
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
  <a class="active" href="appointment_form.php">Book an Appointment</a>
  <a href="user_page.php">Personal Details</a>
  <a href="user_page.php">Appointments</a>
  <a href="logout.php">Logout</a>
  <a href="about.php">About</a>
</div>
</head>
<body>
   

<div class="form-container">

   <form action="action_booking.php" method="post">
   
      <h3>Book an Appointment</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
      <label for="fname">Name :</label>
      <input type="text" id="fname" value=<?php echo $row[1] ?>></br>
      <label for="regno">Registration No :</label>
      <input type="text" id="regno" value=<?php echo $row[8] ?>></br>
      <label for="adate">Booking Date :</label>
     
	    <input type="date" name="adate" id="adate" value="2022-02-20"
       min="2022-02-20" max="2032-02-20"></br>
      <h4>Services</h4>
      <input type="checkbox" id="mot" name="service[]" value="mot">
      <label for="mot"> MOT</label>
      <input type="checkbox" id="premot" name="service[]" value="premot">
      <label for="mot"> PreMOT</label>
      <input type="checkbox" id="major" name="service[]" value="major">
      <label for="major"> Major service</label>
      <input type="checkbox" id="full" name="service[]" value="full">
      <label for="full">Full Service</label>
      <input type="checkbox" id="interim" name="service[]" value="interim">
      <label for="interim"> Interim Service</label></br></br>
      <h4>Additional Work</h4>
      <input type="checkbox" id="oil" name="addwork[]" value="oil">
      <label for="oil">Oil and Filter Change</label>
      <input type="checkbox" id="regas" name="addwork[]" value="regas">
      <label for="regas">  Air Conditioning Re-gas</label>
      <input type="checkbox" id="brake" name="addwork[]" value="brake">
      <label for="brake">Brake Fluid Replacement</label>
      <input type="checkbox" id="coolant" name="addwork[]" value="coolant">
      <label for="coolant"> Coolant Change</label>
      <input type="checkbox" id="wheel" name="addwork[]" value="wheel">
      <label for="wheel">Wheel Alignment</label></br></br>
      <h4>Repairs</h4>
      <input type="checkbox" id="grepairs" name="repair[]" value="grepairs">
      <label for="grepairs">General Repairs</label>
      <input type="checkbox" id="tyres" name="repair[]" value="tyres">
      <label for="tyres">Tyres</label></br>
      <label for="amt">Booking Fee :</label>
      <input type="text" name="amt" id="amt" value="5"></br>
	  
     
      <input type="submit" name="submit" value="Book appointment" class="form-btn">
     

      </form>
</div>
     



</body>
</html>