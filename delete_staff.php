<?php
include'db_connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql="delete from `staff` where id_staff=$id";
	$result=mysqli_query($connect,$sql);
	if($result){
		header('location:display_staff.php');
	}else{
      die(mysqli_error($connect));
   }
}

?>