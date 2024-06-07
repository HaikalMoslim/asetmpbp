<?php include('db_connect.php') ?>
<?php include('config/constants.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo_mpbp.png">
    <title>Senarai Komputer</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="css/display.css">
     
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  </head>
  <body>
      
    <?php  require 'headerStaff.php';
          require 'css/dashboardStaff.css';
   ?>
      <div class = "content my-2">
        <div align="right">
          <a href="add_computer_staff.php" class="display_btn">Tambah Komputer</a>
        </div>
        <table id="tabledata" class="table table-dark table-bordered  table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">No. Aset</th>
      <th scope="col">Nama User</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Jenama Komputer</th>
      <th scope="col">Model Komputer</th>
      <th scope="col">Jenis Komputer</th>
      <th scope="col">Ram</th>
      <th scope="col">OS</th>
      <th scope="col">Processor</th>
      <th scope="col">IP Address</th>
      <th scope="col">Workgroup</th>
      <th scope="col">Tahun Komputer</th>
      <th scope="col">Nota</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="Select * from `computer`";
$result=mysqli_query($connect,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id_comp=$row['id_comp'];
        $no_aset_comp=$row['no_aset_comp'];
        $nama_user=$row['nama_user'];
        $jabatan_comp=$row['jabatan_comp'];
        $jenama_comp=$row['jenama_comp'];
        $model_comp=$row['model_comp'];
        $jenis_comp=$row['jenis_comp'];
        $ram=$row['ram'];
        $os=$row['os'];
        $processor=$row['processor'];
        $ip_address=$row['ip_address'];
        $workgroup=$row['workgroup'];
        $tahun_comp=$row['tahun_comp'];
        $nota=$row['nota'];
        echo " <tr>
      <td>".$no_aset_comp."</td>
      <td>".$nama_user."</td>
      <td>".$jabatan_comp."</td>
      <td>".$jenama_comp."</td>
      <td>".$model_comp."</td>
      <td>".$jenis_comp."</td>
      <td>".$ram."</td>
      <td>".$os."</td>
      <td>".$processor."</td>
      <td>".$ip_address."</td>
      <td>".$workgroup."</td>
      <td>".$tahun_comp."</td>
      <td>".$nota."</td>
      <td>
      <a href='updatecompStaff.php?updateid1=".$id_comp."' class='update_btn'>Kemaskini</a>
      </td>
        </tr>";
    }
}

    ?>
  </tbody>
</table>
      </div>
  </body>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#tabledata').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10,25,50, "All"]
      ],
      responsive: true,
      language:{
        search: "_INPUT_",
        searchPlaceholder:"Search records",
      }
    });
    });
      </script>
  </html>