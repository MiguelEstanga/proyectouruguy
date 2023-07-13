@php
  $users = [
    [
      'name' => 'Juan Perez',
      'grade' => 'Primero',
      'section' => 'A',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => true
    ],
    [
      'name' => 'Juan Perez',
      'grade' => 'Primero',
      'section' => 'A',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => true
    ],
    [
      'name' => 'Juan Perez',
      'grade' => 'Primero',
      'section' => 'A',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => true
    ],
    [
      'name' => 'Juan Perez',
      'grade' => 'Primero',
      'section' => 'A',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => false
    ],
    [
      'name' => 'Juan Perez',
      'grade' => 'Primero',
      'section' => 'A',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => true
    ],
  ];
@endphp

<x-app-layout>
  <div class="dashboard__data__content">
    <p class="dashboard__data__content__section-title">
      Gestionar docentes
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
        <th class="dashboard__data__content__users__headers__header">Grado</th>
        <th class="dashboard__data__content__users__headers__header">Seccion</th>
        <th class="dashboard__data__content__users__headers__header">Habilitado</th>
        <th class="dashboard__data__content__users__headers__header">Acción</th>
      </tr>
      @foreach($users as $user)
      <tr class="dashboard__data__content__users__row">
        <td class="dashboard__data__content__users__row__data">{{ $user['name'] }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $user['id'] }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $user['birthdate'] }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $user['grade'] }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $user['section'] }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $user['active'] ? 'Si' : 'No' }}</td>
        <td class="dashboard__data__content__users__row__data"><button class="dashboard__data__content__users__row__data__delete">Eliminar</button></td>
      </tr>
      @endforeach
    </table>
    <button class="dashboard__data__content__add-user-btn">
      Agregar docente
    </button>
    <div class="dashboard__data__content__user-stats">
      <div class="dashboard__data__content__user-stats__total">
        <span class="dashboard__data__content__user-stats__total__label">Docentes actuales:</span>
        <span class="dashboard__data__content__user-stats__total__value">27</span>
      </div>
      <div class="dashboard__data__content__user-stats__total">
        <span class="dashboard__data__content__user-stats__total__label">Docentes sin seccion:</span>
        <span class="dashboard__data__content__user-stats__total__value">3</span>
      </div>
    </div>
  </div>
</x-app-layout>
