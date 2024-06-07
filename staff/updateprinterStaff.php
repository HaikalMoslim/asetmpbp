<?php
include 'db_connect.php';
$id_printer=$_GET['updateid1'];
$sql="Select * from `printer` where id_printer=$id_printer";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
   $nama_printer=$row['nama_printer'];
   $jabatan_printer=$row['jabatan_printer'];
   $model_printer=$row['model_printer'];
   $tahun_printer=$row['tahun_printer'];
   $no_aset_printer=$row['no_aset_printer'];
   $nota=$row['nota'];

if(isset($_POST['submit'])){
   $nama_printer=$_POST['nama_printer'];
   $jabatan_printer=$_POST['jabatan_printer'];
   $model_printer=$_POST['model_printer'];
   $tahun_printer=$_POST['tahun_printer'];
   $no_aset_printer=$_POST['no_aset_printer'];
   $nota=$_POST['nota'];

   $sql="update `printer` set id_printer=$id_printer,nama_printer='$nama_printer',jabatan_printer='$jabatan_printer',model_printer='$model_printer',tahun_printer='$tahun_printer',no_aset_printer='$no_aset_printer',nota='$nota' where id_printer=$id_printer";
   $result=mysqli_query($connect,$sql);
   if($result){
      header('location:display_printerStaff.php');
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
    <title>Kemaskini Printer</title>
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
   <?php  require 'headerStaff.php';
   ?>
<div class="wrapper">
     <div class ="content my-2">
        <h1>Kemaskini Printer</h1>
<form method="post">
  <div class="form-group">
    <label>Nama Printer:</label>
    <input type="text" class="form-control" placeholder="Isi nama printer" name="nama_printer" autocomplete="off" value=<?php echo $nama_printer ?>>
  </div>
  <div class="form-group">
    <label>Jabatan:</label>
     <select name="jabatan_printer" class="form-control" required value="<?php echo isset($jabatan_printer) ? $jabatan_printer : '' ?>">
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
    <label>Model Printer:</label>
    <input type="text" class="form-control" placeholder="Isi model printer" name="model_printer" autocomplete="off" value=<?php echo $model_printer ?>>
  </div>
  <div class="form-group">
    <label>Tahun Printer:</label>
   <select name="tahun_printer" class="form-control" required value="<?php echo isset($tahun_printer) ? $tahun_printer : '' ?>">
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
    <label>No Aset Printer:</label>
    <input type="text" class="form-control" placeholder="Isi no aset printer" name="no_aset_printer" autocomplete="off" value=<?php echo $no_aset_printer ?>>
  </div>
  <div class="form-group">
    <label>Nota:</label>
    <input type="text" class="form-control" placeholder="Isi nota" name="nota" autocomplete="off" style="height:200px" value=<?php echo $nota ?>>
  </div>
  <br>
  <button type="submit1" class="update_btn" name="submit1">Kemaskini</button>
  <a href="display_printer.php" class="cancel_btn">Batal</a>
</form>
     </div>
</div>
</body>
</html>