@php

@endphp

<x-app-layout>
  <h2 class="dashboard__main__content__welcome-msg">
    Evaluar: Ver o modificar proyecto
  </h2>
  <div class="dashboard__main__content__details">
    <div class="dashboard__main__content__details__content">
      <p class="dashboard__main__content__details__content__text">
        
      {{  Auth::user()->profesor[0]->grado_id->grado }} Grado -

      Sección  {{ Auth::user()->profesor[0]->seccion->seccion }} 
      
        
      </p>
    </div>
  </div>
  <div class="dashboard__main__content__current-project">
    <div
      
      class="dashboard__main__content__current-project__details">
      <span class="dashboard__main__content__current-project__details__title">
        Proyecto actual
      </span>
      <span class="dashboard__main__content__current-project__details__value">
        {{ $proyecto->lapso->nombre }}
      </span>
    </div>
    <form class="dashboard__main__content__current-project__value" 
    action="{{ route('proyecto.update' , $proyecto->id ) }}" method="post">
    @csrf
    @method('put')
      <textarea name="descripcion" class="dashboard__main__content__current-project__value__text">
        {{ $proyecto->descripcion }}
      </textarea>
      <button  class="dashboard__main__content__current-project__value__button">Modificar</button>
    </form>
  </div>
</x-app-layout>
