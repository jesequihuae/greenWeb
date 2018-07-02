<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Historial</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../librerias/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../librerias/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../librerias/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../librerias/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <!-- TimePciker -->
   <link href="../librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../librerias/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <style>
    .img{
      background-color: #fff;
      margin:5px;
      padding:5px;
    }
    .img-selected
    {
      border: 3px solid #3c8dbc;
      margin:5px;
      padding:5px;
    }
  </style>
   <script>
    $(document).ready(function() {
      $("#datepicker").datepicker();
    });
   </script>
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
      <div class="row" align="center" style="background:white;" id="variedades">
        <font size="4">Selecciona un tomate</font><br>
        <img id="cherubs" class="img tomate" src="../img/cherubs.png" width="100">
        <img id="sunburts" class="img tomate" src="../img/sunburts.png" width="100">
        <img id="glorys" class="img tomate" src="../img/glorys.png" width="100">
        <img id="jubilees" class="img tomate" src="../img/jubilees.png" width="100">
        <img id="eclipses" class="img tomate" src="../img/eclipses.png" width="100">
      </div><br>
      <div class="row" align="center" style="background:white;" id="posiciones">
          <font size="4">Selecciona una posicíón</font><br>
          <img id="0,0" class="img posicion" src="../img/greenhouse.png" width="100">
          <img id="0,1" class="img posicion" src="../img/greenhouse.png" width="100">
          <br>
          <img id="1,0" class="img posicion" src="../img/greenhouse.png" width="100">
          <img id="1,1" class="img posicion" src="../img/greenhouse.png" width="100">       
      </div> 
      <br>
      <section>
        <div class="box box-primary" id="graficasHistorial">
          <div class="box-header with-border">
            <!-- <h3 class="box-title">Historial</h3> -->
            <fieldset>
            <legend>Test</legend>
           
      <div class="form-group">
                

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                <select class="form-control" id="filtroFecha">
                  <option value="Mes">Mensual</option>
                  <option value="Semana">Semanal</option>
                  <option value="Dia" selected>Día</option>
                </select>
              </div>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" >
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
        <input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
      
        </fieldset>          
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
          </div>
        </div>
      </section>
    </section>
  </div>
  </div><!-- Contenedor -->

  <script src="../librerias/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="../librerias/dist/js/app.min.js"></script>
  <!-- TimePicker -->
  <script type="text/javascript" src="../librerias/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../librerias/bootstrap/js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
  <script type="text/javascript">
    var tipo;
    var posicion;
    var filtro = 2;
    var hoy = 1;
    var fecha = "Dia";

    $('#filtroFecha').change(function(e){
       fecha = e.currentTarget.value;
       console.log(fecha);
       if(fecha.localeCompare("Mes") == 0)
         filtro = 3;
       else if( (fecha.localeCompare("Semana") == 0)  || (fecha.localeCompare("Dia") == 0))
         filtro = 2;

    $('#timePicker1').value;
       timePicker();
    });

   
    $('.form_date').datetimepicker({
       language: 'es',
       format: "yyyy/mm/dd",
       weekStart: 1,
       todayBtn:  hoy,
       autoclose: 1,
       todayHighlight: 1,
       startView: filtro,
       minView: filtro,
       forceParse: 0
    });

    function timePicker(){
      $('.form_date').datetimepicker('remove');
      if (filtro==3) {hoy=0};
      if (filtro==2) {hoy=1};
      $('.form_date').datetimepicker({
        language:'es',
        format: "yyyy/mm/dd",
        weekStart: 1,
        todayBtn: hoy,
        autoclose: 1,
        todayHighlight: 1,
        startView: filtro,
        minView: filtro,
        forceParse: 0
      });
    }
 
    $(document).ready(function(){
      $('#variedades').hide();
      $('#variedades').show(1000);      
      $('#posiciones').hide();
      $('#graficasHistorial').hide();

      $('.tomate').click(function(tomate){
        $('#posiciones').show(500);
        if( $('.tomate').hasClass("img-selected") ){
          $('.tomate').removeClass("img-selected");
          $(this).addClass("img-selected");
        }
        else{
          $(this).addClass("img-selected");
        }
        console.log(tomate.currentTarget.id);
        tipo = tomate.currentTarget.id;
      });

      $('.posicion').click(function(posicionClicked){
        $('#graficasHistorial').show(500);
        if( $('.posicion').hasClass("img-selected") ){
          $('.posicion').removeClass("img-selected");
          $(this).addClass("img-selected");
        }
        else {
          $(this).addClass("img-selected");
        }
        //console.log(posicion.currentTarget.id);
        posicion = posicionClicked.currentTarget.id;
        // console.log(posicion);
      });

  });  
  </script>
</body>
</html>
