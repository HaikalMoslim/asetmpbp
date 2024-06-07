<?php
include 'db_connect.php';
if(isset($_POST['submit'])){
   $nama_printer=$_POST['nama_printer'];
   $jabatan=$_POST['jabatan'];
   $model_printer=$_POST['model_printer'];
   $tahun_printer=$_POST['tahun_printer'];
   $no_aset_printer=$_POST['no_aset_printer'];
   $notes=$_POST['notes'];

   $sql="insert into `printer` (nama_printer,jabatan,model_printer,tahun_printer,no_aset_printer,notes) values('$nama_printer','$jabatan','$model_printer','$tahun_printer','$no_aset_printer','$notes')";
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
    <title>Tambah Printer</title>
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
        <div class="title">
        Tambah Printer
          </div>
           <div class="form">
          <form method="post">

  <div class="inputfield">
    <label>No Aset Printer:</label>
    <input type="text" class="input" placeholder="Isi no aset printer" name="no_aset_printer" autocomplete="off">
  </div>
  <div class="inputfield">
    <label>Nama Printer:</label>
    <input type="text" class="input" placeholder="Isi nama printer" name="nama_printer" autocomplete="off" required>
  </div>
<div class="inputfield">
      <label>Jabatan:</label>

          <select name="jabatan" class="custom_select" required value="<?php echo isset($jabatan) ? $jabatan : '' ?>">
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
    <label>Model Printer:</label>
    <input type="text" class="input" placeholder="Isi model printer" name="model_printer" autocomplete="off" required>
  </div>
  <div class="inputfield">
    <label>Tahun Printer:</label>
      <select name="tahun_printer" class="custom_select" value="<?php echo isset($tahun_printer) ? $tahun_printer : '' ?>">
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
  <div class="inputfield">
    <label>Nota:</label>
     <select name="notes"  class="custom_select"   value="<?php echo isset($notes) ? $notes : '' ?>">
              <option value="">--Pilih  Nota--</option>
              <option value="PINJAM" >PINJAM</option>
              <option value="DIGUNAKAN" >DIGUNAKAN</option>
              <option value="SEDANG DIBAIKI" >SEDANG DIBAIKI</option>
              <option value="LUPUS" >LUPUS</option>
            </select>
  </div>
  <br>
  
  <button type="submit" class="update_btn" name="submit">Hantar</button>
  <a href="display_printerStaff.php" class="cancel_btn">Batal</a>
</form>
     </div>
</div>
</body>
</html>