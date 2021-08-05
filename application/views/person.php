<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<h2>Login Form</h2>

<form action="<?= base_url(); ?>Site/login" method= "$_POST">
  <div class="imgcontainer">
    <!--<img src="Assets/pic.png" alt="Avatar" class="avatar">  -->
  </div>

  <div class="container">


   
<div class="col-lg-5 col-lg-offset-2">  <?php echo $_SESSION['success ']; ?></div>
   <h1>Login Page</h1>
   <p>Fill in the details to login on our website!</p>
  
   
   <?php if(isset($_SESSION['success'])) { ?>
    


  <?php }

  ?>
 
 HELLO,  <?php echo $_SESSION['username']; ?>
</div>

  

</body>
</html>

