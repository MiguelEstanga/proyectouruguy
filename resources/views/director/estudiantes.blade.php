
<x-app-layout>
  @if(session('mensage'))
    <h2 class="alert alert-success" >
        {{ session('mensage') }}
    </h2>
  @endif
  <p class="dashboard__main__content__section-title">
    Gestionar estudiantes
  </p>
  <div class="dashboard__main__content__search">
    <form action="{{ route('director_estudiante_busqueda') }}">
    <input
      type="search"
      name="cedula" 
      class="dashboard__main__content__search__input"
      placeholder="Buscar por cédula escolar"
    />
    <button class="dashboard__main__content__search__button">Buscar</button>
    </form>
  </div>
   <div class="dashboard__main__content__search">
    <form action="{{ route('director_estudiante_single') }}">
      
      <select name="seccion" id="">
         @foreach($secciones as $seccion) 
              <option value="{{ $seccion->id }}">
                {{ $seccion->seccion }}
              </option>
         @endforeach
      </select>
      <select name="grado" >
        @foreach($grados as $grado)
          <option value="{{ $grado->id }}">{{ $grado->grado }}</option>
        @endforeach
      </select>
      <button class="dashboard__main__content__search__button">Buscar</button>
    </form>
  </div>
  <table class="table"  >
    <tr class="dashboard__main__content__users__headers">
      <th class="dashboard__main__content__users__headers__header">Nombre</th>
      <th class="dashboard__main__content__users__headers__header">Cédula escolar</th>
      <th class="dashboard__main__content__users__headers__header">Fecha de nacimiento</th>
      <th class="dashboard__main__content__users__headers__header">Grado</th>
      <th class="dashboard__main__content__users__headers__header">Sección</th>
      <th class="dashboard__main__content__users__headers__header">Acción</th>
    </tr>
    @if($estudiantes != 'null')
          @foreach($estudiantes as $estudiante)
          <tr class="dashboard__main__content__users__row"  >
            <td class="dashboard__main__content__users__row__data"> 
              {{ $estudiante->nombre1 }}
               </td>
            <td class="dashboard__main__content__users__row__data">
              {{ $estudiante->usuario->cedula }}
            </td>
            <td class="dashboard__main__content__users__row__data">
              {{ $estudiante->usuario->fecha_nacimiento }}
            </td>
            <td class="dashboard__main__content__users__row__data">
              {{ $estudiante->grado_id->grado }}
            </td>
            <td class="dashboard__main__content__users__row__data">
              {{ $estudiante->seccion_id->seccion  }}

            </td>
          
             <td class="dashboard__main__content__users__row__data" >
               <a 
               class="btn btn-success" 
               href="{{ route('director_estudiante.edit' , $estudiante->usuario->id ) }}">
                 Editar 
               </a>

             </td> 
          </tr>
        @endforeach
    @endif

  </table>
  <a  href="{{ route('director_representante.create') }}" class="dashboard__main__content__add-user-btn">
    Agregar estudiante   
  </a>
  <div class="dashboard__main__content__user-stats">
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Estudiantes actuales:</span>
      <span class="dashboard__main__content__user-stats__total__value">{{ count($estudiantes) }}</span>
    </div>
    
  </div>
  <style>
    .menu{
      font-family: ;
    }

 
  </style>
</x-app-layout>
