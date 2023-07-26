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
			
			padding: 20px;
		}
	</style>
</head>
<body>
	<div class="encabezado">
		Republica Bolivariana De Venezuela <br>
		Ministerio Del Poder Popular Para La Educacion <br>
		Escuela Basica "Republica Del Uruguay" <br>
	    Maturin Estado Monagas <br>
	
		<br>
		<br>
		<br>
		<h2>
			Constancia De Estudio
		</h2> 
	</div>

	<div class="body">
		Quien suscribe,   {{ $director->nombre1 }} {{ $director->nombre2 }} 
		{{ $director->apellido }} titular de la cedula de identidad N: v-{{ $director->usuario->cedula }}  
		Director Academico de la Escuela Basica "Republica Del Uruguay"  Ubicada en el centro de la ciudad de Maturin Estado Monagas  Hace constar por medio de la presente que el (la) estudiante {{ $estudiante->nombre1 }} {{ $estudiante->nombre2 }} {{ $estudiante->apellido }} Cedula Escolar de identidad {{$estudiante->cedulaescolar }} Nacida(o)
		en  {{ $estudiante->reprecentante->domicilio }}  Cursar en esta institucion {{ $estudiante->grado }} grado Seccion {{ $estudiante->seccion }} Educacion Primaria durante el Año Escolar {{ $periodo->añoescolar }}
	</div>
</body>
</html>