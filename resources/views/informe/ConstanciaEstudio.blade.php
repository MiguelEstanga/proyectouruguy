<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: Arial;
			font-size: 20px;
		}
		.encabezado{
		
			text-align: center;
			font-weight: 900;

		}

		.body
		{
			text-align: justify;
			line-height: 35px;
			padding: 20px;
		}

		.expirar{
			padding: 20px;
			margin-top: 100px;
		}

		.firma{
			border-top: solid 1px black;
			padding: 10px 0;
			margin: auto;
			position: absolute;
			left: 40%;
			bottom: 0;
		}
	</style>
</head>
<body>
	<div class="encabezado">
		República Bolivariana De Venezuela <br>
		Ministerio del Poder Popular para la Educación <br>
		Escuela Básica "República del Uruguay" <br>
	    Maturín - Estado Monagas <br>
	
		<br>
		<br>
		<br>
		<h2>
			Constancia De Estudio
		</h2> 
	</div>

	<div class="body">
		Quien suscribe,   {{ $director->nombre1 }} {{ $director->nombre2 }} 
		{{ $director->apellido }}, titular de la cédula de identidad N: v-{{ $director->usuario->cedula }},  
		director académico de la Escuela Básica "República del Uruguay"  ubicada en el centro de la ciudad de Maturín, Estado Monagas,  hace constar por medio de la presente que el (la) estudiante {{ $estudiante->nombre1 }} {{ $estudiante->apellido }} de cédula escolar de identidad N:{{$estudiante->cedulaescolar }} nacido  en {{ 
		$estudiante->reprecentante->domicilio }}
		, cursa en esta institución el {{ $estudiante->grado_id->grado }} grado de educación inicial durante el año escolar {{ $periodo->añoescolar }}
	</div>

	<div class="expirar">
		Constancia que se expide a los {{ date('d') }} días del mes {{ date("m") }}
		del año {{ date('Y') }}
	</div>

	<div class="firma">
		Firma del director
	</div>
</body>
</html>