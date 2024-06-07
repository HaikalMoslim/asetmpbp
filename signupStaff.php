<?php include ('signup_check_staff.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Masuk Staf</title>
   <link rel="icon" href="image/logo_mpbp.png">
  <link rel="stylesheet" href="css/signup.css">
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

       <form action="signupStaff.php" method="post" >
         
          <div class="user-details">
             <div class="input-box">
              <span class="details">Nama Penuh</span>
                <input type="text" name="full_name" placeholder="Isi nama penuh" required>
             </div>

             <div class="input-box">
               <span class="details">Username</span>
               <div class="form_error">
                  <input type="text" name="username" placeholder="Isi username" required>
                  <?php if (isset($name_error)): ?>
                  <span style="color: #FF101F"><?php echo $name_error; ?></span>
              <?php endif ?>
               </div>
          </div>

          <div class="input-box">
               <span class="details">Email</span>
               <div class="form_error">

                  <input type="email" name="email" placeholder="Isi email" required>
                  <?php if (isset($email_error)): ?>
                  <span style="color: #FF101F"><?php echo $email_error; ?></span>
              <?php endif ?>
               </div>
          </div>

             <div class="input-box">
              <span class="details">Kata Laluan</span>
                <input type="password" name="password" placeholder="Isi kata laluan" required>
             </div>

             <div class="select-box">
              <span class="details">Jabatan</span>
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

              <div class="input-box">
                      <span class="details">Sahkan Kata Laluan</span>
                      
                      <input type="password" name="cpassword" placeholder="Isi Sahkan Kata Laluan" required>

                      <?php if (isset($pass_error)): ?>
                  <span style= "color: #FF101F"><?php echo $pass_error; ?></span>
              <?php endif ?>
                  </div>

        </div>

      <div class="button">
          <input type="submit" name="register" value="Daftar">
      </div>

      <div class="signup-link" style="text-align:center">Sudah mempunyai akaun? <a href="loginStaff.php">Log Masuk Sekarang</a></div>

       </form>
    </div>
</div>
</body>

</html>