
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Información del periodo
  </p>

  <div class="informacion-periodo">
    <h2 class="informacion-periodo__titulo">
      Periodo actual: {{ $data['periodo_actual'] }}
    </h2>
    <h2 class="informacion-periodo__titulo-lapsos">Lapsos:</h2>
    <div class="informacion-periodo__lapsos">
      @foreach($data['lapsos'] as $lapso)
      <div class="informacion-periodo__lapsos__lapso">
        <h3 class="informacion-periodo__lapsos__lapso__titulo">{{ $lapso['nombre'] }}</h3>
        @if (isset($lapso['fecha_inicio']))
        <span>Fecha de inicio: {{ $lapso['fecha_inicio'] }}</span>
        @endif
        @if (isset($lapso['fecha_fin']))
        <span>Fecha de fin: {{ $lapso['fecha_fin'] }}</span>
        @endif
        @if (isset($lapso['actual']) && $lapso['actual'])
        <span>lapso actual</span>
        <button
          class="informacion-periodo__lapsos__lapso__action"
        >finalizar lapso</button>
        @else
        <button
          class="informacion-periodo__lapsos__lapso__action"
          disabled
        >finalizar lapso</button>
        @endif
      </div>
      @endforeach
    </div>
    <div class="informacion-periodo__actions">
      <button
        class="informacion-periodo__actions__action"
        @if(!$data['siguiente_lapso'])
        disabled="disabled"
        @endif
      >iniciar {{ $data['siguiente_lapso'] ? $data['siguiente_lapso'] : 'siguiente' }} lapso</button>
      <button
        class="informacion-periodo__actions__action"
        @if(!$data['finalizar_periodo'])
        disabled="disabled"
        @endif
      >finalizar periodo</button>
      <button
        class="informacion-periodo__actions__action"
        @if(!$data['iniciar_periodo'])
        disabled="disabled"
        @endif
      >iniciar siguiente periodo</button>
    </div>
  </div>
</x-app-layout>
