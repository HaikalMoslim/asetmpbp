<?php include('config/constants.php'); 
include 'db_connect.php';
if(isset($_POST['submit']))
    {     
    
        $full_name=$_POST['full_name']; 
        $username=$_POST['username']; 
        $email=$_POST['email']; 
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $department=$_POST['department'];

        //nak kene check user dah penah register ke belum
        $query = "SELECT * FROM staff WHERE username = '{$username}'";
        $result = mysqli_query( $connect,$query) or die("Query failed"); // 

        // echo $query."<br>";
        // print_r("no of user ".$result->num_rows);

        if($result->num_rows > 0) // ade org dah register
        {

          //set error message
          $_SESSION['message'] = "<br><span style='color:red'>Error! Username is not available.</span>";

          // print_r($_SESSION);

          header("location: signupStaff.php");
        }

        // exit();

        if($password==$cpassword){
        //$counter=$_POST['counter'];
        $query = "INSERT INTO staff (full_name,username,email,password,department) VALUES ('$full_name','$username','$email','$password','$department')" ;    

        // echo $query; exit();

        $result = mysqli_query( $connect,$query) or die("Query failed"); // SQL statement for checking

        //checking either success or not
            if ($result) {
                $_SESSION['message'] = "<span style='color:green' id='error_message'>Register successful!</span>";
                header("location: loginStaff.php");
            }
            else {
                echo'error';
                header("location: signupStaff.php");
            }

        }
        else{  
        $_SESSION['message'] = "<br><span style='color:red'>Kata Laluan dan Sahkan Kata Laluan tidak sepadan!</span>";
        header("location: signupStaff.php");
        
        }
        mysqli_close($connect);
  }
?>