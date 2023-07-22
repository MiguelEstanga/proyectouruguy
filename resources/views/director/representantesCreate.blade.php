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
    Registrar Representante
  </p>
  <form
    action="{{ route('director_representante.store') }}"
    method="post"
    class="dashboard__main__content__form dashboard__main__content__form--representante"
  >
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
        type="date"
        class="dashboard__main__content__form__label__input"
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
      Email:
      <input
      name="email"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    
    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
      name="password"
        type="password"
        class="dashboard__main__content__form__label__input"
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Direccion:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <div class="dashboard__main__content__form__separator"></div>
    <h3 class="dashboard__main__content__form__full-width">Representado(s)</h3>

    <div class="dashboard__main__content__form__representados-list">
      <div class="dashboard__main__content__form__representados-list__datos-representado">
        <h3 class="dashboard__main__content__form__representados-list__datos-representado__num">
          Representado 1:
        </h3>
        <label class="dashboard__main__content__form__label">
          Nombre:
          <input
            type="text"
            name="representado[0][name]"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Apellido:
          <input
            name="representado[0][apellido]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Fecha de nacimiento:
          <input
            name="representado[0][fecha_nacimiento]"
            type="date"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Lugar de nacimiento:
          <input
            name="representado[0][lugar_nacimiento]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Dirección:
          <input
            name="representado[0][direccion]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Cédula escolar:
          <input
            name="representado[0][cedula]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>

        <label class="dashboard__main__content__form__label">
          Grado
          <select name="representado[0][id_grado]">
            @foreach($grados as $grado)
              <option value="{{ $grado['id'] }}">{{ $grado['label'] }}</option>
            @endforeach
          </select>
        </label>

        <label class="dashboard__main__content__form__label">
          Sección
          <select name="representado[0][id_seccion]">
            @foreach($secciones as $seccion)
              <option value="{{ $seccion['id'] }}">{{ $seccion['seccion'] }}</option>
            @endforeach
          </select>
        </label>

      </div>
    </div>
    <button class="dashboard__main__content__form__add-another-student" type="button">
      Agregar otro representado
    </button>

    <button class="dashboard__main__content__form__btn">
      Registrar representante
    </button>
  </form>
</x-app-layout>
