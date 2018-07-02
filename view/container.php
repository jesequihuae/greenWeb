<?php $tipo = $_GET['tipo']; ?>
<?php $coords = $_GET['coord'];?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $tipo; ?></title>
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
  	<!-- Aqui va todo el contenido -->
    <section>
      <!-- input para recogerlo en javascript -->
      <input type="hidden" value="<?php echo $tipo; ?>" id="tipo">
      <input type="hidden" value="<?php echo $coords ?>" id="coords">
      <div class="row">
        <div class="col-lg-4">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><img id="imgTomate" src="../img/<?php echo $tipo; ?>.png" class="img-responsive" width="250" alt=""></span>
            <div class="info-box-content">
              <span class="info-box-text"><?php echo $tipo; ?></span>
              <span class=""><i class="fa fa-thermometer-empty" aria-hidden="true"></i> Temperatura: <span class="label label-info" id="temperaturaLabel"></span></span><br>
              <span class=""><i class="fa fa-tint" aria-hidden="true"></i> Humedad relativa: <span class="label label-info" id="HRLabel"></span></span><br>
              <span class=""><i class="fa fa-tint" aria-hidden="true"></i> Humedad del suelo: <span class="label label-info" id="HSLabel"></span></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="col-lg-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-thermometer-empty" aria-hidden="true"></i> Temperatura</h3>
            </div>
            <div class="box-body" align="center">
              <div id="temperaturaActual"></div>
            </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-tint" aria-hidden="true"></i> Humedad relativa</h3>
            </div>
            <div class="box-body" align="center">
               <!-- <div id="humedadRelativa"></div> -->
            </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-tint" aria-hidden="true"></i> Humedad del suelo</h3>
            </div>
            <div class="box-body" align="center">
               <!-- <div id="humedadSuelo"></div> -->
            </div>
          </div>
      </div>
    </div>
    <section>
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title"> Temperatura </h3>
               <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                </div>
            </div>
            <div class="box-body">
              <!-- Gráfica -->
             <div id="chartTemperatura"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title"> Humedad Relativa</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="chartHR"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <section>
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title"> Humedad del suelo</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="chartHS"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </section>
  </div>
  </div><!-- Contenedor -->

  <script src="../librerias/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="../librerias/dist/js/app.min.js"></script>
  <!-- DevExpress -->
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/globalize/0.1.1/globalize.min.js"></script>
  <script type="text/javascript" src="http://cdn3.devexpress.com/jslib/15.2.10/js/dx.chartjs.js"></script>
  <script type="text/javascript" src="http://cdn3.devexpress.com/jslib/15.2.10/js/dx.webappjs.js"></script>
  <!-- Grafica tiempo real -->
  <script src="../librerias/plugins/flot/jquery.flot.min.js"></script>
  <script src="../librerias/plugins/flot/jquery.flot.resize.min.js"></script>
  <script src="../librerias/plugins/flot/jquery.flot.categories.min.js"></script>
  <!-- Otra grafica -->
  <script src="http://code.highcharts.com/highcharts.js"></script>
