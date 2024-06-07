<?php
include'db_connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql="delete from `admin` where id_admin=$id";
	$result=mysqli_query($connect,$sql);
	if($result){
		header('location:display_admin.php');
	}else{
      die(mysqli_error($connect));
   }
}

?>