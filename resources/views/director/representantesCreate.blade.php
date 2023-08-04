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
  @if($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
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
        required
        type="text"
        name="nombre_reprecentante"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
      required
        name="apellido_reprecentante"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
      required
        name="fecha_nacimiento_reprecentante"
        type="date"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
      required
      name="cedula_reprecentante"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
      required
      name="email_reprecentante"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    
    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
      required
      name="password_reprecentante"
        type="password"
        class="dashboard__main__content__form__label__input"
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Direccion:
      <input
      required
        name="direccion_reprecentante"
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
          required
            type="text"
            name="representado[0][name]"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Apellido:
          <input
          required
            name="representado[0][apellido]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Fecha de nacimiento:
          <input
          required
            name="representado[0][fecha_nacimiento]"
            type="date"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Lugar de nacimiento:
          <input
          required
            name="representado[0][lugar_nacimiento]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Dirección:
          <input
          required
            name="representado[0][direccion]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Cédula escolar:
          <input
          required
            name="representado[0][cedula]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>

        <label class="dashboard__main__content__form__label">
          Grado

          <select name="representado[0][grado]">
            @foreach( $grado as $g)
              <option value="{{ $g->id }}" >{{ $g->grado }}</option>
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
<style>
  .d{
    font-weight: ;
  }
</style>