
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Editar ficha de Docente
  </p>
  <form  action="{{ route('director_docente.store') }}"  method="post" class="dashboard__main__content__form">
    @csrf
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
        value="{{ $docente['nombre'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $docente['apellido'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
        name="email"
        type="email"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        id="fecha_nacimiento_input"
        type="date"
        class="dashboard__main__content__form__label__input"
        value="{{ $docente['fecha_nacimiento'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $docente['direccion'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
        name="cedula"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Grado
      <select name="id_grado" value="">
        @foreach($grados as $grado)
          <option
            value="{{ $grado['id'] }}"
            @if ($grado['id'] == $docente['grado']['id'])
            selected="selected"
            @endif
          >{{ $grado['label'] }}</option>
        @endforeach
      </select>
    </label>

    <label class="dashboard__main__content__form__label">
      Sección
      <select name="id_seccion"m>
        @foreach($secciones as $seccion)
          <option
            value="{{ $seccion['id'] }}"
            @if ($seccion['id'] == $docente['seccion']['id'])
            selected="selected"
            @endif
          >{{ $seccion['seccion'] }}</option>
        @endforeach
      </select>
    </label>

    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
        name="password"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>

    <div class="switch-block">
      <span>Habilitado: {{ $docente['habilitado'] ? 'Si' : 'No' }}</span>
      <label class="switch">
        <input
          type="checkbox"
          disabled
          @if ($docente['habilitado'])
          checked="checked"
          @endif
        >
        <span class="slider round"></span>
      </label>
    </div>
    <button class="dashboard__main__content__form__btn">
      Actualizar docente
    </button>
  </form>

  <div class="dashboard__main__content__student-links student-links">
    <!-- eliminar docente -->
    <form action="{{ route('director.busqueda') }}">
      <button class="dashboard__main__content__search__button">Eliminar docente</button>
    </form>
    <!-- eliminar docente -->
    <form action="{{ route('director.busqueda') }}">
      <button class="dashboard__main__content__search__button">Inhabilitar docente</button>
    </form>
  </div>
</x-app-layout>
