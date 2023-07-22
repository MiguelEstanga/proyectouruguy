
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Registrar Docente
  </p>
  <form  action="{{ route('director_docente.store') }}"  method="post" class="dashboard__main__content__form">
    @csrf
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
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
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
        name="cedula"
        type="text"
        id="cedula"
        class="dashboard__main__content__form__label__input"
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
        name="password"
        type="text"
        id="password"
        class="dashboard__main__content__form__label__input"
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Grado
      <select name="id_grado">
        @foreach($grados as $grado)
          <option value="{{ $grado['id'] }}">{{ $grado['label'] }}</option>
        @endforeach
      </select>
    </label>

    <label class="dashboard__main__content__form__label">
      Sección
      <select name="id_seccion"m>
        @foreach($secciones as $seccion)
          <option value="{{ $seccion['id'] }}">{{ $seccion['seccion'] }}</option>
        @endforeach
      </select>
    </label>

    <button class="dashboard__main__content__form__btn">
      Registrar docente
    </button>
  </form>
</x-app-layout>
