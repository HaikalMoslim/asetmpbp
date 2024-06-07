<?php
  include 'db_connect.php';

    // computer JSON
    $compSql = "Select * from computer";
    $resultCompSql = mysqli_query($connect, $compSql);
    $arr = array();
    if(mysqli_num_rows($resultCompSql))
        while($row = mysqli_fetch_assoc($resultCompSql))
            $arr[] = $row;
    $computerJson = json_encode($arr);
    
    // printer JSON
    $printerSql = "Select * from printer";
    $resultPrinterSql = mysqli_query($connect, $printerSql);
    $arr = array();
    if(mysqli_num_rows($resultPrinterSql))
        while($row = mysqli_fetch_assoc($resultPrinterSql))
            $arr[] = $row;
    $printerJson = json_encode($arr);


?>