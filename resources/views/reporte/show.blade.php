<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		height: 40px;
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
                <div>
                    Estudiantes: {{ $Estudiante }}% 
                </div>
            <div class="progress">
              

              <div class="bar bg-info" role="progressbar" 
              		style="
              			width: {{ $estudiante_capasidad }}%;	
					" 
					aria-valuenow="50" 
					aria-valuemin="0" 
					aria-valuemax="100"></div>
            </div>
            </div>
         
            <div>
                <div>
                    Profesores: {{ $profesores }}
                </div>
                <div class="progress">
             
              <div class="bar bg-warning" role="progressbar" style="width:{{ $profesores_capasidad }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            </div>
        
            <div>
                <div>
                    Administradores: {{ $administradores }}/7
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
                    Literal A
                </div>
            <div class="progress">
             
            <div class="progress-bar bg-danger" role="progressbar" 
                    style=" width: {{ $literalA }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
             <div>
                    Literal B
                </div>
            <div class="progress">
              
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalB }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
             <div>
                    Literal C
                </div>
            <div class="progress">
                
                    
               
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalC }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            	 <div>
                    Literal D
                </div>
                  <div class="progress">
                
                   
                
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalD }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
             <div>
                    Literal D
                </div>
            <div class="progress">
              
                    
          
                <div class="bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalE }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            

                        </div>
            </div>


           
    </div>
</body>
</html>