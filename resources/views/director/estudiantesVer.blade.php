
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Gestionar estudiantes
  </p>
  <div class="dashboard__main__content__search">
    <form action="{{ route('director.busqueda') }}">
    <input
      type="search"
      name="nombre"
      class="dashboard__main__content__search__input"
      placeholder="Buscar por nombre"
    />
    <button class="dashboard__main__content__search__button">Buscar</button>
    </form>
  </div>
  <div class="dashboard__main__content__filtros">
    <form action="{{ route('estudiante.busqueda') }}">
      <label class="dashboard__main__content__form__label">
        Grado
        <select name="id_grado">
          @foreach($grados as $grado)
            <option value="{{ $grado['id'] }}">{{ $grado['label'] }}</option>
          @endforeach
        </select>
      </label>
      <label class="dashboard__main__content__form__label">
        Sección
        <select name="id_seccion"m>
          @foreach($secciones as $seccion)
            <option value="{{ $seccion['id'] }}">{{ $seccion['seccion'] }}</option>
          @endforeach
        </select>
      </label>
      <button class="dashboard__main__content__search__button">Filtrar por seccion</button>
    </form>
  </div>
  <table class="dashboard__main__content__users">
    <tr class="dashboard__main__content__users__headers">
      <th class="dashboard__main__content__users__headers__header">Nombre</th>
      <th class="dashboard__main__content__users__headers__header">Cedula</th>
      <th class="dashboard__main__content__users__headers__header">Fecha de nacimiento</th>
      <th class="dashboard__main__content__users__headers__header">Grado</th>
      <th class="dashboard__main__content__users__headers__header">Seccion</th>
      <th class="dashboard__main__content__users__headers__header">Acción</th>
    </tr>
    @if($estudiantes != 'null')
          @foreach($estudiantes as $estudiante)
          <tr class="dashboard__main__content__users__row">
            <td class="dashboard__main__content__users__row__data"> {{ $estudiante->nombre1 }} </td>
            <td class="dashboard__main__content__users__row__data">{{ $estudiante->usuario->cedula }}</td>
            <td class="dashboard__main__content__users__row__data">{{ $estudiante->usuario->fecha_nacimiento }}</td>
            <td class="dashboard__main__content__users__row__data">1</td>
            <td class="dashboard__main__content__users__row__data">{{ $estudiante->id  }}</td>
            <td class="dashboard__main__content__users__row__data">
                <form 
                  method="post" 
                  action="{{ route('director_estudiante.destroy' , $estudiante) }}">
                  @method('delete')
                  @csrf

                <button class="dashboard__main__content__users__row__data__delete">Eliminar</button>
              </form>
            </td>
            <td>
               <a href="{{ route('director_estudiante.edit' , $estudiante->usuario->id ) }}">
                 Editar {{ $estudiante->usuario->id }}
               </a>
            </td>  
          </tr>
        @endforeach
    @endif

  </table>
  <a  href="{{ route('director_estudiante.create') }}" class="dashboard__main__content__add-user-btn">
    Agregar estudiante
  </a>
  <div class="dashboard__main__content__user-stats">
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Estudiantes actuales:</span>
      <span class="dashboard__main__content__user-stats__total__value">{{ count($estudiantes) }}</span>
    </div>
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Estudiantes sin seccion:</span>
      <span class="dashboard__main__content__user-stats__total__value">3</span>
    </div>
  </div>
  <style>
    .menu{
      font-family: ;
    }
  </style>
</x-app-layout>
