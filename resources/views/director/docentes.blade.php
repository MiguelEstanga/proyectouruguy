
<x-app-layout>
  <div class="dashboard__data__content">
    <p class="dashboard__data__content__section-title">
      Gestionar docentes
    </p>
    <div class="dashboard__data__content__search">
      <form action="{{ route('director.busqueda') }}">
      <input
        type="search"
        name="nombre"
        class="dashboard__data__content__search__input"
        placeholder="Buscar por nombre"
      />
      <button class="dashboard__data__content__search__button">Buscar</button>
      </form>
    </div>
    <table class="dashboard__data__content__users">
      <tr class="dashboard__data__content__users__headers">
        <th class="dashboard__data__content__users__headers__header">Nombre</th>
        <th class="dashboard__data__content__users__headers__header">Cedula</th>
        <th class="dashboard__data__content__users__headers__header">Fecha de nacimiento</th>
        <th class="dashboard__data__content__users__headers__header">Grado</th>
        <th class="dashboard__data__content__users__headers__header">Seccion</th>
        <th class="dashboard__data__content__users__headers__header">Habilitado</th>
        <th class="dashboard__data__content__users__headers__header">Acción</th>
      </tr>
      @if($profesores != 'null')



      @foreach($profesores as $profesor)
      <tr class="dashboard__data__content__users__row">
        <td class="dashboard__data__content__users__row__data">{{ $profesor->nombre }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $profesor->cedula}}</td>
        <td class="dashboard__data__content__users__row__data">{{ $profesor->fecha_nacimiento }}</td>
        <td class="dashboard__data__content__users__row__data">1</td>
        <td class="dashboard__data__content__users__row__data">{{ $profesor->seccion->seccion }}</td>
        <td class="dashboard__data__content__users__row__data">
          {{ $profesor->seccion->habilitada->habilitado}}
        </td>
        <td class="dashboard__data__content__users__row__data">
          <form 
            method="post" 
            action="{{ route('director.destroy' , $profesor->id) }}">
            @method('delete')
            @csrf

          <button class="dashboard__data__content__users__row__data__delete">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
      @endif
    </table>
    <a  href="{{ route('director.create') }}" class="dashboard__data__content__add-user-btn">
      Agregar docente
    </a>
    <div class="dashboard__data__content__user-stats">
      <div class="dashboard__data__content__user-stats__total">
        <span class="dashboard__data__content__user-stats__total__label">Docentes actuales:</span>
        <span class="dashboard__data__content__user-stats__total__value">
          
          @if($profesores != 'null')
            {{ count($profesores) }}
          @endif

        </span>
      </div>
      <div class="dashboard__data__content__user-stats__total">
        <span class="dashboard__data__content__user-stats__total__label">Docentes sin seccion:</span>
        <span class="dashboard__data__content__user-stats__total__value">3</span>
      </div>
    </div>
  </div>
</x-app-layout>
