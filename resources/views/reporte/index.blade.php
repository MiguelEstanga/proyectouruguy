<x-app-layout>
   


	<div class="container-sm">
        
            <h2 class="alert alert-success" >
               Usuarios registrados
            </h2>
            <div>
                <div>
                    Estudiantes: {{ $Estudiante }}
                </div>
                   <div class="progress">
              

              <div class="progress-bar bg-info" role="progressbar" style="width: {{ $Estudiante }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
         
            <div>
                <div>
                    Profesores: {{ $profesores }}
                </div>
                <div class="progress">
             
              <div class="progress-bar bg-warning" role="progressbar" style="width:{{ $profesores }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            </div>
        
            <div>
                <div>
                    Administradores: {{ $administradores }}
                </div>
                       <div class="progress">
                
            <div class="progress-bar bg-danger" role="progressbar" 
                    style=" width: {{ $administradores }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
         

            <h2 
                style="margin: 10px 0;" 
                class="alert alert-success" 
            >
                Notas de los estudiantes
            </h2>

            <div class="progress">
               Literal A
            <div class="progress-bar bg-danger" role="progressbar" 
                    style=" width: {{ $literalA }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="progress">
                Literal B
                <div class="progress-bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalB }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="progress">
                
                    Literal C
               
                <div class="progress-bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalC }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

                  <div class="progress">
                
                    Literal D
                
                <div class="progress-bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalD }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="progress">
              
                    Literal E
          
                <div class="progress-bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalE }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            

                        </div>
            </div>
    </div>
</div>

<style>
    .progress{
        margin: 10px 20px;
        height: 30px;
    }
</style>
</x-app-layout> 



