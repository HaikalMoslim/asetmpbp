 <?php 
  require_once 'db_connect.php'; 
  session_start();

    if($_POST['action'] == "login")
    {
      
      $username=$_POST['username'];
      $password=$_POST['password'];

      $query = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'";/*Fuad - Utk check*/
      $result = mysqli_query($connect,$query) or die('Query failed');
      if($result->num_rows == 1)
      {
  
        $_SESSION['admin']['username'] = $username;


        while($row = $result->fetch_assoc()) 
        {
          $_SESSION['admin']['id'] = $row['id'];
        }

    

        echo "<script>
        alert('Login successful! Welcome ".$username.".');
        window.location.href='dashboard.php';
        </script>";  
      }
      else
      { 
        $_SESSION['message'] = "<span style='color:red'>Username atau kata laluan tidak sah!</span>";
        header("location: loginAdmin.php");
      }

      mysqli_close($connect);
    }
    

    ?>