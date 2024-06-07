<?php include('config/constants.php'); ?>
<html>
<head>
  <link rel="icon" href="image/logo_mpbp.png">
    <title>Log Masuk Staf</title>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="utf-8">
</head>  
 <body>
    <div class="wrapper">
     
        <form name="login" method="POST" action="login_check_staff.php" >
          <h1 style="text-align: center;" >LOG MASUK STAF</h1>
          <center><?php
            
            if(isset($_SESSION['message']))
            {
              echo $_SESSION['message'];

              //utk delay hilang kan message
              echo "<script>setTimeout(function(){ document.getElementById('error_message').style.visibility = 'hidden'; }, 3000);</script>";
              
              unset($_SESSION['message']);
            }
            
          ?>
        </center>
          <input type="hidden" name="action" value="login"> <!-- Fuad - baru tambah -->
          <div class="field">
            <!-- <input type="text" required> --> <!-- Fuad - attribute name takde -->
            <input type="text" name="username" required>
            <label>Username</label>
          </div>

          <div class="field">
            <!-- <input type="password" required>  --><!-- Fuad - attribute name takde -->
            <input type="password" name="password" required> 
            <label>Kata Laluan</label>
          </div>
        
          <div class="field">
            <input type="submit" value="Log Masuk">
          </div>

          <div class="signup-link"> <a href="signupStaff.php">Daftar Masuk Staf</a><br><a href="index.php">Kembali ke Halaman Utama</a></div>
          
        </form>

    </div>
  </body>

</html>
