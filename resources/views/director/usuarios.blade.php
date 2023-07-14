@php
  $users = [
    [
      'name' => 'Juan Perez',
      'grade' => '',
      'section' => '',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => true,
      'role' => 'Administrador'
    ],
    [
      'name' => 'Juan Perez',
      'grade' => 'Primero',
      'section' => 'A',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => true,
      'role' => 'Docente'
    ],
    [
      'name' => 'Juan Perez',
      'grade' => 'Primero',
      'section' => 'A',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => true,
      'role' => 'Docente'
    ],
    [
      'name' => 'Juan Perez',
      'grade' => 'Primero',
      'section' => 'A',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => false,
      'role' => 'Docente'
    ],
    [
      'name' => 'Juan Perez',
      'grade' => '',
      'section' => '',
      'id' => '19205441',
      'birthdate' => '19/junio/1984',
      'active' => true,
      'role' => 'Representante'
    ]
  ];
@endphp

<x-app-layout>
  <div class="dashboard__data__content">
    <p class="dashboard__data__content__section-title">
      Gestionar usuarios
    </p>
    <div class="dashboard__data__content__details">
      <div class="dashboard__data__content__details__content">
        <p class="dashboard__data__content__details__content__text">
          Registrar usuario
        </p>
      </div>
    </div>
    <form class="dashboard__data__content__form">
      <label class="dashboard__data__content__form__label">
        Nombre:
        <input
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Apellido:
        <input
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Fecha de nacimiento:
        <input
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Cédula:
        <input
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Rol:
        <select>
          <option value="admin">Administrador</option>
          <option value="docente">Docente</option>
          <option value="representante">Representante</option>
        </select>
      </label>
      <label class="dashboard__data__content__form__label">
        Contraseña:
        <input
          type="password"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <button class="dashboard__data__content__form__btn">
        Registrar usuario
      </button>
    </form>
  </div>
</x-app-layout>
