@php
  $students = [
    [
      'firstname' => 'Alejandro',
      'lastname' => 'Gomez',
      'birthdate' => '19/07/2013'
    ],
    [
      'firstname' => 'Ana',
      'lastname' => 'Bello',
      'birthdate' => '20/03/2012'
    ]
  ];
@endphp

<x-app-layout>
  <h2 class="dashboard__main__content__welcome-msg">
    Ver desempeño estudiantil
  </h2>
  <div class="dashboard__main__content__details">
    <div class="dashboard__main__content__details__content">
      <p class="dashboard__main__content__details__content__text">
        4to grado - Sección: A
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
    @foreach($students as $user)
    <tr class="users-table__row">
      <td class="users-table__row__data">{{ $user['firstname'] }}</td>
      <td class="users-table__row__data">{{ $user['lastname'] }}</td>
      <td class="users-table__row__data">{{ $user['birthdate'] }}</td>
      <td class="users-table__row__data">
        <a
          class="button"
          href="/docente/estudiante"
        >
          Ver estudiante
        </a>
      </td>
    </tr>
    @endforeach
  </table>
</x-app-layout>
