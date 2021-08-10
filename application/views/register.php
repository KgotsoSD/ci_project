<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>Assets/js" rel="stylesheet">
  
<script src="Assets/js/bootstrap.bundle.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


</head>




  <div class="container">
     <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
     <hr>

     <?php if(isset($_SESSION['success'])) { ?>
      
      <div class="alert alert-success">  <?php echo $_SESSION['success']; ?></div>
  <?php }
  ?>

     <?php echo validation_errors('<div class="alert alert-danger">','</div');  ?>
     <form action="<?= base_url(); ?>Site/register" method= "POST">

    <div class="col-lg-8 col-lg-offset-2">


        <label for="Name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" id="name" required>

        <label for="Surname"><b>Surname</b></label>
        <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>


        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone No" name="phone" id="phone" required>

        <label for="gender">Gender<b></label><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
     <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>


     <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

    
    
     <!--  -->
      </div>
    </div>

    



</body>
</html>