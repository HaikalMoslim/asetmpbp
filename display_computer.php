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
    <title>Senarai Peranti</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
         <a href="add_computer.php" class="display_btn">Tambah Peranti</a>
        </div>
      </div>
        <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
              <thead>
                <tr>
                  <th class="table-plus datatable-sort">No Aset</th>
                  <th >Nama</th>
                  <th >Jabatan</th>
                  <th >Jenama</th>
                  <th> Model</th>
                  <th>Nama User</th>
                  <th >Jenis</th>
                  <th>Ram</th>
                  <th>OS</th>
                  <th>Processor</th>
                  <th >IP Address</th>
                  <th>Workgroup</th>
                  <th>Tahun</th>
                  <th >Notes</th>
                  <th class="datatable-nosort">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
            $sql="Select * from `computer`";
            $result=mysqli_query($connect,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id_comp'];
                    $no_aset_comp=$row['no_aset_comp'];
                    $nama=$row['nama'];
                    $jabatan=$row['jabatan'];
                    $model_comp=$row['model_comp'];
                    $nama_user=$row['nama_user'];
                    $jenama_comp=$row['jenama_comp'];
                    $jenis_comp=$row['jenis_comp'];
                    $ram=$row['ram'];
                    $os=$row['os'];
                    $processor=$row['processor'];
                    $ip_address=$row['ip_address'];
                    $workgroup=$row['workgroup'];
                    $tahun_comp=$row['tahun_comp'];
                    $notes=$row['notes'];
                    echo " <tr>
                  <td>".$no_aset_comp."</td>
                  <td>".$nama."</td>
                  <td>".$jabatan."</td>
                  <td>".$model_comp."</td>
                  <td>".$nama_user."</td>
                  <td>".$jenama_comp."</td>
                  <td>".$jenis_comp."</td>
                  <td>".$ram."</td>
                  <td>".$os."</td>
                  <td>".$processor."</td>
                  <td>".$ip_address."</td>
                  <td>".$workgroup."</td>
                  <td>".$tahun_comp."</td>
                  <td>".$notes."</td>
                  <td>
                  <div class='dropdown'>
                    <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' role='button' data-toggle='dropdown'>
                        <i class='dw dw-more'></i>
                    </a>
                    <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
                        <a class='dropdown-item' href='update_comp.php?updateid=".$id."'><i class='dw dw-edit2'></i> Edit</a>
                        <a class='dropdown-item'onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_comp.php?deleteid=".$id."'><i class='dw dw-delete-3'></i> Delete</a>
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
  <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Computer Details</h4>  
                </div>  
                <div class="modal-body" id="computer_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var computer_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{computer_id:computer_id},  
                success:function(data){  
                     $('#computer_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script> 