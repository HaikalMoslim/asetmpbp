<?php
include 'db_connect.php';
if(isset($_POST['submit'])){
   $full_name=$_POST['full_name'];
   $username=$_POST['username'];
    $jabatan=$_POST['jabatan'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $cpassword=$_POST['cpassword'];

if($password==$cpassword)
 {
   $sql="insert into `staff` (full_name,username,jabatan,email,password) values('$full_name','$username','$jabatan','$email','$password')";
   $result=mysqli_query($connect,$sql);
   if($result){
      header('location:display_staff.php');
   }else{
      die(mysqli_error($connect));
   }
 }
 else{  
   echo '<script type="text/javascript"> alert("Password and Confirm Password does not match")</script>';
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
    <title>Tambah Staff</title>
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
            Tambah Staff
         </div>
         <div class="form">
            <form method="post">
             <div class="inputfield">
                <label>Nama Penuh:</label>
                <input type="text" class="input" placeholder="Isi nama penuh" name="full_name" autocomplete="off">
              </div>
             <div class="inputfield">
                <label>Username:</label>
                <input type="text" class="input" placeholder="Isi username" name="username" autocomplete="off">
              </div>
              <div class="inputfield">
                <label>Jabatan:</label>
                <select name="jabatan" class="form-control" required value="<?php echo isset($jabatan) ? $jabatan : '' ?>">
                  <option value="">--Pilih Jabatan--</option>
                  <option value="BAHAGIAN LANDSKAP">BAHAGIAN LANDSKAP</option>
                  <option value="BAHAGIAN TEKNOLOGI MAKLUMAT">BAHAGIAN TEKNOLOGI MAKLUMAT</option>
                  <option value="JABATAN BANGUNAN">JABATAN BANGUNAN</option>
                  <option value="JABATAN KEJURUTERAAN">JABATAN KEJURUTERAAN</option>
                  <option value="JABATAN KESIHATAN">JABATAN KESIHATAN</option>
                  <option value="JABATAN KEWANGAN">JABATAN KEWANGAN</option>
                  <option value="JABATAN KHIDMAT PENGURUSAN">JABATAN KHIDMAT PENGURUSAN</option>
                  <option value="JABATAN PELESENAN">JABATAN PELESENAN</option>
                  <option value="JABATAN PEMBANGUNAN MASYARAKAT DAN KORPORAT">JABATAN PEMBANGUNAN MASYARAKAT DAN KORPORAT</option>
                  <option value="JABATAN PENGUATKUASAAN">JABATAN PENGUATKUASAAN</option>
                  <option value="JABATAN PENILAIAN DAN PENGURUSAN HARTA">JABATAN PENILAIAN DAN PENGURUSAN HARTA</option>
                  <option value="JABATAN PERANCANG">JABATAN PERANCANG</option>
                  <option value="UNIT AUDIT DALAM">UNIT AUDIT DALAM</option>
                  <option value="UNIT INTERGRITI">UNIT INTERGRITI</option>
                  <option value="UNIT OSC">UNIT OSC</option>
                  <option value="UNIT PEROLEHAN DAN KONTRAK">UNIT PEROLEHAN DAN KONTRAK</option>
                  <option value="UNIT TEMPAT LETAK KERETA">UNIT TEMPAT LETAK KERETA</option>
                  <option value="UNIT UNDANG-UNDANG">UNIT UNDANG-UNDANG</option>
                  </select>
              </div>
            <div class="inputfield">
                <label>Email:</label>
                <input type="email" class="input" placeholder="Isi email" name="email" autocomplete="off">
              </div>
              <div class="inputfield">
                <label>Kata Laluan:</label>
                <input type="password" class="input" placeholder="Isi kata laluan" name="password" required="">
              </div>
               <div class="inputfield">
                <label>Sahkan Kata Laluan:</label>
                <input type="password" class="input" placeholder="Isi sahkan kata laluan" name="cpassword" required="">
              </div>
              <br>
                <button type="submit" class="update_btn" name="submit">Hantar</button>
                <a href="display_staff.php" class="cancel_btn">Batal</a>
            </form>
        </div>
     </div>
</body>
</html>