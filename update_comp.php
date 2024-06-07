<?php
include 'db_connect.php';
$id=$_GET['updateid'];
$sql="Select * from `computer` where id_comp=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$no_aset_comp=$row['no_aset_comp'];
$nama=$row['nama'];
$jabatan=$row['jabatan'];
$jenama_comp=$row['jenama_comp'];
$model_comp=$row['model_comp'];
$nama_user=$row['nama_user'];
$jenis_comp=$row['jenis_comp'];
$ram=$row['ram'];
$os=$row['os'];
$processor=$row['processor'];
$ip_address=$row['ip_address'];
$workgroup=$row['workgroup'];
$tahun_comp=$row['tahun_comp'];
$notes=$row['notes'];

if(isset($_POST['submit'])){
   $no_aset_comp=$_POST['no_aset_comp'];
   $nama=$_POST['nama'];
   $jabatan=$_POST['jabatan'];
   $jenama_comp=$_POST['jenama_comp'];
   $model_comp=$_POST['model_comp'];
   $nama_user=$_POST['nama_user'];
   $jenis_comp=$_POST['jenis_comp'];
   $ram=$_POST['ram'];
   $os=$_POST['os'];
   $processor=$_POST['processor'];
   $ip_address=$_POST['ip_address'];
   $workgroup=$_POST['workgroup'];
   $tahun_comp=$_POST['tahun_comp'];
   $notes=$_POST['notes'];

   $sql="update `computer` set id_comp=$id,no_aset_comp='$nama_comp',nama='$nama',jabatan='$jabatan',jenama_comp='$jenama_comp',model_comp='$model_comp',nama_user='$nama_user',jenis_comp='$jenis_comp',ram='$ram',os='$os',processor='$processor',ip_address='$ip_address',workgroup='$workgroup',tahun_comp='$tahun_comp',notes='$notes' where id_comp=$id";
   $result=mysqli_query($connect,$sql);
   if($result){
      header('location:display_computer.php');
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
    <title>Kemaskini Peranti</title>
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
        Kemaskini Peranti
         </div>
          <div class="form">
        <form method="post">
          <div class="inputfield">
            <label>No Aset Peranti:</label>
            <input type="text" class="input" placeholder="Isi no aset komputer" name="no_aset_comp" autocomplete="off" value=<?php echo $no_aset_comp?>>
          </div>
           <div class="inputfield">
          <label>Nama:</label>
          <input type="text" class="input" placeholder="Isi nama" name="nama" autocomplete="off" required value=<?php echo $nama?>>
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
            <label>Jenama Peranti:</label>
            <input type="text" class="input" placeholder="Isi jenama komputer" name="jenama_comp" autocomplete="off" required value=<?php echo $jenama_comp ?>>
          </div>
          <div class="inputfield">
            <label>Model Peranti:</label>
            <input type="text" class="input"placeholder="Isi model komputer" name="model_comp" autocomplete="off" required value=<?php echo $model_comp ?>>
          </div>
         <div class="inputfield">
            <label>Nama User:</label>
            <input type="text" class="input" placeholder="Isi nama user" name="nama_user" autocomplete="off" value=<?php echo $nama_user ?>>
          </div>
        <div class="inputfield">
            <label>Jenis Peranti:</label>
           <select name="jenis_comp" class="custom_select" required value=<?php echo $jenis_comp?>>
                  <option value="TOWER" <?php if($jenis_comp=="TOWER") echo 'selected="selected"'; ?> >TOWER</option>
          <option value="AIO" <?php if($jenis_comp=="AIO") echo 'selected="selected"'; ?> >ALL IN ONE</option>
          <option value="LAPTOP" <?php if($jenis_comp=="LAPTOP") echo 'selected="selected"'; ?> >LAPTOP</option>
          <option value="MINI TOWER" <?php if($jenis_comp=="MINI TOWER") echo 'selected="selected"'; ?> >MINI TOWER</option>
          <option value="PROJEKTOR" <?php if($jenis_comp=="PROJEKTOR") echo 'selected="selected"'; ?> >PROJEKTOR</option>
          <option value="BLADE SERVER" <?php if($jenis_comp=="BLADE SERVER") echo 'selected="selected"'; ?> >BLADE SERVER</option>
          <option value="TOWER SERVER" <?php if($jenis_comp=="TOWER SERVER") echo 'selected="selected"'; ?> >TOWER SERVER</option>
                  </select>
          </div>
         <div class="inputfield">
           <label>Ram Peranti:</label>
             <select name="ram" class="custom_select" value="<?php echo isset($ram) ? $ram : '' ?>">
                  <option value="">--Pilih  RAM--</option>
                  <option value="384 MB" <?php if($ram=="384 MB") echo 'selected="selected"'; ?> >384 MB</option>
                  <option value="512 MB" <?php if($ram=="512 MB") echo 'selected="selected"'; ?> >512 MB</option>
                  <option value="1 GB" <?php if($ram=="1 GB") echo 'selected="selected"'; ?> >1 GB</option>
                  <option value="2 GB" <?php if($ram=="2 GB") echo 'selected="selected"'; ?> >2 GB</option>
                  <option value="3 GB" <?php if($ram=="3 GB") echo 'selected="selected"'; ?> >3 GB</option>
                  <option value="4 GB" <?php if($ram=="4 GB") echo 'selected="selected"'; ?> >4 GB</option>
                  <option value="6 GB" <?php if($ram=="6 GB") echo 'selected="selected"'; ?> >6 GB</option>
                  <option value="8 GB" <?php if($ram=="8 GB") echo 'selected="selected"'; ?> >8 GB</option>
                  <option value="12 GB" <?php if($ram=="12 GB") echo 'selected="selected"'; ?> >12 GB</option>
                  <option value="16 GB" <?php if($ram=="16 GB") echo 'selected="selected"'; ?> >16 GB</option>
                  <option value="32 GB" <?php if($ram=="32 GB") echo 'selected="selected"'; ?> >32 GB</option>
                      
              
                  </select>
          </div>
         <div class="inputfield">
            <label>OS Peranti:</label>
            <select name="os" class="custom_select" required value="<?php echo isset($os) ? $os : '' ?>">
                  <option value="">--Pilih Jenis--</option>
                 <option value="WINDOWS XP" <?php if($os=="WINDOWS XP") echo 'selected="selected"'; ?> >WINDOWS XP</option>
                  <option value="WINDOWS 7" <?php if($os=="WINDOWS 7") echo 'selected="selected"'; ?> >WINDOWS 7</option>
                  <option value="WINDOWS 8" <?php if($os=="WINDOWS 8") echo 'selected="selected"'; ?> >WINDOWS 8</option>
                  <option value="WINDOWS 10" <?php if($os=="WINDOWS 10") echo 'selected="selected"'; ?> >WINDOWS 10</option>
                  <option value="WINDOWS 11" <?php if($os=="WINDOWS 11") echo 'selected="selected"'; ?> >WINDOWS 11</option>
                  </select>
          </div>
         <div class="inputfield">
            <label>Processor Peranti:</label>
            <input type="text" class="input" placeholder="Isi processor komputer" name="processor" autocomplete="off" value=<?php echo $processor ?>>
          </div>
        <div class="inputfield">
            <label>IP Address:</label>
            <input type="text" class="input" placeholder="Isi IP Address" name="ip_address" autocomplete="off" value=<?php echo $ip_address ?>>
          </div>
         <div class="inputfield">
            <label>Workgroup:</label>
            <select name="workgroup" class="custom_select" required value="<?php echo isset($workgroup) ? $workgroup : '' ?>">
                  <option value="">--Pilih  Workgroup--</option>
                  <option value="PELESENAN" <?php if($workgroup=="PELESENAN") echo 'selected="selected"'; ?> >PELESENAN</option>
          <option value="KORPORAT" <?php if($workgroup=="KORPORAT") echo 'selected="selected"'; ?> >KORPORAT</option>
          <option value="KESIHATAN" <?php if($workgroup=="KESIHATAN") echo 'selected="selected"'; ?> >KESIHATAN</option>
          <option value="OSC" <?php if($workgroup=="OSC") echo 'selected="selected"'; ?> >OSC</option>
          <option value="PEROLEHAN" <?php if($workgroup=="PEROLEHAN") echo 'selected="selected"'; ?> >PEROLEHAN</option>
          <option value="AUDITDALAM" <?php if($workgroup=="AUDITDALAM") echo 'selected="selected"'; ?> >AUDITDALAM</option>
          <option value="PENGUATKUASAAN"  <?php if($workgroup=="PENGUATKUASAAN") echo 'selected="selected"'; ?> >PENGUATKUASAAN</option>
          <option value="INTERGRITI" <?php if($workgroup=="INTERGRITI") echo 'selected="selected"'; ?> >INTERGRITI</option>
          <option value="LANDSKAP" <?php if($workgroup=="LANDSKAP") echo 'selected="selected"'; ?> >LANDSKAP</option>>
          <option value="KEJURUTERAAN" <?php if($workgroup=="KEJURUTERAAN") echo 'selected="selected"'; ?> >KEJURUTERAAN</option>
          <option value="BANGUNAN" <?php if($workgroup=="BANGUNAN") echo 'selected="selected"'; ?> >BANGUNAN</option>
          <option value="PERANCANG" <?php if($workgroup=="PERANCANG") echo 'selected="selected"'; ?> >PERANCANG</option>
          <option value="COB" <?php if($workgroup=="COB") echo 'selected="selected"'; ?> >COB</option>
          <option value="WORKGROUP" <?php if($workgroup=="WORKGROUP") echo 'selected="selected"'; ?> >WORKGROUP</option>
          <option value="PENILAIAN" <?php if($workgroup=="PENILAIAN") echo 'selected="selected"'; ?> >PENILAIAN</option>
          <option value="MPBP3" <?php if($workgroup=="MPBP3") echo 'selected="selected"'; ?> >MPBP3</option>
          <option value="BTM" <?php if($workgroup=="BTM") echo 'selected="selected"'; ?> >BTM</option> 
          <option value="TLK" <?php if($workgroup=="TLK") echo 'selected="selected"'; ?> >TLK</option>
          <option value="KHIDMATPENGURUSAN" <?php if($workgroup=="KHIDMATPENGURUSAN") echo 'selected="selected"'; ?> >KHIDMATPENGURUSAN</option> 
          <option value="UNDANG-UNDANG" <?php if($workgroup=="UNDANG-UNDANG") echo 'selected="selected"'; ?> >UNDANG-UNDANG</option>
                  </select>
          </div>
         <div class="inputfield">
            <label>Tahun Peranti:</label>
           <select name="tahun_comp" class="custom_select" required value="<?php echo isset($tahun_comp) ? $tahun_comp : '' ?>">
                  <option value="">--Pilih  Tahun--</option>
                 <option value="2007" <?php if($tahun_comp=="2007") echo 'selected="selected"'; ?> >2007</option>
                  <option value="2008" <?php if($tahun_comp=="2008") echo 'selected="selected"'; ?> >2008</option>
                  <option value="2009" <?php if($tahun_comp=="2009") echo 'selected="selected"'; ?> >2009</option>
                  <option value="2010" <?php if($tahun_comp=="2010") echo 'selected="selected"'; ?> >2010</option>
                  <option value="2011" <?php if($tahun_comp=="2011") echo 'selected="selected"'; ?> >2011</option>
                  <option value="2012" <?php if($tahun_comp=="2012") echo 'selected="selected"'; ?> >2012</option>
                  <option value="2013" <?php if($tahun_comp=="2013") echo 'selected="selected"'; ?> >2013</option>
                  <option value="2014" <?php if($tahun_comp=="2014") echo 'selected="selected"'; ?> >2014</option>
                  <option value="2015" <?php if($tahun_comp=="2015") echo 'selected="selected"'; ?> >2015</option>
                  <option value="2016" <?php if($tahun_comp=="2016") echo 'selected="selected"'; ?> >2016</option>
                  <option value="2017" <?php if($tahun_comp=="2017") echo 'selected="selected"'; ?> >2017</option>
                  <option value="2018" <?php if($tahun_comp=="2018") echo 'selected="selected"'; ?> >2018</option>
                  <option value="2019" <?php if($tahun_comp=="2019") echo 'selected="selected"'; ?> >2019</option>
                  <option value="2020" <?php if($tahun_comp=="2020") echo 'selected="selected"'; ?> >2020</option>
                  <option value="2021" <?php if($tahun_comp=="2021") echo 'selected="selected"'; ?> >2021</option>
                  <option value="2022" <?php if($tahun_comp=="2022") echo 'selected="selected"'; ?> >2022</option>
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
         <a href="display_computer.php" class="cancel_btn">Batal</a>
        </form>
     </div>
</div>
</body>
</html>