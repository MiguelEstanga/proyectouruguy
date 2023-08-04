<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<title>Document</title>
</head>
<style>
	.progress{
		border: solid 1px black;
		width: 100%;
		border-radius: 5px;
		height: 40px;
		margin: 10px 0;
		position: relative;
	}
	.bar{
		
		width: 100%;
		border-radius: 0  5px 5px 0;
		height: 100%;
		background-color: #C0392B;
		position: absolute;
		top: 0;
		left: 0;
	}
</style>
<body>
	

    <div class="container-sm">
        
            <h2 class="alert alert-success" >
               Usuarios registrados  
            </h2>
            <div>
                <div    >
                    <div>
                        Estudiantes: {{ $estudiante_capasidad }}%  

                    </div>

                    <div class="porcentage">
                       Cantidad {{ count($estudiante_count) }}/800 
                     </div>   
                </div>
             <div class="progress">
              

              <div class="bar bg-info" role="progressbar" 
                style="                
                width:{{ $estudiante_capasidad }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
         
            <div>
                <div>
                    <div>
                         Profesores: {{ $profesores_capasidad }}% 
                    </div>
                    <div>
                        Cantidad: {{ $profesores }}/30
                    </div>
                   
                </div>
                <div class="progress">
             
              <div class="bar bg-warning" role="progressbar" style="width:{{ $profesores_capasidad }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            </div>
        
            <div>
                <div>
                    <div>
                        Administradores:  {{ $admin_capasidad }}
                       
                    </div>
                    <div>
                        Cantidad: {{ $administradores }}/7
                        
                    </div>
                </div>
              
                       <div class="progress">
                
            <div class="bar bg-danger" role="progressbar" 
                    style=" width: {{ $admin_capasidad }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
         

            <h2 
                style="margin: 10px 0;" 
                class="alert alert-success" 
            >
                Notas de los estudiantes
            </h2>
            <div>
                <div>
                   <div>
                       Literal A
                   </div>
                   <div>
                     Cantidad:  {{ $contadorA }}/800
                   </div>
               </div>
                <div class="progress">
                   
                 
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalA }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            
                </div>
                </div>

            </div>
              <div>
                <div>
                   <div>
                       Literal A
                   </div>
                   <div>
                     Cantidad:  {{ $contadorA }}/800
                   </div>
               </div>
                <div class="progress">
                   
                 
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalA }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            
                </div>
                </div>

            </div>
              <div>
                <div>
                   <div>
                       Literal B
                   </div>
                   <div>
                     Cantidad:  {{ $contadorB }}/800
                   </div>
               </div>
                <div class="progress">
                   
                 
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalB }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            
                </div>
                </div>

            </div>
              <div>
                <div>
                   <div>
                       Literal C
                   </div>
                   <div>
                     Cantidad:  {{ $contadorC }}/800
                   </div>
               </div>
                <div class="progress">
                   
                 
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalC }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            
                </div>
                </div>

            </div>
              <div>
                <div>
                   <div>
                       Literal E
                   </div>
                   <div>
                     Cantidad:  {{ $contadorE }}/800
                   </div>
               </div>
                <div class="progress">
                   
                 
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalE }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            
                </div>
                </div>

            </div>
            
            <div style="margin:10px 0;" >
                Periodo:{{ $periodo->fecha_inicio }}
            </div>
            
           

    </div>
</div>

<style>
    .progress{
        margin: 10px 20px;
        height: 30px;
    }
</style>
</body>
</html>