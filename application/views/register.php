<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
   <link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>Assets/js" rel="stylesheet">

<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>



<h1>Register Page</h1>
      <p>Please fill in this form to create an account.</p>
     

     <?php if(isset($_SESSION['success'])) { ?>
      
      <div class="alert alert-success">  <?php echo $_SESSION['success']; ?></div>
  <?php }
  ?>

     <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
     <form action="<?= base_url(); ?>Site/register" method= "POST">


  <div class="col-lg-5 col-lg-offset-2">
        <div class="form-group">
          <label for="username" >Username</label>
          <input class="form-control" name="username" id="username" type="text">
        </div>
     
        <div class="form-group">
          <label for="email" >Email</label>
          <input class="form-control" name="email" id="email" type="text">
        </div>

        <div class="form-group">
          <label for="password" >Password</label>
          <input class="form-control" name="password" id="password"  type="password">
        </div>
     
        <div class="form-group">
          <label for="password" >Confirm Password</label>
          <input class="form-control" name="password" id="password"   type="password">
       </div>
    <div class="form-group">
  <label for="gender">Gender</label><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>
  </div>
  <div class="form-group">
      <label for="phone" class="label-default">Phone</label>
      <input class="form-control" name="phone" id="phone"   type="phone">
  </div>

  <div class="text-center">
    <button class="btn btn-primary">Register</button>
  </div>

   
    <!--<div class="col-lg-8 col-lg-offset-2">


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
     -->

    
    
     <!--  -->
      </div>
    </div>

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.css"></script>
</body>
</html>