</body>
  <script type="text/javascript">
    var tipo = document.getElementById('tipo').value;
    var coords = document.getElementById('coords').value;
  
    // Variables
    var temperatura, humedadRelativa, humedadSuelo;
    // Graficas
    var temperaturaChart, HRChart, HSChart, actualTemperaturaChartOptions, charActualTemperatura;
    //Fecha
    var today, dia, mes, anio, hora;

    $(document).ready(function(){
      obtenerDatos();
      grafica();
    });

    function grafica(){
      temperaturaChart = Highcharts.chart('chartTemperatura', {
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          yAxis: {
              title: {
                  text: 'Grados'
              },
              min: 0,
              max: 100
          },
          xAxis: {
            title: {
              text: 'Horas - 24 hrs'
            },
            tickInterval: 1,
            visible: false
          },
          plotOptions: {
              series: {
                  pointStart: 10
              }
          },
          credits: {
              enabled: false
          },
          series: [{
              name: 'Temperatura',
              // data: [0, 10, 12, 12, 12.5, 10, 15, 10]
              data: []
          }] 
      });
      HRChart = Highcharts.chart('chartHR', {
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          yAxis: {
              title: {
                  text: 'Grados'
              },
              min: 0,
              max: 100
          },
          xAxis: {
            title: {
              text: 'Horas - 24 hrs'
            },
            tickInterval: 1,
            visible: false
          },
          plotOptions: {
              series: {
                  pointStart: 10
              }
          },
          credits: {
              enabled: false
          },
          series: [{
              name: 'Humedad Relativa',
              data: []
          }] 
      });
      HSChart = Highcharts.chart('chartHS', {
          title: {
              text: ''
          },
          subtitle: {
              text: ''
          },
          yAxis: {
              title: {
                  text: 'Grados'
              },
              min: 0,
              max: 100
          },
          xAxis: {
            title: {
              text: 'Horas - 24 hrs'
            },
            tickInterval: 1,
            visible: false
          },
          plotOptions: {
              series: {
                  pointStart: 10
              }
          },
          credits: {
              enabled: false
          },
          series: [{
              name: 'Humedad del suelo',
              data: []
          }] 
      });
      actualTemperaturaChartOptions = {
        chart: {
          type: "solidgauge"
        },
        title: null,
        pane: {
          center: ['50%','85%'],
          size: '140%',
          startAngle: -90,
          endAngle: 90,
          background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
          }
        },
        tooltip: {
          enabled: false
        },
        yAxis: {
          stops: [ [0.1,'#55BF3B'], [0.5,'#DDDF0D'], [0.9, '#DF5353'] ],
          lineWidth: 0,
          minorTickerInterval: null,
          tickAmount: 2,
          title: {
            y: -70,
          },
          labels: {
            y: 16
          }
        },
        plotOptions: {
          solidgauge: {
            dataLabel: {
              y: 5,
              borderWidth: 0,
              useHTML: true
            }
          }
        }
      };
      charActualTemperatura = Highcharts.chart('temperaturaActual', Highcharts.merge(actualTemperaturaChartOptions,{
        yAxis: {
          min: 0,
          max: 200,
          title: {
            text: "prueba"
          }
        },
        credits: {
          enabled: false
        },
        series: [{
          name: 'Speed',
          data: [80]
        }]
      }));
    }

    // Obtiene la fecha actual
    function obtenerFecha(){
      today = new Date();
      dia = today.getDate();
      (dia < 10) ? dia = '0'+dia : dia = dia;
      mes = today.getMonth()+1;
      (mes < 10) ? mes = '0'+mes : mes = mes ;
      anio = today.getFullYear();
      hora = today.getHours();
      (hora < 10) ? hora = '0'+hora : hora = hora;
    }

    //Obtiene datos de la instancia
    function obtenerDatos(){
      obtenerFecha();

      $.ajax({
        url: '../php/recolector.php',
        type: "post",
        data: {
          "opcion": 'actual',
          "tipo": tipo,
          "posicion": coords,
          "anio" : anio,
          "mes" : mes,
          "dia" : dia
        },
        success: function(data){
          console.log(data);
          temperatura = data[0]["temperatura"];
          humedadRelativa = data[0]["humedadRelativa"];
          humedadSuelo = data[0]["humedadSuelo"];
          // Pintar los valores más actuales en las label de resumen.
          document.getElementById("temperaturaLabel").innerHTML = temperatura+"º";
          document.getElementById("HRLabel").innerHTML = humedadRelativa+"%";
          document.getElementById("HSLabel").innerHTML = humedadSuelo+"%";
        }
        });

      $.ajax({
        url: '../php/recolector.php',
        type: "post",
        data: {
          "opcion": 'hora',
          "tipo": tipo,
          "posicion": coords,
          "anio" : anio,
          "mes" : mes,
          "dia" : dia,
          "hora" : hora
        },
        success: function(data){
          // console.log(data);
          var seriesTemperatura = temperaturaChart.series[0]; 
          seriesTemperatura.setData([]);
          var seriesHR = HRChart.series[0]; 
          seriesHR.setData([]);
          var seriesHS = HSChart.series[0]; 
          seriesHS.setData([]);

          for (var i = 0; i < data.length; i++) 
          {
              seriesTemperatura.addPoint([data[i]["hora"],parseFloat(data[i]["temperatura"])],false);
              seriesHR.addPoint([data[i]["hora"],parseFloat(data[i]["humedadRelativa"])],false);
              seriesHS.addPoint([data[i]["hora"],parseFloat(data[i]["humedadSuelo"])],false);
          };  

            temperaturaChart.redraw();
            temperaturaChart.render();
            HRChart.redraw();
            HRChart.render();
            HSChart.redraw();
            HSChart.render();
         }
        });

      
      setTimeout(obtenerDatos,5000);
    }    
  </script>
</html>
