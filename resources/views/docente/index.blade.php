
<x-app-layout>
  <h2 class="dashboard__main__content__welcome-msg">
    Ver desempeño estudiantil
  </h2>
  @if(session('mensage'))
    <h2 class="alert alert-success" >
        {{ session('mensage') }}
    </h2>
  @endif
  <div class="dashboard__main__content__details">
    <div class="dashboard__main__content__details__content">
      <p class="dashboard__main__content__details__content__text">

        {{ $profesor->grado->grado }} grado -
         Sección: {{ $profesor->seccion->seccion }} 
        
        
      </p>
      <a class="button button--big" href="/docente/proyectos">
        Ver proyectos
      </a>
    </div>
  </div>
  <table class="users-table">
    <tr class="users-table__headers">
      <th class="users-table__headers__header">Nombre</th>
      <th class="users-table__headers__header">Apellido</th>
      <th class="users-table__headers__header">Fecha de nacimiento</th>
      <th class="users-table__headers__header">Acción</th>
    </tr>
    @foreach($estudiantes as $user)
    <tr class="users-table__row">
      <td class="users-table__row__data">{{ $user['nombre1'] }}</td>
      <td class="users-table__row__data">{{ $user['apellido'] }}</td>
      <td class="users-table__row__data">{{ $user->usuario->fecha_nacimiento }}</td>
      <td class="users-table__row__data">
        <a
          class="button"
          
          href="{{ route('docente.evaluar' , $user['id']) }}"
        >
          Ver estudiante
        </a>
      </td>
    </tr>
    @endforeach
  </table>
</x-app-layout>
