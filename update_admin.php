<?php
include 'db_connect.php';
$id=$_GET['updateid'];
$sql="Select * from admin where id_admin='$id'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
   $username=$row['username'];
   $email_admin=$row['email_admin'];
   $password=$row['password'];

if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $email_admin=$_POST['email_admin'];
   $password=$_POST['password'];

   $sql="update `admin` set id_admin=$id,username='$username',email_admin='$email_admin',password='$password' where id_admin=$id";
   $result=mysqli_query($connect,$sql);
   if($result){
      header('location:display_admin.php');
   }else{
      die(mysqli_error($connect));
   }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="image/logo_mpbp.png">
    <title>Kemaskini Admin</title>
        <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/form.css">
  </head>
<body>
   <?php  require 'home.php';
   ?>

     <div class="wrapper">
       <div class="title">
        Kemaskini Admin
      </div>
        <div class="form">
        <form method="post">
         <div class="inputfield">
            <label>Username:</label>
            <input type="text" class="input" placeholder="Isi username" name="username" autocomplete="off" value=<?php echo $username ?>>
          </div>
         <div class="inputfield">
            <label>Email:</label>
            <input type="email" class="input" placeholder="Isi email" name="email_admin" autocomplete="off" value=<?php echo $email_admin ?>>
          </div>
         <div class="inputfield">
            <label>Kata Laluan:</label>
            <input type="password" class="input" placeholder="Isi passoword" name="password" autocomplete="off" value=<?php echo $password ?>>
          </div>
          <br>
          <button type="submit" class="update_btn" name="submit">Kemaskini</button>
          <a href="display_admin.php" class="cancel_btn">Batal</a>
        </form>
     </div>
 </div>
</body>
</html>