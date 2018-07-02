<?php 
	
	header("Content-Type: application/json");
	// $host = 'http://tatallerarquitectura.com/fiware';
	$host = 'http://greenhousecloud.site40.net/greenService';
	$url = '';
	$curl = curl_init();

	$opcion = $_POST['opcion'];
	$tipo = $_POST['tipo'];
	$posicion = $_POST['posicion'];

	#Si la peticion es de actual retornar los valores actuales
	if(strcmp($opcion, 'actual') == 0){
		$anio = $_POST['anio']; $mes = $_POST['mes']; $dia = $_POST['dia'];
		$url = $host.'/actual/'.$tipo.'/'.$posicion.'/'.$anio.'/'.$mes.'/'.$dia;
   	}

   	if(strcmp($opcion, 'hora') == 0){
		$anio = $_POST['anio']; $mes = $_POST['mes']; $dia = $_POST['dia']; $hora = $_POST['hora'];
		$url = $host.'/hora/'.$tipo.'/'.$posicion.'/'.$anio.'/'.$mes.'/'.$dia.'/'.$hora;
   	}


   	#hacer la peticion a fiware
   	@curl_setopt($url);
   	curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url
	));

   	#retornar datos al ajax
    $answer = curl_exec($curl);
    echo $answer;

?>