<?php
include 'db_connect.php';
$id=$_GET['updateid'];
$sql="Select * from `printer` where id_printer=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
   $nama_printer=$row['nama_printer'];
   $jabatan=$row['jabatan'];
   $model_printer=$row['model_printer'];
   $tahun_printer=$row['tahun_printer'];
   $no_aset_printer=$row['no_aset_printer'];
   $notes=$row['notes'];

if(isset($_POST['submit'])){
   $nama_printer=$_POST['nama_printer'];
   $jabatan=$_POST['jabatan'];
   $model_printer=$_POST['model_printer'];
   $tahun_printer=$_POST['tahun_printer'];
   $no_aset_printer=$_POST['no_aset_printer'];
   $notes=$_POST['notes'];

   $sql="update `printer` set id_printer=$id,nama_printer='$nama_printer',jabatan='$jabatan',model_printer='$model_printer',tahun_printer='$tahun_printer',no_aset_printer='$no_aset_printer',notes='$notes' where id_printer=$id";
   $result=mysqli_query($connect,$sql);
   if($result){
      header('location:display_printer.php');
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
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/form.css">
  </head>
<body>
   <?php  require 'home.php';
   ?>

     <div class="wrapper">
     <div class="title">
        Kemaskini Printer
    </div>
      <div class="form">
        <form method="post">
         <div class="inputfield">
            <label>No Aset Printer:</label>
            <input type="text" class="input" placeholder="Isi no aset printer" name="no_aset_printer" autocomplete="off" value=<?php echo $no_aset_printer ?>>
          </div>
          <div class="inputfield">
            <label>Nama Printer:</label>
            <input type="text" class="input" placeholder="Isi nama printer" name="nama_printer" autocomplete="off" value=<?php echo $nama_printer ?>>
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
            <label>Model Printer:</label>
            <input type="text" class="input" placeholder="Isi model printer" name="model_printer" autocomplete="off" required value=<?php echo $model_printer ?>>
          </div>
          <div class="inputfield">
            <label>Tahun Printer:</label>
           <select name="tahun_printer" class="custom_select" value="<?php echo isset($tahun_printer) ? $tahun_printer : '' ?>">
                  <option value="">--Pilih  Tahun--</option>
                 <option value="2007" <?php if($tahun_printer=="2007") echo 'selected="selected"'; ?> >2007</option>
                <option value="2008" <?php if($tahun_printer=="2008") echo 'selected="selected"'; ?> >2008</option>
                <option value="2009" <?php if($tahun_printer=="2009") echo 'selected="selected"'; ?> >2009</option>
                <option value="2010" <?php if($tahun_printer=="2010") echo 'selected="selected"'; ?> >2010</option>
                <option value="2011" <?php if($tahun_printer=="2011") echo 'selected="selected"'; ?> >2011</option>
                <option value="2012" <?php if($tahun_printer=="2012") echo 'selected="selected"'; ?> >2012</option>
                <option value="2013" <?php if($tahun_printer=="2013") echo 'selected="selected"'; ?> >2013</option>
                <option value="2014" <?php if($tahun_printer=="2014") echo 'selected="selected"'; ?> >2014</option>
                <option value="2015" <?php if($tahun_printer=="2015") echo 'selected="selected"'; ?> >2015</option>
                <option value="2016" <?php if($tahun_printer=="2016") echo 'selected="selected"'; ?> >2016</option>
                <option value="2017" <?php if($tahun_printer=="2017") echo 'selected="selected"'; ?> >2017</option>
                <option value="2018" <?php if($tahun_printer=="2018") echo 'selected="selected"'; ?> >2018</option>
                <option value="2019" <?php if($tahun_printer=="2019") echo 'selected="selected"'; ?> >2019</option>
                <option value="2020" <?php if($tahun_printer=="2020") echo 'selected="selected"'; ?> >2020</option>
                <option value="2021" <?php if($tahun_printer=="2021") echo 'selected="selected"'; ?> >2021</option>
                <option value="2022" <?php if($tahun_printer=="2022") echo 'selected="selected"'; ?> >2022</option>
                  </select>
          </div>
        
         <div class="inputfield">
            <label>Nota:</label>
             <select name="notes"  class="custom_select"   value="<?php echo isset($workgroup) ? $workgroup : '' ?>">
              <option value="">--Pilih  Nota--</option>
              <option value="PINJAM" <?php if($notes=="PINJAM") echo 'selected="selected"'; ?>>PINJAM</option>
              <option value="DIGUNAKAN" <?php if($notes=="DIGUNAKAN") echo 'selected="selected"'; ?>>DIGUNAKAN</option>
              <option value="SEDANG DIBAIKI" <?php if($notes=="SEDANG DIBAIKI") echo 'selected="selected"'; ?>>SEDANG DIBAIKI</option>
              <option value="LUPUS" <?php if($notes=="LUPUS") echo 'selected="selected"'; ?>>LUPUS</option>
            </select>
          </div>
          <br>
          <button type="submit" class="update_btn" name="submit">Kemaskini</button>
          <a href="display_printer.php" class="cancel_btn">Batal</a>
        </form>
    </div>
</div>
</body>
</html>