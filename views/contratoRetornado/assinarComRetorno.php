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

    <title>Assinatura de Contrato</title>

    <!-- vendor css -->
    <link href="<?php echo BASE_URL;?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/dashforge.auth.css">
  </head>
  <body>

    

    <div class="content content-fixed content-auth-alt">
      <div class="container ht-100p tx-center">
      <?php if($dadosContrato['status_assin'] == 2):?>
          <div class="alert alert-success">O contrato já foi assinado</div>
      <?php endif;?>
        <div class="ht-100p d-flex flex-column align-items-center justify-content-center">
          <!-- <div class="wd-70p wd-sm-500 wd-lg-500 mg-b-15"><img src="<?php echo BASE_URL;?>assets/img/contract.jpg" class="img-fluid" alt=""></div> -->
          <h1 class="tx-color-01 tx-24 tx-sm-32 tx-lg-36 mg-xl-b-5">Baixe E preencha seu documento</h1>
          <h5 class="tx-16 tx-sm-18 tx-lg-20 tx-normal mg-b-20">Após o preenchimento, clique no botão "Reenviar Documento" logo abaixo!</h5>
          <p class="tx-color-03 mg-b-30">Agradecemos a prioridade, esperamos dar nosso melhor no decorrer de nosso contrato!</p>
          <div class="d-flex mg-b-40">
          <a href="<?php echo BASE_URL."contrato/arquivos/".$dadosContrato['arquivo'];?>" download="Contrato com Retorno" class="btn btn-info">Baixar</a>
          <?php if($dadosContrato['status_assin'] != 2):?>
              <!-- <a href="<?php echo BASE_URL."home/assinarContrato/".$dadosContrato['id'];?>" class="btn btn-success">Reenviar Documento</a> -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Reenviar Documento</button>
          <?php endif;?>
          </div>
          <span class="tx-12 tx-color-03"></span>

        </div>
      </div><!-- container -->
    </div><!-- content -->

    

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anexe o seu documento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Enviar Arquivo:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="retorno_documento" required>
                <label class="custom-file-label" for="customFile">Escolher Arquivo (PDF)</label>
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Enviar Documento</button>
      </div>
      </form>
    </div>
  </div>
</div>

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

