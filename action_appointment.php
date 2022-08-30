<?php

@include 'config.php';
@include 'admin_appointmentdetails_page.php';
echo "hiiiii" ;
$id=0;
$userid=0;
$id = $_POST['$id1'];
$userid=$_POST['$userid1'];
if(isset($_POST['submit'])){
    echo "hiiiii" ;
    $id=$id1;
    
    
          $insert = "update user_appointment set app_status='1' where id = '$id' and userid='$userid'";
          
          mysqli_query($conn, $insert);
          header('location:admin_appointmentdetails_page.php');
 
    };

?>
