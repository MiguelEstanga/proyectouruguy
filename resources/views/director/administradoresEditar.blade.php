
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Editar Administrador
  </p>
  <form  action="{{ route('director_administrador.store') }}"  method="post" class="dashboard__main__content__form">
    @csrf
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador['nombre'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador['apellido'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
        name="email"
        type="email"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador['email'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        id="fecha_nacimiento_input"
        type="date"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador['fecha_nacimiento'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador['direccion'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
        name="cedula"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador['cedula'] }}"
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
        name="password"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador['password'] }}"
      />
    </label>

    <div class="switch-block">
      <span>Habilitado: {{ $administrador['habilitado'] ? 'Si' : 'No' }}</span>
      <label class="switch">
        <input
          type="checkbox"
          disabled
          @if ($administrador['habilitado'])
          checked="checked"
          @endif
        >
        <span class="slider round"></span>
      </label>
    </div>
    <button class="dashboard__main__content__form__btn">
      Actualizar administrador
    </button>
  </form>

  <div class="dashboard__main__content__student-links student-links">
    <!-- eliminar administrador -->
    <form action="{{ route('director.busqueda') }}">
      <button class="dashboard__main__content__search__button">Eliminar administrador</button>
    </form>
    <!-- eliminar administrador -->
    <form action="{{ route('director.busqueda') }}">
      <button class="dashboard__main__content__search__button">Inhabilitar administrador</button>
    </form>
  </div>
</x-app-layout>
