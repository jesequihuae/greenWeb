<?php $tipo = $_GET['tipo']; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Posición</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../librerias/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../librerias/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../librerias/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../librerias/dist/css/skins/skin-blue.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper"> <!-- Contenedor -->
  <!-- HEADER (Administrador y Icono para abrir/cerrar Aside) -->
  <?php include '../mod/headerSection.php'; ?>
  <!-- Aside (logo y opciones) -->
  <?php include '../mod/asideSection.php'; ?>

  <!-- Contenido principal -->
  <div class="content-wrapper">
    <section class="content">
       <div class="row">
          <div class="col-lg-3">
            <div class="info-box">
              <span class="info-box-icon bg-blue"><img src="../img/<?php echo $tipo; ?>.png" class="img-responsive" width="250" alt=""></span></a>
              <div class="info-box-content">
                <span class="info-box-text"><?php echo $tipo; ?></span>
              </div>
            </div>            
          </div>
        </div>
      <div class="row">
         <div class="col-lg-6">
          <a href="container.php?tipo=<?php echo $tipo; ?>&coord=0,0">
          <div class="box box-primary">
            <div class="box-body" align="center">
              <img src="../img/greenhouse.png" alt="" width="50%">
              <p><font size="6">[0,0]</font></p>
            </div>
          </div>
          </a>
         </div>
         <div class="col-lg-6">
          <a href="container.php?tipo=<?php echo $tipo;?>&coord=0,1">
          <div class="box box-primary">
            <div class="box-body" align="center">
              <img src="../img/greenhouse.png" alt="" width="50%">
              <p><font size="6">[0,1]</font></p>
            </div>
          </div>
          </a>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
          <a href="container.php?tipo=<?php echo $tipo; ?>&coord=1,0">
          <div class="box box-primary">
            <div class="box-body" align="center">
              <img src="../img/greenhouse.png" alt="" width="50%">
              <p><font size="6">[1,0]</font></p>
            </div>
          </div>
          </a>
         </div>
         <div class="col-lg-6">
          <a href="container.php?tipo=<?php echo $tipo; ?>&coord=1,1">
          <div class="box box-primary">
            <div class="box-body" align="center">
              <img src="../img/greenhouse.png" alt="" width="50%">
              <p><font size="6">[1,1]</font></p>
            </div>
          </div>
          </a>
         </div>
      </div>
    </section>
  </div>
  </div><!-- Contenedor -->

  <script src="../librerias/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="../librerias/dist/js/app.min.js"></script>
</body>
</html>
