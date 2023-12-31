<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.container{
			
			width: 50%;
			height: auto;
			margin: auto;
		}

		.tabla{
			border: solid 1px black;
			width: 90%;
			margin: auto;
			height: 50px;
			display: grid;
			justify-content: center;
			align-items: center;

		}
		.lista{
			margin: auto;	
			position: relative;
			
			margin: 20px auto;
			font-size: 20px;
		}
		ul{
			border: solid 1px black;
		}

		span{
			text-decoration: underline;
		}

		.firma{
			position: absolute;
			left: 0;
			bottom: 0;
		}
		.res{
			text-align: right;
			
			position: absolute;
			right: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
			<h2 style="text-align:center;" >
				Rasgos Personales
			</h2>
			<ul>
				<li class="lista">
					Conducta  <span class="res" >{{ $rasgos->Conducta }}</span>
				</li>
				<li class="lista">
					Lectura  <span class="res" >{{ $rasgos->Lectura }}</span>
				</li>
				<li class="lista">
					Expresión <span class="res" >{{ $rasgos->Exprecion }}</span>
				</li>
				<li class="lista">
					Participación  <span class="res"> {{ $rasgos->Partisipacion }}</span>
				</li>
				<li class="lista">
					Trabajo en equipo  <span class="res"> {{ $rasgos->Trabajo_En_Equipo }} </span>
				</li>
			
			</ul>
	</div>
	
</body>
</html>