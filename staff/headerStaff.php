<! DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/header.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>

  <body>
      <header>
          <div class="inner-width">
            <i class="menu-toggle-btn fas fa-bars"></i>
            <a href="dashboard.php" class="logo"><img src="image/logo_mpbp.png" alt=""></a>
            <nav class="navigation-menu">
            <a href="dashboardStaff.php"><i class=" fas fa-tachometer-alt dashboard"></i> Dashboard</a>
            <a href="display_computerStaff.php"><i class=" fas fa fa-desktop desktop"></i> Computer</a>
            <a href="display_printerStaff.php"><i class="fas fa fa-print printer"></i> Printer</a>
            
            <a href ="logout.php" class="logout_btn">Log Keluar</a>
            </nav>
         </div>
      </header>

      <div class="content">
      </div>

<script type="text/javascript">
      $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      });
    </script>
  </body>
</html>