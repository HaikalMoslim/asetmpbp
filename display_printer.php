<?php
include'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="image/logo_mpbp.png">
    <title>Senarai Printer</title>
        <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/display.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
  </head>
  <body>
      
    <?php  require 'home.php';
   ?>
        <div class="card-box mb-30">
        <div class="pd-20">
        <div align="right">
         <a href="add_printer.php" class="display_btn">Tambah Printer</a></button>
        </div>
        </div>
        <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
  <thead>
    <tr>
      <th class="table-plus datatable-sort" >No Aset Printer</th>
      <th >Jabatan</th>
      <th >Model Printer</th>
      <th >Tahun Printer</th>
      <th >Nama Printer</th>
      <th >Notes</th>
      <th class="datatable-nosort" >Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="Select * from `printer`";
$result=mysqli_query($connect,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id_printer'];
        $nama_printer=$row['nama_printer'];
        $jabatan=$row['jabatan'];
        $model_printer=$row['model_printer'];
        $tahun_printer=$row['tahun_printer'];
        $no_aset_printer=$row['no_aset_printer'];
        $notes=$row['notes'];
        echo " <tr>
      <td>".$no_aset_printer."</td>
      <td>".$jabatan."</td>
      <td>".$model_printer."</td>
      <td>".$tahun_printer."</td>
      <td>".$nama_printer."</td>
      <td>".$notes."</td>
      <td>
      <div class='dropdown'>
        <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' role='button' data-toggle='dropdown'>
            <i class='dw dw-more'></i>
        </a>
        <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
            <a class='dropdown-item' href='update_printer.php?updateid=".$id."'><i class='dw dw-edit2'></i> Edit</a>
            <a class='dropdown-item' onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_printer.php?deleteid=".$id."'><i class='dw dw-delete-3'></i> Delete</a>
        </div>
        </div>
      </td>
        </tr>";
    }
}

    ?>
  </tbody>
</table>
</div>
</div>
      <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- buttons for Export datatable -->
    <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="vendors/scripts/datatable-setting.js"></script>
  </body>
  </html>