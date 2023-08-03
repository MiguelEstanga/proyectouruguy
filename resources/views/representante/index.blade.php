@php

@endphp

<x-app-layout>
  <h2 class="dashboard__main__content__welcome-msg">
    Ver representado
  </h2>
  <h2>
  
  </h2>
  <div class="dashboard__main__content__details">
    <div class="dashboard__main__content__details__content">
      <p class="dashboard__main__content__details__content__text">
        {{  $user->estudiante[0]->nombre1 }}
        {{ $user->estudiante[0]->apellido }}
      </p>
      <div class="dashboard__main__content__details__content__info">
        <p class="dashboard__main__content__details__content__info__text">
          Grado: {{ $user->estudiante[0]->grado_id->grado }} grado
        </p>
        <p class="dashboard__main__content__details__content__info__text">
          Seccion: {{ $user->estudiante[0]->seccion_id->seccion }}
        </p>
        <p class="dashboard__main__content__details__content__info__text">
          Maestro: {{ $lastInforme->profesor }} {{ $lastInforme }} 
                  </p>
      </div>
    </div>
  </div>
  <div class="dashboard__main__content__links">

    <a 
      target="_black" 
      href="{{ route('informe.show' , $user->estudiante[0]->id) }}" class="dashboard__main__content__links__link">
      Ver informe descriptivo
      <img
        class="dashboard__main__content__links__link__icon"
        src="{{ asset('images/file.svg') }}"
        alt="usuario"
      >
      
    </a>

    
    <a 
       href="{{ route('constancia' ,   $user->estudiante[0]->id  ) }}" 
      class="dashboard__main__content__links__link">
      Ver constancia
      <img
       
        class="dashboard__main__content__links__link__icon"
        src="{{ asset('images/clipboard.svg') }}"
        alt="usuario"
      >
    </a>

    @if($lapsos == 3)
        <a
     href="{{ route('literal.boletin' ,   $user->estudiante[0]->id  ) }}"
      class="dashboard__main__content__links__link">
      Ver boletín
      <img
        class="dashboard__main__content__links__link__icon"
        src="{{ asset('images/book.svg') }}"
        alt="usuario"
      >
    </a>

    <a href="{{ route('literal.rasgos' ,   $user->estudiante[0]->id  ) }}" class="dashboard__main__content__links__link">
      Ver Rasgos Personales
      <img
        
        class="dashboard__main__content__links__link__icon"
        src="{{ asset('images/clipboard.svg') }}"
        alt="usuario"
      >
    </a>
    @endif
  
  </div>

  @foreach($proyecto as $p)

  <div class="dashboard__main__content__current-project">
    <div class="dashboard__main__content__current-project__details">
      <span class="dashboard__main__content__current-project__details__title">
        Proyecto actual
      </span>
      <span class="dashboard__main__content__current-project__details__value">
       
      </span>
    </div>
    <div class="dashboard__main__content__current-project__value">
      <span class="dashboard__main__content__current-project__value__text">
        {{ $p['descripcion'] }} 
      </span>
    </div>
  </div>
  @endforeach

</x-app-layout>
