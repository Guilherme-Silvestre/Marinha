<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:../login/login1.php');

    exit;
}
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dasboard marinha
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar">
      <div class="logo">
        <a class="simple-text logo-mini">
        </a>
        <a class="simple-text logo-normal">
        Marinha
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="index.php">
              <i class="now-ui-icons design_app"></i>
              <p>Inquéritos Entrada</p>
            </a>
          </li>
          <li class="active-pro">
            <a onclick="return confirme();">
              <p style="font-size: 11px"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-door-open mr-2" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
</svg>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Inquérito</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
      </div>
      <?php

$idresposta = $_GET["codigo"];


$sql_resposta = "SELECT * FROM questionario WHERE idresposta =$idresposta";
$result_resposta = mysqli_query($conn, $sql_resposta);
$row_resposta = mysqli_fetch_assoc($result_resposta);

?>

<div class="card border-secondary  ml-5 mt-3 mb-4 w-50  d-inline-block ">
    <div class="card-header"><h5 class="card-title">Número da resposta</h5><?php echo $row_resposta["idresposta"]; ?></div>
    <div class="card-body text-secondary">
        <h5 class="card-title">Género</h5>
        <p class="card-text"><?php echo $row_resposta["genero"]; ?></p>
        <h5 class="card-title">Idade</h5>
        <p class="card-text"><?php echo $row_resposta["idade"]; ?></p>
        <h5 class="card-title">Escolaridade</h5>
        <p class="card-text"><?php echo $row_resposta["escolaridade"]; ?></p>
        <h5 class="card-title">Primeira visita</h5>
        <p class="card-text"><?php echo $row_resposta["primeiravisita"]; ?></p>
        <h5 class="card-title">Ultima visita</h5>
        <p class="card-text"><?php echo $row_resposta["ultimavisita"]; ?></p>
        <h5 class="card-title">Factores que influenciaram a visita</h5>
        <p class="card-text"><?php echo $row_resposta["fatoresvisita"]; ?></p>
        <h5 class="card-title">Principal razão da visita</h5>
        <p class="card-text"><?php echo $row_resposta["razaovisita"]; ?></p>
        <br>
        <p>
            <button onclick="window.location.href='index.php'" class="btn btn-secondary">
                <h7>Voltar</h7>
            </button>
        </p>
    </div>

</div>





<?php
include "close.php";
?>
        </div>
          </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
          </nav>
          <div class="copyright" id="copyright">
            © 2021 COMISSÃO CULTURAL DE MARINHA
          </div>
        </div>
      </footer>
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      demo.initDashboardPageCharts();

    });
  </script>
  <script>
    function confirme() {
                var resposta = confirm("Deseja sair?");
                if (resposta == true) {
                    window.location.href = "logout.php"
                } else {
                    window.location.href = "index.php"
                }
            };
    function confirmacao(idresposta) {
                var resposta = confirm("Deseja apagar este Registo?");

                if (resposta == true) {
                    window.location.href = "eliminar.php?codigo=" + idresposta;
                }
            };
  </script>
</body>
</html>