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
			
			width: 100%;
			justify-content: space-between;
		}
		.footer span{
			border-top : solid 1px black;
			margin: 0 10px;
			width: 30%;
			padding-top: 10px;
		}

		.pw{
			margin: 10px 0;
		}
	</style>
</head>
<body>
	<div class="pw">
		 <span class="bolt" > Nombre Del Proyecto </span> : {{ $nombre_proyecto->descripcion}}   
	</div>
	
	<div class="pw">
		<span class="bolt">
			Desde:
		</span>
		{{ $lapso->inicio }}
		<span class="bolt" >
			Hasta:
		</span>
		{{ $lapso->fin }}
	</div>
	<div class="bolt pw">
		{{ $estudiante->grado_id->grado }} Grado, Sección {{ $estudiante->seccion_id->seccion }}
	</div>
	<div class="pw">
		<span class="bolt">
			Alumno (a):
		</span>
		{{ $estudiante->nombre1 }}  {{ $estudiante->apellido }}
	</div>
	<br>
	<br>
	<br>

	<div class="titulo_container">
		<h2 class="titulo">
			Registro Descriptivo
		</h2>
	</div>

	<div class="text_content" 
		style="padding: 25px;" >
		{{ $informe->descripcion }}
	</div> 

	<div class="footer">
		<span>
			Docente
		</span>
		<span>
			Director
		</span>
		<span>
			Representante
		</span>
	</div>
</body>
</html>