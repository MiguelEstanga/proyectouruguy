@php
  $users = [
    [
      'name' => 'Juan Perez',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'alumnos' => 1
    ],
    [
      'name' => 'Juan Perez',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'alumnos' => 1
    ],
    [
      'name' => 'Juan Perez',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'alumnos' => 1
    ],
    [
      'name' => 'Juan Perez',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'alumnos' => 2
    ],
    [
      'name' => 'Juan Perez',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'alumnos' => 1
    ],
  ];
@endphp


<x-app-layout>
  <div class="dashboard__data__content">
    <p class="dashboard__data__content__section-title">
      Gestionar administradores
    </p>
    <div class="dashboard__data__content__search">
      <input
        type="search"
        class="dashboard__data__content__search__input"
        placeholder="Buscar por nombre"
      />
      <button class="dashboard__data__content__search__button">Buscar</button>
    </div>
    <table class="dashboard__data__content__users">
      <tr class="dashboard__data__content__users__headers">
        <th class="dashboard__data__content__users__headers__header">Nombre</th>
        <th class="dashboard__data__content__users__headers__header">Cedula</th>
        <th class="dashboard__data__content__users__headers__header">Fecha de nacimiento</th>
        <th class="dashboard__data__content__users__headers__header">Alumnos</th>
        <th class="dashboard__data__content__users__headers__header">Acción</th>
      </tr>
      @foreach($users as $user)
      <tr class="dashboard__data__content__users__row">
        <td class="dashboard__data__content__users__row__data">{{ $user['name'] }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $user['id'] }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $user['birthdate'] }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $user['alumnos'] }}</td>
        <td class="dashboard__data__content__users__row__data"><button class="dashboard__data__content__users__row__data__delete">Eliminar</button></td>
      </tr>
      @endforeach
    </table>
    <button class="dashboard__data__content__add-user-btn">
      Agregar administrador
    </button>
    <div class="dashboard__data__content__user-stats">
      <div class="dashboard__data__content__user-stats__total">
        <span class="dashboard__data__content__user-stats__total__label">Administradores actuales:</span>
        <span class="dashboard__data__content__user-stats__total__value">27</span>
      </div>
      <div class="dashboard__data__content__user-stats__total">
        <span class="dashboard__data__content__user-stats__total__label">Administradores sin seccion:</span>
        <span class="dashboard__data__content__user-stats__total__value">3</span>
      </div>
    </div>
  </div>
</x-app-layout>
