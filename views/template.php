<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL;?>assets/img/favicon.png">

    <title>Sistema Contratos</title>

    <!-- vendor css -->
    <link href="<?php echo BASE_URL;?>assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>assets/lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/dashforge.dashboard.css">

    <style>
      .btn-primary{
        background-color: rgb(167, 17, 23);
        border-color: rgb(167, 17, 23);
      }

      .table-dark thead{
        background-color: rgb(167, 17, 23) !important;
      }
    </style>
  </head>
  <body>

    <aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="<?php echo BASE_URL."adm";?>" class="aside-logo"><img src="<?php echo BASE_URL."assets/img/logo_coser_salvador.png";?>" alt="" width="125px"></a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="aside-body">
        <div class="aside-loggedin">
          <div class="d-flex align-items-center justify-content-start">
            <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
            <div class="aside-alert-link">
              <!-- <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
              <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a> -->
              <a href="<?php echo BASE_URL;?>adm/logout" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
            </div>
          </div>
          <div class="aside-loggedin-user">
            <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
              <h6 class="tx-semibold mg-b-0"><?php echo $viewData['admData']['nome'];?></h6>
              <i data-feather="chevron-down"></i>
            </a>
            <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
          </div>
          <div class="collapse" id="loggedinMenu">
            <ul class="nav nav-aside mg-b-0">
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="user"></i> <span>View Profile</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li>
              <li class="nav-item"><a href="<?php echo BASE_URL;?>adm/logout" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
            </ul>
          </div>
        </div><!-- aside-loggedin -->
        <ul class="nav nav-aside">
          <li class="nav-label">Dashboard</li>

          <li class="nav-item"><a href="<?php echo BASE_URL."adm";?>" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Dashboard</font></font></a></li>

          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="user"></i> <span>Clientes</span></a>
            <ul>
              <li><a href="<?php echo BASE_URL;?>adm/addClientes">Adicionar Clientes</a></li>
              <li><a href="<?php echo BASE_URL;?>adm/listClients">Lista de Clientes</a></li>
            </ul>
          </li>

          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="user"></i> <span>Empresas</span></a>
            <ul>
              <li><a href="<?php echo BASE_URL;?>adm/addEmpresa">Adicionar Empresa</a></li>
              <li><a href="<?php echo BASE_URL;?>adm/listEmpresas">Lista de Empresas</a></li>
            </ul>
          </li>

          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="user"></i><span>Contrato</span></a>
            <ul>
              <li><a href="<?php echo BASE_URL;?>adm/addNewContrato">Adicionar Contrato</a></li>
              <li><a href="<?php echo BASE_URL;?>adm/listContratos">Lista de Contrato</a></li>
            </ul>
          </li>



          <!-- <li class="nav-item active"><a href="dashboard-one.html" class="nav-link"><i data-feather="shopping-bag"></i> <span>Lista de Clientes</span></a></li>
          <li class="nav-item"><a href="dashboard-two.html" class="nav-link"><i data-feather="globe"></i> <span>Website Analytics</span></a></li>
          <li class="nav-item"><a href="dashboard-three.html" class="nav-link"><i data-feather="pie-chart"></i> <span>Cryptocurrency</span></a></li>
          <li class="nav-item"><a href="dashboard-four.html" class="nav-link"><i data-feather="life-buoy"></i> <span>Helpdesk Management</span></a></li>
          <li class="nav-label mg-t-25">Web Apps</li>
          <li class="nav-item"><a href="app-calendar.html" class="nav-link"><i data-feather="calendar"></i> <span>Calendar</span></a></li>
          <li class="nav-item"><a href="app-chat.html" class="nav-link"><i data-feather="message-square"></i> <span>Chat</span></a></li>
          <li class="nav-item"><a href="app-contacts.html" class="nav-link"><i data-feather="users"></i> <span>Contacts</span></a></li>
          <li class="nav-item"><a href="app-file-manager.html" class="nav-link"><i data-feather="file-text"></i> <span>File Manager</span></a></li>
          <li class="nav-item"><a href="app-mail.html" class="nav-link"><i data-feather="mail"></i> <span>Mail</span></a></li>

          <li class="nav-label mg-t-25">Pages</li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="user"></i> <span>User Pages</span></a>
            <ul>
              <li><a href="page-profile-view.html">View Profile</a></li>
              <li><a href="page-connections.html">Connections</a></li>
              <li><a href="page-groups.html">Groups</a></li>
              <li><a href="page-events.html">Events</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="file"></i> <span>Other Pages</span></a>
            <ul>
              <li><a href="page-timeline.html">Timeline</a></li>
            </ul>
          </li>
          <li class="nav-label mg-t-25">User Interface</li>
          <li class="nav-item"><a href="../../components" class="nav-link"><i data-feather="layers"></i> <span>Components</span></a></li>
          <li class="nav-item"><a href="../../collections" class="nav-link"><i data-feather="box"></i> <span>Collections</span></a></li> -->
        </ul>
      </div>
    </aside>

    <div class="content ht-100v pd-0">
      <div class="content-header">
        <div class="content-search">
          <i data-feather="search"></i>
          <input type="search" class="form-control" placeholder="Search...">
        </div>
        <nav class="nav">
          <a href="" class="nav-link"><i data-feather="help-circle"></i></a>
          <a href="" class="nav-link"><i data-feather="grid"></i></a>
          <a href="" class="nav-link"><i data-feather="align-left"></i></a>
        </nav>
      </div><!-- content-header -->

      <div class="content-body">
        
        <div class="container pd-x-0">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div><!-- container -->
      </div>
    </div>
    <script>
      var BASE_URL = '<?php echo BASE_URL;?>';
    </script>
    <script src="<?php echo BASE_URL;?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/feather-icons/feather.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/jquery.flot/jquery.flot.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="<?php echo BASE_URL;?>assets//lib/chart.js/Chart.bundle.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="<?php echo BASE_URL;?>assets/js/dashforge.js"></script>
    <script src="<?php echo BASE_URL;?>assets/js/dashforge.aside.js"></script>
    <script src="<?php echo BASE_URL;?>assets/js/dashforge.sampledata.js"></script>
    <script src="<?php echo BASE_URL;?>assets/js/dashboard-one.js"></script>

    <!-- append theme customizer -->
    <script src="<?php echo BASE_URL;?>assets/lib/js-cookie/js.cookie.js"></script>
    <!-- <script src="<?php echo BASE_URL;?>assets/js/dashforge.settings.js"></script> -->
    <script src="<?php echo BASE_URL;?>assets/js/script.js"></script>
  </body>
</html>