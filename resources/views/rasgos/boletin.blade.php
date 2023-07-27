<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	.portada{
		text-align: center;
		line-height: 20px;
	}

	.logo{
		border: solid 1px; black;
		width: 300px;
		height: 300px;
		margin: auto;
		margin: 40px auto;
	}

	.informacion{
		line-height: 40px;
		position: relative;
	}

	.informacion span{
		
		width: 80%;
		text-align: center;
		position: absolute;
		border-bottom: solid 1px black;
		right: 1px;
	}

	.footer{
		text-align: center;
		position: absolute;
		left: 0;
		bottom: 0;
	}
	.portada1{
		width: 100vw;
		height: 100vh;
		border: solid 1px black;
	}
	.hoja2{
			width: 100vw;
		height: 100vh;
	
	}
</style>
<body class="portada1">
	<div class="portada">
		Republica Bolivariana <br>
		Ministerio del Poder Pupular para la Educacion <br>
		E.B "REPUBLICA DEL URUGUAY" <br>
		Maturin-EDO Monagas <br>
		Boletin INFORMATIVO <br>

	</div>
	<div class="logo">
		
	</div>
	<div class="informacion">
		Nombre : <span class="data">{{ $estudiante->nombre1 }}</span> <br>
		Apellidos : <span class="data"> {{ $estudiante->apellido }}</span><br>
		Lugar y Fecha De Nacimiento : <span class="data"> {{ $estudiante->reprecentante->domicilio }}</span><br>
		Reprecentante : <span class="data"> {{ $estudiante->reprecentante->nombre1 }}{{ $estudiante->reprecentante->apellido2 }}</span><br>
		Cedula:<span class="data"> {{ $estudiante->usuario->cedula }}</span><br>



	</div>
	<div class="footer">
		Año Escolar {{ $periodo->fecha_inicio }}
	</div>
</body>
<div class="hoja2">
	<h2 style="text-align:center;">
		INFORMACION AL REPRESENTANTE
	</h2>

	<div>
		Articulo 8: La Evalucion para la primaria y segunda estapa de educacion se consibe como un proceso inmerso
	</div>
</div>
</html>