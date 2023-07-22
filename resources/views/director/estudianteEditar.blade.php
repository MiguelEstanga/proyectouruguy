
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Editar ficha de Estudiante
  </p>
  <form  action="{{ route('director_estudiante.store') }}"  method="post" class="dashboard__main__content__form">
    @csrf
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['nombre'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['apellido'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        id="fecha_nacimiento_input"
        type="date"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['fecha_nacimiento'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Lugar de nacimiento:
      <input
        name="lugar_nacimiento"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['lugar_nacimiento'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['direccion'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula escolar:
      <input
        name="cedula_escolar"
        type="text"
        id="cedula_escolar_input"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['cedula_escolar'] }}"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Grado
      <select name="id_grado" value="">
        @foreach($grados as $grado)
          <option
            value="{{ $grado['id'] }}"
            @if ($grado['id'] == $estudiante['grado']['id'])
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
            @if ($seccion['id'] == $estudiante['seccion']['id'])
            selected="selected"
            @endif
          >{{ $seccion['seccion'] }}</option>
        @endforeach
      </select>
    </label>

    <label class="dashboard__main__content__form__label">
      Cédula Representante:
      <input
        id="cedula_representante_input"
        name="cedula_reprecentante"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['cedula_representante'] }}"
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Nombre del Representante:
      <input
        name="nombre_reprecentante"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['nombre_representante'] }}"
        disabled
      />
    </label>
    <button class="dashboard__main__content__form__btn">
      Actualizar estudiante
    </button>
  </form>

  <div class="dashboard__main__content__student-links student-links">
    <a
      href="/archivopdf-informe-descriptivo"
      class="student-links__link"
    >
      Informe descriptivo
    </a>
    <a
      href="/archivopdf-rasgos-personales"
      class="student-links__link"
    >
      Rasgos personales
    </a>
    <a
      href="/archivopdf-boletin"
      class="student-links__link"
    >
      Boletin
    </a>
    <a
      href="/archivopdf-constancia-de-estudios"
      class="student-links__link"
    >
      Constancia de estudios
    </a>
  </div>
</x-app-layout>
