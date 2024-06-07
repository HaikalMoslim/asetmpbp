<?php
include'db_connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql="delete from `computer` where id_comp=$id";
	$result=mysqli_query($connect,$sql);
	if($result){
		header('location:display_computer.php');
	}else{
      die(mysqli_error($connect));
   }
}

?>