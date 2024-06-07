<?php
  include 'db_connect.php';
    // Admin JSON
    $adminSql = "SELECT * from admin";
    $resultAdminSql = mysqli_query($connect, $adminSql);
    $arr = array();
    while($row = mysqli_fetch_assoc($resultAdminSql))
        $arr[] = $row;
    $adminJson = json_encode($arr);


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

    // staff JSON
    $staffSql = "Select * from staff";
    $resultStaffSql = mysqli_query($connect, $staffSql);
    $arr = array();
    while($row = mysqli_fetch_assoc($resultStaffSql))
        $arr[] = $row;
    $staffJson = json_encode($arr);

?>