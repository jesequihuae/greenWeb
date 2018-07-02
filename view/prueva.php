<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="../librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../librerias/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body>


<div class="container">
    <form action="" class="form-horizontal"  role="form">
        <fieldset>
            <legend>Test</legend>
           
			<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Date Picking</label>

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                <select class="form-control" id="filtroFecha">
                  <option value="Mes">Mensual</option>
                  <option value="Semana">Semanal</option>
                  <option value="Dia" selected>Día</option>
                </select>
              </div>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                  	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
			
        </fieldset>
    </form>
</div>



<script type="text/javascript" src="../librerias/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../librerias/bootstrap/js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>
<script type="text/javascript">

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
        maxView: filtro,
        orientation: "top auto",
		forceParse: 0

    });
    function timePicker()
    {
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
        maxView: filtro,
        orientation: "top auto",
        forceParse: 0
    });
    }
	
</script>

</body>
</html>