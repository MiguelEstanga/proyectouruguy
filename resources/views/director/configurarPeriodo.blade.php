
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
        
        <span>Lapso actual</span>

      
          <form action="{{ route('lapso.update' , $lapso->id) }}" method="post">
            @csrf
            @method('put')
              <input type="text" name="lapso"  value="{{ $lapso->id }}" hidden >
              <button class="informacion-periodo__lapsos__lapso__action">
                  @if($lapso->activar == true)
                    Finalizar lapso
                  @else
                    Iniciar lapso
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
        style="
          color: #fff;
          background-color:#2471A3;
          display: flex;
          justify-content: center;
          align-items: center;
          border-radius: 10px;
          padding: 10px;
          width: 50%;
        "
      >
        Iniciar periodo
      </a>
      
      @if($data->lapso ?? false  )
        @if(count($data->lapso) == 3)
        <p 
          style="color:grey;" 
          class="informacion-periodo__actions__action" 
        >
          Se han creado todos los lapsos del periodo
        </p>

        @else
        <a
        href="{{ route('lapso.index') }}"
         style="
          color: #fff;
          background-color:#2471A3;
          display: flex;
          justify-content: center;
          align-items: center;
          border-radius: 10px;
          padding: 10px;
          width: 50%;
        "
      
        >
        Crear lapso
        </a>
        @endif
    @endif     


      
    
   
    </div>
  </div>
</x-app-layout>
