
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Editar perfil de representante
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
        value="{{ $representante['nombre'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $representante['apellido'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        type="date"
        class="dashboard__main__content__form__label__input"
        value="{{ $representante['fecha_nacimiento'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
      name="cedula"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $representante['cedula'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
      name="email"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $representante['email'] }}"
      />
    </label>
    
    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
      name="password"
        type="password"
        class="dashboard__main__content__form__label__input"
        value="{{ $representante['password'] }}"
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Direccion:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $representante['direccion'] }}"
      />
    </label>

    <div class="dashboard__main__content__form__separator"></div>
    <h3 class="dashboard__main__content__form__full-width">Representado(s)</h3>

    <div class="dashboard__main__content__form__representados-list">
      @foreach ($representante['representados'] as $representado)
      <div class="dashboard__main__content__form__representados-list__datos-representado">
        <h3 class="dashboard__main__content__form__representados-list__datos-representado__num">
          Representado {{ ($loop->index) + 1 }}:
        </h3>
        <label class="dashboard__main__content__form__label">
          Nombre:
          <input
            type="text"
            name="representado[{{$loop->index}}][name]"
            class="dashboard__main__content__form__label__input"
            value="{{ $representado['nombre'] }}"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Apellido:
          <input
            name="representado[{{$loop->index}}][apellido]"
            type="text"
            class="dashboard__main__content__form__label__input"
            value="{{ $representado['apellido'] }}"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Fecha de nacimiento:
          <input
            name="representado[{{$loop->index}}][fecha_nacimiento]"
            type="date"
            class="dashboard__main__content__form__label__input"
            value="{{ $representado['fecha_nacimiento'] }}"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Lugar de nacimiento:
          <input
            name="representado[{{$loop->index}}][lugar_nacimiento]"
            type="text"
            class="dashboard__main__content__form__label__input"
            value="{{ $representado['lugar_nacimiento'] }}"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Dirección:
          <input
            name="representado[{{$loop->index}}][direccion]"
            type="text"
            class="dashboard__main__content__form__label__input"
            value="{{ $representado['direccion'] }}"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Cédula escolar:
          <input
            name="representado[{{$loop->index}}][cedula_escolar]"
            type="text"
            class="dashboard__main__content__form__label__input"
            value="{{ $representado['cedula_escolar'] }}"
          />
        </label>

        <label class="dashboard__main__content__form__label">
          Grado
          <select name="representado[{{$loop->index}}][id_grado]">
            @foreach($grados as $grado)
              <option
                value="{{ $grado['id'] }}"
                @if ($grado['id'] == $representado['grado']['id'])
                selected="selected"
                @endif
              >{{ $grado['label'] }}</option>
            @endforeach
          </select>
        </label>

        <label class="dashboard__main__content__form__label">
          Sección
          <select name="representado[{{$loop->index}}][id_seccion]">
            @foreach($secciones as $seccion)
              <option
                value="{{ $seccion['id'] }}"
                @if ($seccion['id'] == $representado['seccion']['id'])
                selected="selected"
                @endif
              >{{ $seccion['seccion'] }}</option>
            @endforeach
          </select>
        </label>
      </div>
      @endforeach
    </div>
    <button class="dashboard__main__content__form__add-another-student" type="button">
      Agregar otro representado
    </button>

    <button class="dashboard__main__content__form__btn">
      Actualizar representante
    </button>
  </form>
</x-app-layout>
