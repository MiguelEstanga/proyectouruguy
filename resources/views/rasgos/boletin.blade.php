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
		
	}
	.hoja2{
			width: 100vw;
		height: 100vh;
		padding: 20px;
	}

	.firma{
		text-align: center;
		position: absolute;
		left: 0;
		bottom: 0;
	}

	.fi{
		border-bottom: solid 1px black;
		margin: 0 60px;
	}

	.info{
		font-size: 18px;
		
		line-height: 30px;
	}

	.sub{
		border-bottom: solid 1px black;
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
		 <img 
		 	width="300px"
		 	height="300px" 
		 	src="data:image/jpeg;base64 , {{ asset('images/logo.jpg') }}" 
		 	alt="logo"
		 	>

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

	<div class="info" >
		Artículo 8: La evaluación para la primera y segunda etapa de educación se concibe como un proceso inmerso en la enseñanza y el aprendizaje es cualitativo, integral, multidireccional, constructiva, flexible y sistemática, acumulativa, individualizada, informativa de carácter descriptiva, narrativo, de valoración continua de todos los factores del currículo y de todos los 
		actores que interviene en los procesos de enseñanza de aprendizaje.
		<br>
		<br>

		Artículo 16: Escala alfabética para la interpretación de los resultados del rendimiento estudiantil. A. El alumno alcanzó todas las competencias y en algunos casos superó las expectativas para el grado. B. El alumno alcanzó todas las competencias previstas para el grado. C. El alumno alcanzó la mayoría de las competencias del grado. D. El alumno alcanzó la mayoría de las competencias del grado, pero requiere de un proceso de nivelación al inicio del nuevo año escolar para alcanzar las restantes. E. El alumno no logro adquirir las competencias mínimas requeridas para ser promovido al grado supe-rior.

		<br>
		<br>

		Informe Fianl Quienes suscriben , hacen constar que el (la) alumno (a) 
		<span class="sub"> {{ $estudiante->nombre1 }} {{ $estudiante->nombre2 }} {{ $estudiante->apellido }} </span> Natural de <span class="sub" >{{ $estudiante->reprecentante->domicilio }}</span>  Cursante de <span class="sub">{{ $estudiante->grado }}</span> Educacion Basica
				<br>
		En Funcion de las competencias alcanzadas se determina que: ha sido Promovido
		al _____ Reprobando el Grado ______ Con el literal _____ previo cumplimiento de los requesitos exigidos en el normativo de evalucion vigente

		<div class="firma">
			
			<span class="fi">Doncete</span>  sello   <span class="fi">Director (a)</span>

		</div>	
	</div>
</div>
</html>