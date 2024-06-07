<?php include('config/constants.php') ?>
<?php include('db_connect.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo_mpbp.png">
    <title>Staf Dashboard</title>
        <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/mainStaff.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- CSS -->

</head>

<body>
<?php  
          require 'css/dashboardStaff.css';
          require 'headerStaff.php';
          require 'partials/getJSON.php';

    $computerData = json_decode( $computerJson);
    $printerData = json_decode($printerJson);
   ?>

   
       
        <div class="content">
            <section id="dashboard">
            
                <div id="status">
                    <div id="Komputer" class="info-box status-item">
                        <div class="heading">
                            <h5>Komputer</h5>
                            <div class="info">
                                <i class="fas fa fa-desktop"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Jumlah Komputer</p>
                             <p class="num" data-target="<?php 
                                    echo count($computerData);
                                ?>">
                                999
                            </p>
                        </div>
                        <a href="display_computerStaff.php">Lihat Lagi <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Printer" class="info-box status-item">
                        <div class="heading">
                            <h5>Printer</h5>
                            <div class="info">
                                <i class="fas fa-print"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Jumlah Printer</p>
                            <p class="num" data-target="<?php 
                                    echo count($printerData);
                                ?>">
                                999
                            </p>
                        </div>
                        <a href="display_printerStaff.php">Lihat Lagi <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                </div>
            </section>
                

                <footer>
                    <p>
                        <i class="far fa-copyright"></i> <?php echo date('Y');?> - SISTEM REKOD ASET MAJLIS PERBANDARAN BATU PAHAT</p>
                </footer>
</div>
            
<script src="script/dashboard.js"></script>
</body>
</html>