<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boletin</title>
</head>
<style>
	.portada{
		text-align: center;
		line-height: 20px;

	} 

	.logo{
		
		width: 300px;
		height: 300px;
		margin: auto;
		margin: 40px auto;
	}

	.informacion{
		line-height: 60px;
		position: relative;
		
		padding: 30px;

	}

	.informacion span{
		
		width: 70%;
		text-align: center;
		position: absolute;
		border-bottom: solid 1px black;
		right: 50px;
	}

	.footer{
		text-align: center;
		position: absolute;
		width: 100%;
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
		
		width: 100%;
	}

	.fi{
		border-top: solid 1px black;
		margin: 0 60px;
		padding: 10px 0;
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
		República Bolivariana de Venezuela <br>
		Ministerio del Poder Popular para la Educación <br>
		E.B. "República del Uruguay" <br>
		Maturín - Edo. Monagas <br>
		Boletín informativo <br>

	</div>
	<div class="logo">
		 <img 
		 	width="100%"   
		 	height="100%" 
		 	src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/images/logo.jpg'))) }}"
		 	alt="logo"
		 	>

	</div>
	<div class="informacion">
		Nombre : <span class="data">{{ $estudiante->nombre1 }}</span> <br>
		Apellidos : <span class="data"> {{ $estudiante->apellido }}</span><br>
		Lugar y fecha de nacimiento : <span class="data"> {{ $estudiante->reprecentante->domicilio  }} /{{ $estudiante->usuario->fecha_nacimiento}} </span><br>
		Representante : <span class="data"> {{ $estudiante->reprecentante->nombre1 }} {{ $estudiante->reprecentante->apellido }}</span><br>
		Cédula escolar:<span class="data"> {{ $estudiante->usuario->cedula }}</span><br>
	</div>
	<div class="footer">
		Año Escolar {{ $periodo->fecha_inicio }}
	</div>
</body>
<div class="hoja2">
	<h2 style="text-align:center;">
		INFORMACIÓN AL REPRESENTANTE
	</h2>

	<div class="info" >
		Artículo 8: La evaluación para la primera y segunda etapa de educación se concibe como un proceso inmerso en la enseñanza y el aprendizaje es cualitativo, integral, multidireccional, constructiva, flexible y sistemática, acumulativa, individualizada, informativa de carácter descriptiva, narrativo, de valoración continua de todos los factores del currículo y de todos los 
		actores que interviene en los procesos de enseñanza de aprendizaje.
		<br>
		<br>

		Artículo 16: Escala alfabética para la interpretación de los resultados del rendimiento estudiantil. A. El alumno alcanzó todas las competencias y en algunos casos superó las expectativas para el grado. B. El alumno alcanzó todas las competencias previstas para el grado. C. El alumno alcanzó la mayoría de las competencias del grado. D. El alumno alcanzó la mayoría de las competencias del grado, pero requiere de un proceso de nivelación al inicio del nuevo año escolar para alcanzar las restantes. E. El alumno no logró adquirir las competencias mínimas requeridas para ser promovido al grado superior.

		<br>
		<br>

		Informe Final: Quienes suscriben, hacen constar que el (la) alumno (a) 
		<span class="sub"> {{ $estudiante->nombre1 }} {{ $estudiante->apellido }} </span>, natural de <span class="sub" >{{ $estudiante->reprecentante->domicilio }}</span>,  cursante de <span class="sub">{{ $estudiante->grado }}</span> Educación Básica
				<br>
		En función de las competencias alcanzadas se determina que al alumno(a) se le ha sido otorgado el literal: <span class="sub" >{{ $estudiante->boletin->literal }} </span>  previo al cumplimiento de los requisitos exigidos en el normativo de evaluación vigente.

		<div class="firma">
			
			<span class="fi">Docente</span>  Sello   <span class="fi">Director (a)</span>

		</div>	
	</div>
</div>
</html>