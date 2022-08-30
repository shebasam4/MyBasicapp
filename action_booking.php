<?php

@include 'config.php';
@include 'appointment_form.php';

$a=0;
$a=  $_SESSION['user_id'];
$b=  $_SESSION['user_name'];

$date1 = $_POST['adate'];
$servicename = $_POST['service'];
$additionalwork = $_POST['addwork'];
$repairs = $_POST['repair'];
$regno = $_POST['regno'];
//echo $servicename;
// optional
// echo "You chose the following color(s): <br>";
$mot=0;
$premot=0;
$major=0;
$full=0;
$interim=0;
$oil=0;
$regas=0;
$brake=0;
$coolant=0;
$wheel=0;
$grepairs=0;
$tyres=0;


foreach ($servicename as $service){ 


    switch ($service)
    {
        case "mot":
            $mot=1;
            break;
            case "premot":
                $premot=1;
                break;
                case "major":
                    $major=1;
                    break;
                    case "full":
                        $full=1;
                        break;
                        case "interim":
                            $interim=1;
                            break;
            default:
            $error=0;
    }
   
}
foreach ($additionalwork as $addwork){ 


    switch ($addwork)
    {
        case "oil":
            $oil=1;
            break;
            case "regas":
                $regas=1;
                break;
                case "brake":
                    $brake=1;
                    break;
                    case "coolant":
                        $coolant=1;
                        break;
                        case "wheel":
                            $wheel=1;
                            break;
            default:
            $error=0;
    }
    
}
foreach ($repairs as $repair){ 


    switch ($repair)
    {
        case "grepairs":
            $grepairs=1;
            break;
            case "tyres":
                $tyres=1;
                break;
            
            default:
            $error=0;
    }
    
}

$amt= $_POST['amt'];

     
         $insert = "INSERT INTO user_appointment(userid, username,bdate,bfees,
         mot,premot,mservice,fservice,iservice,oil,air,brake,coolant,wheel,Grepair,tyres,app_status,regno) 
         VALUES('$a','$b','$date1','$amt','$mot','$premot','$major','$full','$interim','$oil','$regas','$brake','$coolant','$wheel','$grepairs','$tyres',0,'$regno')";
         mysqli_query($conn, $insert);
        
      
  



?>
