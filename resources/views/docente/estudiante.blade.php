
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Evaluar Estudiante
  </p>
  <div class="ficha-estudiante">
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['nombre'] }}"
        disabled
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['apellido'] }}"
        disabled
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
        disabled
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Lugar de nacimiento:
      <input
        name="lugar_nacimiento"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['lugar_nacimiento'] }}"
        disabled
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['direccion'] }}"
        disabled
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
      <input
        name="cedula_escolar"
        type="text"
        id="cedula_escolar_input"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['grado']['label'] }}"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Sección
      <input
        name="cedula_escolar"
        type="text"
        id="cedula_escolar_input"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['seccion']['seccion'] }}"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Cédula Representante:
      <input
        id="cedula_representante_input"
        name="cedula_reprecentante"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante['cedula_representante'] }}"
        disabled
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
  </div>

  <div class="dashboard__main__content__student-links student-links">
    <a
      href="/archivopdf-informe-descriptivo"
      class="student-links__link"
    >
      Cargar informe
    </a>
    <a
      href="/archivopdf-rasgos-personales"
      class="student-links__link"
    >
      Cargar rasgos personales
    </a>
    <a
      href="/archivopdf-boletin"
      class="student-links__link"
    >
      Cargar literal
    </a>
  </div>
</x-app-layout>
