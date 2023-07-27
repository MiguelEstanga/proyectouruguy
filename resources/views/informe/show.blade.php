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
		}

		.bolt{
			font-weight: 900;
		}

		.titulo_container{
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.titulo{
			text-align: center;
			text-decoration: underline;
			font-weight: 900;
		}

		.footer{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			text-align: center;
			position: absolute;
			left: 0;
			bottom: 0;

		}
		.footer span{
			border-top : solid 1px black;
			margin: 0 10px;
			width: 30%;
			padding-top: 10px;
		}
	</style>
</head>
<body>
	<div>
		 <span class="bolt" > Nombre Del Proyecto </span> : {{ $lapso->proyecto->nombre }}
	</div>
	
	<div>
		<span class="bolt">
			Desde:
		</span>
		{{ $lapso->inicio }}
		<span class="bolt" >
			Hasta:
		</span>
		{{ $lapso->fin }}
	</div>
	<div class="bolt">
		{{ $estudiante->grado }} Grado Seccion {{ $estudiante->seccion }}
	</div>
	<div>
		<span class="bolt">
			Alumna:
		</span>
		{{ $estudiante->nombre1 }} {{ $estudiante->nombre2 }} {{ $estudiante->apellido }}
	</div>
	<br>
	<br>
	<br>

	<div class="titulo_container">
		<h2 class="titulo">
			Registro Descriptivo
		</h2>
	</div>

	<div class="text_content" >
		{{ $informe->descripcion }}
	</div> 

	<div class="footer">
		<span>
			docente
		</span>
		<span>
			Director
		</span>
		<span>
			Reprecentante
		</span>
	</div>
</body>
</html>