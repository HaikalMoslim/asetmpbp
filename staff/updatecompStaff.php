<?php
include 'db_connect.php';
$id_comp=$_GET['updateid1'];
$sql="Select * from `computer` where id_comp=$id_comp";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$no_aset_comp=$row['no_aset_comp'];
$nama_user=$row['nama_user'];
$jabatan_comp=$row['jabatan_comp'];
$jenama_comp=$row['jenama_comp'];
$model_comp=$row['model_comp'];
$jenis_comp=$row['jenis_comp'];
$ram=$row['ram'];
$os=$row['os'];
$processor=$row['processor'];
$ip_address=$row['ip_address'];
$workgroup=$row['workgroup'];
$tahun_comp=$row['tahun_comp'];
$nota=$row['nota'];

if(isset($_POST['submit1'])){
   $no_aset_comp=$_POST['no_aset_comp'];
   $nama_user=$_POST['nama_user'];
   $jabatan_comp=$_POST['jabatan_comp'];
   $jenama_comp=$_POST['jenama_comp'];
   $model_comp=$_POST['model_comp'];
   $jenis_comp=$_POST['jenis_comp'];
   $ram=$_POST['ram'];
   $os=$_POST['os'];
   $processor=$_POST['processor'];
   $ip_address=$_POST['ip_address'];
   $workgroup=$_POST['workgroup'];
   $tahun_comp=$_POST['tahun_comp'];
   $nota=$_POST['nota'];

   $sql="update `computer` set id_comp=$id_comp,no_aset_comp='$no_aset_comp',nama_user='$nama_user',jabatan_comp='$jabatan_comp',jenama_comp='$jenama_comp',model_comp='$model_comp',jenis_comp='$jenis_comp',ram='$ram',os='$os',processor='$processor',ip_address='$ip_address',workgroup='$workgroup',tahun_comp='$tahun_comp',nota='$nota' where id_comp=$id_comp";

   $result=mysqli_query($connect,$sql);
   if($result){
      header('location:display_computerStaff.php');
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
    <title>Kemaskini Komputer</title>
        <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/form.css">
  </head>

<body>
   <?php  require 'headerAdmin.php';
   ?>
<div class="wrapper">
     <div class ="content my-2">
        <h1>Kemaskini Komputer</h1>
<form method="post">
  <div class="form-group">
    <label>No. Aset:</label>
    <input type="text" class="form-control" placeholder="Isi no. aset" name="no_aset_comp" autocomplete="off" value=<?php echo $no_aset_comp ?>>
  </div>

  <div class="form-group">
    <label>Nama User:</label>
    <input type="text" class="form-control" placeholder="Isi nama user" name="nama_user" autocomplete="off" value=<?php echo $nama_user ?>>
  </div>
  <div class="form-group">
    <label>Jabatan:</label>
    <select name="jabatan_comp" class="form-control" required value="<?php echo isset($jabatan_comp) ? $jabatan_comp : '' ?>">
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
  <div class="form-group">
    <label>Jenama Komputer:</label>
    <input type="text" class="form-control" placeholder="Isi jenama komputer" name="jenama_comp" autocomplete="off" value=<?php echo $jenama_comp ?>>
  </div>
  <div class="form-group">
    <label>Model Komputer:</label>
    <input type="text" class="form-control" placeholder="Isi model komputer" name="model_comp" autocomplete="off" value=<?php echo $model_comp ?>>
  </div>

  <div class="form-group">
    <label>Jenis Komputer:</label>
   <select name="jenis_comp" class="form-control" required value="<?php echo isset($jenis_comp) ? $jenis_comp : '' ?>">
          <option value="">--Pilih Jenis Komputer--</option>
          <option value="TOWER">TOWER</option>
          <option value="AIO">ALL IN ONE</option>
          <option value="LAPTOP">LAPTOP</option>
          <option value="MINI TOWER">MINI TOWER</option>
          <option value="PROJEKTOR">PROJEKTOR</option>
          </select>
  </div>

  <div class="input-box">
    <label>Ram Komputer:</label>
     <select name="ram" class="form-control" required value="<?php echo isset($ram) ? $ram : '' ?>">
          <option value="">--Pilih  RAM--</option>
          <option value="384 MB">384 MB</option>
          <option value="512 MB">512 MB</option>
          <option value="1 GB">1 GB</option>
          <option value="2 GB">2 GB</option>
          <option value="3 GB">3 GB</option>
          <option value="4 GB">4 GB</option>
          <option value="6 GB">6 GB</option>
          <option value="8 GB">8 GB</option>
          <option value="12 GB">12 GB</option>
          <option value="16 GB">16 GB</option>
          <option value="32 GB">32 GB</option>
      
          </select>
  </div>
  
  <div class="form-group">
    <label>OS Komputer:</label>
    <select name="os" class="form-control" required value="<?php echo isset($os) ? $os : '' ?>">
          <option value="">--Pilih Jenis Komputer--</option>
          <option value="WINDOWS XP">WINDOWS XP</option>
          <option value="WINDOWS 7">WINDOWS 7</option>
          <option value="WINDOWS 8">WINDOWS 8</option>
          <option value="WINDOWS 10">WINDOWS 10</option>
          <option value="WINDOWS 11">WINDOWS 11</option>
          </select>
  </div>
  <div class="form-group">
    <label>Processor Komputer:</label>
    <input type="text" class="form-control" placeholder="Isi processor komputer" name="processor" autocomplete="off" value=<?php echo $processor ?>>
  </div>
  <div class="form-group">
    <label>IP Address:</label>
    <input type="text" class="form-control" placeholder="Isi IP Address" name="ip_address" autocomplete="off" value=<?php echo $ip_address ?>>
  </div>
  <div class="form-group">
    <label>Workgroup:</label>
    <select name="workgroup" class="form-control" required value="<?php echo isset($workgroup) ? $workgroup : '' ?>">
          <option value="">--Pilih  Workgroup--</option>
          <option value="PELESENAN">PELESENAN</option>
          <option value="KORPORAT">KORPORAT</option>
          <option value="KESIHATAN">KESIHATAN</option>
          <option value="OSC">OSC</option>
          <option value="PEROLEHAN">PEROLEHAN</option>
          <option value="AUDIT DALAM">AUDIT DALAM</option>
          <option value="PENGUATKUASAAN">PENGUATKUASAAN</option>
          <option value="INTERGRITI">INTERGRITI</option>
          <option value="LANDSKAP">LANDSKAP</option>
          <option value="KEJURUTERAAN">KEJURUTERAAN</option>
          <option value="BANGUNAN">BANGUNAN</option>
          <option value="PERANCANG">PERANCANG</option>
          <option value="COB">COB</option>
          <option value="WORKGROUP">WORKGROUP</option>
          <option value="PENILAIAN">PENILAIAN</option>
          <option value="MPBP3">MPBP3</option>
          <option value="BTM">BTM</option> 
          <option value="TLK">TLK</option>
          <option value="KHIDMAT PENGURUSAN">KHIDMAT PENGURUSAN</option> 
          <option value="UNDANG UNDANG">UNDANG UNDANG</option>
          </select>
  </div>
  <div class="form-group">
    <label>Tahun Komputer:</label>
   <select name="tahun_comp" class="form-control" required value="<?php echo isset($tahun_comp) ? $tahun_comp : '' ?>">
          <option value="">--Pilih  Tahun--</option>
          <option value="-">-</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          </select>
  </div>
  <div class="form-group">
    <label>Nota:</label>
    <input type="text" class="form-control" placeholder="Isi nota" name="nota" autocomplete="off" style="height:200px" value=<?php echo $nota ?>>
  </div>
  <br>
  <button type="submit1" class="update_btn" name="submit1">Kemaskini</button>
 <a href="display_computerStaff.php" class="cancel_btn">Batal</a>
</form>
     </div>
</div>
</body>
</html>