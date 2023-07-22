
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Gestionar administradores
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
  <table class="dashboard__main__content__users">
    <tr class="dashboard__main__content__users__headers">
      <th class="dashboard__main__content__users__headers__header">Nombre</th>
      <th class="dashboard__main__content__users__headers__header">Cedula</th>
      <th class="dashboard__main__content__users__headers__header">Fecha de nacimiento</th>
      <th class="dashboard__main__content__users__headers__header">Acción</th>
    </tr>
    @if($administradores != 'null')
          @foreach($administradores as $administrador)
          <tr class="dashboard__main__content__users__row">
            <td class="dashboard__main__content__users__row__data"> {{ $administrador->nombre1 }} </td>
            <td class="dashboard__main__content__users__row__data">{{ $administrador->usuario->cedula }}</td>
            <td class="dashboard__main__content__users__row__data">{{ $administrador->usuario->fecha_nacimiento }}</td>
            <td class="dashboard__main__content__users__row__data">
                <form 
                  method="post" 
                  action="{{ route('director_estudiante.destroy' , $administrador) }}">
                  @method('delete')
                  @csrf

                <button class="dashboard__main__content__users__row__data__delete">Eliminar</button>
              </form>
          </tr>
        @endforeach
    @endif

  </table>
  <a  href="{{ route('director_estudiante.create') }}" class="dashboard__main__content__add-user-btn">
    Agregar docente
  </a>
  <div class="dashboard__main__content__user-stats">
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Administradores actuales:</span>
      <span class="dashboard__main__content__user-stats__total__value">{{ count($administradores) }}</span>
    </div>
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Administradores inhabilitados:</span>
      <span class="dashboard__main__content__user-stats__total__value">0</span>
    </div>
  </div>
  <style>
    .menu{
      font-family: ;
    }
  </style>
</x-app-layout>
