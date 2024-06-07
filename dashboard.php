<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo_mpbp.png">
    <title>Admin Dashboard</title>
        <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/header.css">

</head>

<body>
   <?php  require 'home.php';
          require 'partials/getJSON.php';

    $adminData = json_decode($adminJson);
    $computerData = json_decode( $computerJson);
    $printerData = json_decode($printerJson);
    $staffData = json_decode($staffJson);

   ?>

   <main>
       <div class="content">
        <br><br>
            <section id="dashboard">
            
                <div id="status">
                    <div id="Computer" class="info-box status-item">
                        <div class="heading">
                            <h5>Peranti</h5>
                            <div class="info">
                                <i class="fas fa fa-desktop"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Jumlah Peranti</p>
                            <p class="num" data-target="<?php 
                                echo count($computerData);
                                ?>">
                                999
                            </p>
                        </div>
                        <a href="display_computer.php">Lihat Lagi <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Printer" class="info-box status-item">
                        <div class="heading">
                            <h5>Printer</h5>
                            <div class="info">
                                <i class="fas fa fa-print"></i>
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
                        <a href="display_printer.php">Lihat Lagi <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Staff" class="info-box status-item">
                        <div class="heading">
                            <h5>Staff</h5>
                            <div class="info">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Jumlah Staff</p>
                            <p class="num" data-target="<?php 
                                    echo count($staffData);
                                ?>">
                                999
                            </p>
                        </div>
                        <a href="display_staff.php">Lihat Lagi <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Admin" class="info-box status-item">
                        <div class="heading">
                            <h5>Admin</h5>
                            <div class="info">
                                <i class="fas fa-user-lock"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Jumlah Admin</p>
                            <p class="num" data-target="<?php 
                                    echo count($adminData);
                                ?>">
                                999
                            </p>
                        </div>
                        <a href="display_admin.php">Lihat Lagi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>
                <footer>
                    <p>
                        <i class="far fa-copyright"></i> <?php echo date('Y');?> - SISTEM REKOD ASET MAJLIS PERBANDARAN BATU PAHAT</p>
                </footer>
        </div>
    </main>
<script src="script/admin_dashboard.js"></script>
</body>
</html>