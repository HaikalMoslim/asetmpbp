 <?php 

    include 'db_connect.php'; /*Fuad - redundant, guna 1 file je*/
    

    session_start();

    if($_POST['action'] == "login")
    {
      // $full_name=$_POST['full_name'];  /*Fuad - patot takde yg nie*/
      $username=$_POST['username'];
      $password=$_POST['password'];
      // $email=$_POST['email']; /*Fuad - nie pon patot takde*/

      /*$query="INSERT INTO users (full_name,username,password,email) VALUES ('$full_name','$username','$password','$email')";*/ /*Fuad - kenape nk kene insert? kan nk check login je*/

      $query = "SELECT * FROM staff WHERE username = '{$username}' AND password = '{$password}'";/*Fuad - Utk check*/
      $result = mysqli_query($connect,$query) or die('Query failed');

      /*if($result)*/ /*Fuad - salah nie, patot gune object num_rows*/
      // print_r($result); exit();

      if($result->num_rows == 1)
      {
        //echo "Add successfully";
        /*header("location: login.php");
        $alert=*/

        //dah login
        $_SESSION['staff']['username'] = $username;


        while($row = $result->fetch_assoc()) 
        {
          
          $_SESSION['staff']['username'] = $row['username'];
        }

        //exit();

        echo "<script>
        alert('Login successful! Welcome ".$username.".');
        window.location.href='dashboardStaff.php';
        </script>";  
      }
      else
      {
        //set error message
        $_SESSION['message'] = "<span style='color:red'>Username atau kata laluan tidak sah!</span>";
        header("location: loginStaff.php");
      }

      // mysqlii_close($connect); /*Fuad - syntax salah*/
      mysqli_close($connect);
    }
    

    ?>