
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<div class="form-container">

   <form action="action_register.php" method="post">
      <h3>register now....</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
	  <input type="text" name="lname" required placeholder="enter your surname">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
	   <input type="number" name="age" required placeholder="Age">
      <input type="text" name="postcode" required placeholder="enter your postcode">
      <input type="text" name="regno" required placeholder="enter vehicle Regnumber">
      <select name="gender">
         <option value="male">Male</option>
         <option value="female">Female</option>
      </select>
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
	  
     
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="index.php">login now</a></p>
   </form>

</div>

</body>
</html>