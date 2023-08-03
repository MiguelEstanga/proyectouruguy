@php
  $grados = [
    ['label' => 'Primero', 'id' => 1],
    ['label' => 'Segundo', 'id' => 2],
    ['label' => 'Tercero', 'id' => 3],
    ['label' => 'Cuarto', 'id' => 4],
    ['label' => 'Quinto', 'id' => 5],
    ['label' => 'Sexto', 'id' => 6]
  ];
@endphp

<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Registrar Estudiante
  </p>
  <form  action="{{ route('director_estudiante.store') }}"  method="post" class="dashboard__main__content__form">
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
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        id="fecha_nacimiento_input"
        type="date"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Lugar de nacimiento:
      <input
        name="lugar_nacimiento"
        type="text"
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
      Cédula escolar:
      <input
        name="cedula_escolar"
        type="text"
        id="cedula_escolar_input"
        class="dashboard__main__content__form__label__input"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Grado
      <select name="id_grado">
        @foreach($grados as $grado)
          <option value="{{ $grado['id'] }}">{{ $grado['grado'] }}</option>
        @endforeach
      </select>
    </label>

    <label class="dashboard__main__content__form__label">
      Sección
      <select name="id_seccion" >
        @foreach($secciones as $seccion)
          <option value="{{ $seccion->id }}">{{ $seccion['seccion'] }}</option>
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
      />
    </label>
    <button class="dashboard__main__content__form__btn">
      Registrar estudiante
    </button>
  </form>
</x-app-layout>
