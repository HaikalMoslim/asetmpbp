<?php include('config/constants.php');
  
  $db = mysqli_connect("localhost","root","","asetmpbp");
  
  
  if(isset($_POST['register']))
      {     
      
          $full_name=$_POST['full_name']; 
          $username=$_POST['username']; 
          $email=$_POST['email']; 
          $password=$_POST['password'];
          $cpassword=$_POST['cpassword'];
          $jabatan=$_POST['jabatan'];

          //nak kene check user dah penah register ke belum
          $sql_u = "SELECT * FROM staff WHERE username = '$username'";
          $sql_e = "SELECT * FROM staff WHERE email = '$email'";

          $res_u = mysqli_query($db,$sql_u) or die(mysqli_error($db));// 
          $res_e = mysqli_query($db,$sql_e) or die(mysqli_error($db));
          
          if (mysqli_num_rows ($res_u) > 0) {
            $name_error="Username sudah wujud!";
          }
          else if(mysqli_num_rows ($res_e) > 0){
            $email_error="Email sudah wujud!";
          }
          else{
            if($password==$cpassword){ 
              $query = "INSERT INTO staff (full_name,username,email,password,jabatan) VALUES ('$full_name','$username','$email','$password','$jabatan')" ;
              $result = mysqli_query( $db,$query) or die(mysqli_error($db));
              $_SESSION['message'] = "<span style='color:green' id='error_message'>Pendaftaran Berjaya!</span>";
              header("location: loginStaff.php");
            }
            else{  
            $pass_error="Kata laluan tidak sepadan!";
          }
            
           
        }
                
  
    }
?>