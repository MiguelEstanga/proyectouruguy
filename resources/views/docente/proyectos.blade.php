@php

@endphp

<x-app-layout>
  <h2 class="dashboard__main__content__welcome-msg">
    Evaluar: Ver o modificar proyecto
  </h2>
  <div class="dashboard__main__content__details">
    <div class="dashboard__main__content__details__content">
      <p class="dashboard__main__content__details__content__text">
       
       {{ Auth::user()->profesor[0]->grado_id->grado}} Grado -
       Sección {{ Auth::user()->profesor[0]->seccion->seccion}} 
         
      </p> 
    </div>
  </div>

@if(  count($proyectos) > 0 )
 
  @foreach(Auth::user()->profesor[0]->proyectos  as $proyecto)
   <div 

    class="dashboard__main__content__current-project">
    <div

      class="dashboard__main__content__current-project__details">
      <span 
        style="background-color: #2471A3 ; color:#ffff;"
        class="dashboard__main__content__current-project__details__title">
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
 
  @if($validate ?? false)
    <h2 class="btn btn-success" >
      Ya se creó el proyecto de este lapso
    </h2>
  @else
    <a
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
      href="{{ route('proyecto.create') }}">
       Crear proyecto del lapso
   </a>
  @endif
   <a
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
      href="{{ route('proyecto.create') }}">
       Crear proyecto del lapso
   </a>
@else
 <h2>
     Todos los proyectos de este periodo han sido creados
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
