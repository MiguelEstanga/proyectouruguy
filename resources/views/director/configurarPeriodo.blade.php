
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Información del periodo
  </p>

  @if(session('error'))
    <h2 class="alert alert-success" >
      {{ session('error') }}
    </h2>
  @endif

  <div class="informacion-periodo">
    <h2 class="informacion-periodo__titulo">
      Periodo actual: {{  $data->añoescolar ?? 'Sin año escolar'; }}
    </h2>
    <h2 class="informacion-periodo__titulo-lapsos">Lapsos:</h2>
    <div class="informacion-periodo__lapsos">
      @if($data->lapso ?? false)
      @foreach($data->lapso as $lapso)
      <div class="informacion-periodo__lapsos__lapso">
        <h3 class="informacion-periodo__lapsos__lapso__titulo">{{ $lapso['nombre'] }}</h3>
        @if (isset($lapso['inicio']))
        <span>Fecha de inicio: {{ $lapso['inicio'] }}</span>
        @endif
        @if (isset($lapso['fin']))
        <span>Fecha de fin: {{ $lapso['fin'] }}</span>
        @endif
        
        <span>lapso actual</span>

      
          <form action="{{ route('lapso.update' , $lapso->id) }}" method="post">
            @csrf
            @method('put')
              <input type="text" name="lapso"  value="{{ $lapso->id }}" hidden >
              <button class="informacion-periodo__lapsos__lapso__action">
                  @if($lapso->activar == true)
                    finalizar lapso
                  @else
                    iniciar lapso
                  @endif

                  
                 
              </button>
          </form>
       
      
    
      </div>
      @endforeach
      @endif
    </div>


    <div class="informacion-periodo__actions">
      <a
        href="{{ route('periodo.create') }}"
        class="informacion-periodo__actions__action"
       
      >
        Iiniciar  Periodo
      </a>
      
      @if($data->lapso ?? false  )
        @if(count($data->lapso) == 3)
        <p 
          style="color:grey;" 
          class="informacion-periodo__actions__action" 
        >
          Se han creado todos los lapsos del perodo
        </p>

        @else
        <a
        href="{{ route('lapso.index') }}"
        class="informacion-periodo__actions__action"
      
        >
        Crear Lapso
        </a>
        @endif
    @endif     


      
    
   
    </div>
  </div>
</x-app-layout>
