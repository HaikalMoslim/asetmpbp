<?php 
//connection to mySQL
$host="localhost";
$username="root";
$password="";
$connect = mysqli_connect($host,$username,$password) or die("Could not connect");
//connection to database
$db = mysqli_select_db( $connect,"asetmpbp");
?>
