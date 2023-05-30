<?php

@include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){
    
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = ($_POST['password']);

   $select = " SELECT * FROM t_login WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $_SESSION['username'] = $username;
      header('location: viewSiswa.php');
   }else{
      $error[] = 'Incorrect password or username';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="form-container">

    <form action="" method="post">
        <h3 class="title">login now</h3>
        <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
        <input type="name" name="username" placeholder="enter your username" class="box" required>
        <input type="password" name="password" placeholder="enter your password" class="box" required>
        <input type="submit" value="login now" class="form-btn" name="submit">
        <p>don't have an account? <a href="registrasi.php">register now!</a></p>
    </form>

</div>

</body>
</html>