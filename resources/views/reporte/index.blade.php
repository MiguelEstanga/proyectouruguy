<x-app-layout>
   


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
              

              <div class="progress-bar bg-info" role="progressbar" style="width: {{ $estudiante_capasidad }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
             
              <div class="progress-bar bg-warning" role="progressbar" style="width:{{ $profesores_capasidad }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            </div>
        
            <div>
                <div>
                    <div>
                        Administradores: {{ $administradores }}/7
                    </div>
                    <div>
                        
                    </div>
                </div>
              
                       <div class="progress">
                
            <div class="progress-bar bg-danger" role="progressbar" 
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
                   
                 
                <div class="progress-bar bg-danger" role="progressbar" 
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
                   
                 
                <div class="progress-bar bg-danger" role="progressbar" 
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
                   
                 
                <div class="progress-bar bg-danger" role="progressbar" 
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
                   
                 
                <div class="progress-bar bg-danger" role="progressbar" 
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
                   
                 
                <div class="progress-bar bg-danger" role="progressbar" 
                        style=" width: {{ $literalE }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            
                </div>
                </div>

            </div>
            
            <div style="margin:10px 0;" >
                Periodo:{{ $periodo->fecha_inicio }}
            </div>
            
           

            <div>
                <a class="btn btn-success" href="{{ route('reporte.show') }}">
                    GENERAR PDF 
                </a>
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



