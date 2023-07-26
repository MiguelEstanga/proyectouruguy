@php

@endphp

<x-app-layout>
  <h2 class="dashboard__main__content__welcome-msg">
    Evaluar: ver o modificar proyecto
  </h2>
  <div class="dashboard__main__content__details">
    <div class="dashboard__main__content__details__content">
      <p class="dashboard__main__content__details__content__text">
       
       {{ Auth::user()->profesor[0]->grado->grado}} Gado -
       Seccion {{ Auth::user()->profesor[0]->seccion->seccion}} 
         
      </p> 
    </div>
  </div>

@if(  count($proyectos) > 0 )

  @foreach($proyectos as $proyecto)
   <div class="dashboard__main__content__current-project">
    <div class="dashboard__main__content__current-project__details">
      <span class="dashboard__main__content__current-project__details__title">
        Proyecto actual
      </span>
      <span class="dashboard__main__content__current-project__details__value">
          {{ $proyecto->lapso->nombre }}
      </span>
    </div>
    <div class="dashboard__main__content__current-project__value">
      <span class="dashboard__main__content__current-project__value__text">
        {{ $proyecto->descripcion}}
      </span>
      <a href="{{ route('proyecto.edit' , $proyecto->id) }}" class="dashboard__main__content__current-project__value__button">Modificar</a>
      
    </div>
  </div>
  @endforeach
 

@endif

@if( count($proyectos) < 3 )
  <a href="{{ route('proyecto.create') }}">
    Crear Siguiente Proyecto
  </a>
@else
 <h2>
     Todos Los Proyectos De Este Priodo 
  </h2>
@endif 

  

  <!--div class="dashboard__main__content__other-projects">
    <span class="dashboard__main__content__other-projects__title">
      Ver proyecto
    </span>
    <div class="dashboard__main__content__other-projects__projects">
      <a href="/docente/proyectos/proyecto" class="dashboard__main__content__other-projects__projects__project">
        1
      </a>
      <a href="/docente/proyectos/proyecto"
        class="
          dashboard__main__content__other-projects__projects__project
          dashboard__main__content__other-projects__projects__project--disabled"
      >
        2
      </a>
      <a href="/docente/proyectos/proyecto"
        class="
          dashboard__main__content__other-projects__projects__project
          dashboard__main__content__other-projects__projects__project--disabled"
      >
        3
      </a>
    </div>
  </div-->
</x-app-layout>
