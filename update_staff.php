<?php
include 'db_connect.php';
$id=$_GET['updateid'];
$sql="Select * from `staff` where id_staff=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
   $full_name=$row['full_name'];
   $username=$row['username'];
   $jabatan=$row['jabatan'];
   $email=$row['email'];
   $password=$row['password'];

if(isset($_POST['submit'])){
   $full_name=$_POST['full_name'];
   $username=$_POST['username'];
   $jabatan=$row['jabatan'];
   $email=$_POST['email'];
   $password=$_POST['password'];

   $sql="update `staff` set id_staff=$id ,full_name='$full_name' ,username='$username' ,jabatan='$jabatan',email='$email',password='$password' where id_staff='$id'";
   $result=mysqli_query($connect,$sql);
   if($result){
      header('location:display_staff.php');
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
    <title>Update Staff</title>
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
            Kemaskini Staff
            </div>
            <div class="form">
            <form method="post">
              <div class="inputfield">
                <label>Nama Penuh:</label>
                <input type="text" class="input" placeholder="Isi full name" name="full_name" autocomplete="off" value=<?php echo $full_name ?>>
              </div>
              <div class="inputfield">
                <label>Username:</label>
                <input type="text" class="input" placeholder="Isi username" name="username" autocomplete="off" value=<?php echo $username ?>>
            </div>
                 <div class="inputfield">
                            <label>Jabatan:</label>
                            <select name="jabatan" class="custom_select" required value="<?php echo isset($jabatan) ? $jabatan : '' ?>">
                              <option value="">--Pilih Jabatan--</option>
                          <option value="BAHAGIAN LANDSKAP" <?php if($jabatan=="BAHAGIAN LANDSKAP") echo 'selected="selected"'; ?> >BAHAGIAN LANDSKAP</option>
                          <option value="BAHAGIAN TEKNOLOGI MAKLUMAT" <?php if($jabatan=="BAHAGIAN TEKNOLOGI MAKLUMAT") echo 'selected="selected"'; ?> >BAHAGIAN TEKNOLOGI MAKLUMAT</option>
                          <option value="JABATAN BANGUNAN" <?php if($jabatan=="JABATAN BANGUNAN") echo 'selected="selected"'; ?> >JABATAN BANGUNAN</option>
                          <option value="JABATAN KEJURUTERAAN" <?php if($jabatan=="JABATAN KEJURUTERAAN") echo 'selected="selected"'; ?> >JABATAN KEJURUTERAAN</option>
                          <option value="JABATAN KESIHATAN" <?php if($jabatan=="JABATAN KESIHATAN") echo 'selected="selected"'; ?> >JABATAN KESIHATAN</option>
                          <option value="JABATAN KEWANGAN" <?php if($jabatan=="JABATAN KEWANGAN") echo 'selected="selected"'; ?> >JABATAN KEWANGAN</option>
                          <option value="JABATAN KHIDMAT PENGURUSAN" <?php if($jabatan=="JABATAN KHIDMAT PENGURUSAN") echo 'selected="selected"'; ?> >JABATAN KHIDMAT PENGURUSAN</option>
                          <option value="JABATAN PELESENAN" <?php if($jabatan=="JABATAN PELESENAN") echo 'selected="selected"'; ?> >JABATAN PELESENAN</option>
                          <option value="JABATAN PEMBANGUNAN MASYARAKAT DAN KORPORAT" <?php if($jabatan=="JABATAN PEMBANGUNAN MASYARAKAT DAN KORPORAT") echo 'selected="selected"'; ?> >JABATAN PEMBANGUNAN MASYARAKAT DAN KORPORAT</option>
                          <option value="JABATAN PENGUATKUASAAN" <?php if($jabatan=="JABATAN PENGUATKUASAAN") echo 'selected="selected"'; ?> >JABATAN PENGUATKUASAAN</option>
                          <option value="JABATAN PENILAIAN DAN PENGURUSAN HARTA" <?php if($jabatan=="JABATAN PENILAIAN DAN PENGURUSAN HARTA") echo 'selected="selected"'; ?> >JABATAN PENILAIAN DAN PENGURUSAN HARTA</option>
                          <option value="JABATAN PERANCANG" <?php if($jabatan=="JABATAN PERANCANG") echo 'selected="selected"'; ?> >JABATAN PERANCANG</option>
                          <option value="UNIT AUDIT DALAM" <?php if($jabatan=="UNIT AUDIT DALAM") echo 'selected="selected"'; ?> >UNIT AUDIT DALAM</option>
                          <option value="UNIT INTERGRITI" <?php if($jabatan=="UNIT INTERGRITI") echo 'selected="selected"'; ?> >UNIT INTERGRITI</option>
                          <option value="UNIT OSC" <?php if($jabatan=="UNIT OSC") echo 'selected="selected"'; ?> >UNIT OSC</option>
                          <option value="UNIT PEROLEHAN DAN KONTRAK" <?php if($jabatan=="UNIT PEROLEHAN DAN KONTRAK") echo 'selected="selected"'; ?> >UNIT PEROLEHAN DAN KONTRAK</option>
                          <option value="UNIT TEMPAT LETAK KERETA" <?php if($jabatan=="UNIT TEMPAT LETAK KERETA") echo 'selected="selected"'; ?> >UNIT TEMPAT LETAK KERETA</option>
                          <option value="UNIT UNDANG-UNDANG" <?php if($jabatan=="UNIT UNDANG-UNDANG") echo 'selected="selected"'; ?> >UNIT UNDANG-UNDANG</option>
                              </select>
                          </div>
             
              <div class="inputfield">
                <label>Email:</label>
                <input type="email" class="input" placeholder="Isi email" name="email" autocomplete="off" value=<?php echo $email ?>>
              </div>
              <div class="inputfield">
                <label>Kata Laluan:</label>
                <input type="password" class="input" placeholder="Isi password" name="password" autocomplete="off" value=<?php echo $password ?>>
              </div>
              <button type="submit" class="update_btn" name="submit">Kemaskini</button>
             <a href="display_staff.php" class="cancel_btn">Batal</a>
            </form>
     </div>
 </div>
</body>
</html>