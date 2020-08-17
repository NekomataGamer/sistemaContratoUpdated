<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL;?>assets/img/favicon.png">

    <title>Página Não Encontrada</title>

    <!-- vendor css -->
    <link href="<?php echo BASE_URL;?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/dashforge.auth.css">
  </head>
  <body>

    <header class="navbar navbar-header navbar-header-fixed">
      <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="<?php echo BASE_URL;?>" class="df-logo">dash<span>forge</span></a>
      </div><!-- navbar-brand -->
      <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
          <a href="../../index.html" class="df-logo">dash<span>forge</span></a>
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        
          
          
      </div><!-- navbar-menu-wrapper -->
      <div class="navbar-right">
       
      </div><!-- navbar-right -->
    </header><!-- navbar -->

    <div class="content content-fixed content-auth-alt">
      <div class="container ht-100p tx-center">
      <?php if($dadosContrato['status_assin'] == 2):?>
          <div class="alert alert-success">O contrato já foi assinado</div>
      <?php endif;?>
        <div class="ht-100p d-flex flex-column align-items-center justify-content-center">
          <!-- <div class="wd-70p wd-sm-500 wd-lg-500 mg-b-15"><img src="<?php echo BASE_URL;?>assets/img/contract.jpg" class="img-fluid" alt=""></div> -->
          <h1 class="tx-color-01 tx-24 tx-sm-32 tx-lg-36 mg-xl-b-5">Assinatura de contrato</h1>
          <h5 class="tx-16 tx-sm-18 tx-lg-20 tx-normal mg-b-20"></h5>
          <p class="tx-color-03 mg-b-30">Agradecemos a prioridade, esperamos dar nosso melhor no decorrer de nosso contrato!</p>
          <div class="d-flex mg-b-40">
          <a href="<?php echo BASE_URL."home/visualisarContrato/".$dadosContrato['id'];?>" class="btn btn-info">Visualisar Contrato</a>
          <?php if($dadosContrato['status_assin'] != 2):?>
              <a href="<?php echo BASE_URL."home/assinarContrato/".$dadosContrato['id'];?>" class="btn btn-success">Assinar Contrato</a>
          <?php endif;?>
          </div>
          <span class="tx-12 tx-color-03"></span>

        </div>
      </div><!-- container -->
    </div><!-- content -->

    <footer class="footer">
      <div>
        <span> </span>
        <span> <a href=""></a></span>
      </div>
      <div>
        <nav class="nav">
          
        </nav>
      </div>
    </footer>

    <script src="<?php echo BASE_URL;?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/feather-icons/feather.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="<?php echo BASE_URL;?>assets/assets/js/dashforge.js"></script>

    <!-- append theme customizer -->
    <script src="<?php echo BASE_URL;?>assets/lib/js-cookie/js.cookie.js"></script>
    <script src="<?php echo BASE_URL;?>assets/assets/js/dashforge.settings.js"></script>
    <script>
      $(function(){
        'use script'

        window.darkMode = function(){
          $('.btn-white').addClass('btn-dark').removeClass('btn-white');
        }

        window.lightMode = function() {
          $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if(hasMode === 'dark') {
          darkMode();
        } else {
          lightMode();
        }
      })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </body>
</html>

<?php if(isset($_GET['status']) && $_GET['status'] == "success"):?>
  <script>
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Contrato Assinado!',
      showConfirmButton: false,
      timer: 1500
    })
  </script>
    
<?php endif;?>

