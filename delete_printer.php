<?php
include'db_connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql="delete from `printer` where id_printer=$id";
	$result=mysqli_query($connect,$sql);
	if($result){
		header('location:display_printer.php');
	}else{
      die(mysqli_error($connect));
   }
}

?>