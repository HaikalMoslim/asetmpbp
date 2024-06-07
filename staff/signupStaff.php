<?php include('config/constants.php'); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Daftar Masuk Staf</title>
  <link rel="icon" href="image/logo_mpbp.png">
  <link rel="stylesheet" href="css/signup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style >
  .select-box{
  position: relative;
  width: 320px;

}
.select-box select{
  width: 100%;
  position: relative;
  padding: 16px 30px 16px 85px;
  border-radius: 20px;
  font-weight:500px ;
  font-size: 14px;
  font-family:Poppins, cursive ;
  border: 1px solid;
}
.select-box select::ms-expand{
  display: none;
}
.select-box select:focus{
  outline: none;
}
.select-box .label{
  position: absolute;
  z-index: 1;
  display: inline-block;
  font-weight:500; 
  font-family: Poppins, cursive;
}
form .select-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
  font-family: Poppins, cursive;

}
</style>


<body>
  
<div class="back">

    <div class="title">Daftar Masuk Staf</div>


    <div class="content">

      <form name="Registration_User" method="POST" action="signup_check_staff.php">
        <input type="hidden" name="action" value="signup"> <!-- Fuad - baru tambah -->
        <?php
            
            if(isset($_SESSION['message']))
            {
              echo $_SESSION['message'];
              unset($_SESSION['message']);
            }
            
          ?>
        <div class="user-details">          
          <div class="input-box">
            <span class="details">Nama Penuh</span>
            <input type="text" name="full_name" placeholder="Isikan Nama Penuh" required>
          </div>

          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Isikan Username" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Isikan Alamat Email" required>
          </div>

          <div class="input-box">
            <span class="details">Kata Laluan</span>
            <input type="password" name="password" placeholder="Isikan Kata Laluan" required>
          </div>

          <div class="select-box">
          <span class="details">Jabatan</span>

          <select name="department" class="form-control" required value="<?php echo isset($department) ? $department : '' ?>">
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

<div class="input-box">
            <span class="details">Sahkan Kata Laluan</span>
            <input type="password" name="cpassword" placeholder="Isi Sahkan Kata Laluan" required>
          </div>
        

        </div>

        <div class="button">
          <input type="submit" name="submit" value="Daftar">
        </div>

        <div class="signup-link" style="text-align:center">Sudah mempunyai akaun? <a href="loginStaff.php">Log Masuk Sekarang</a></div>


      </form>
    </div>
  </div>
</div>

</body>
</html>

