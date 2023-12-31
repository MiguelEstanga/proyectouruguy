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
    <form  action="{{ route('director.store') }}"  method="post" class="dashboard__data__content__form">
      @csrf
      <label class="dashboard__data__content__form__label">
        Nombre:
        <input
          type="text"
          name="nombre"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Apellido:
        <input
          name="apellido"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Fecha de nacimiento:
        <input
          name="fecha_nacimiento"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Cédula:
        <input
        name="cedula"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Email:
        <input
        name="email"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Rol:
        <select name="role">
          @foreach($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>
          @endforeach
        </select>
      </label>
      <label class="dashboard__data__content__form__label">
        Contraseña:
        <input
        name="password"
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
