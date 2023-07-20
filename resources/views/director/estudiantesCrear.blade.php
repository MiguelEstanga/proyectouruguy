

<x-app-layout>
  <div class="dashboard__data__content">
    <p class="dashboard__data__content__section-title">
      Registrar Estudiante
    </p>
    <div class="dashboard__data__content__details">
      <div class="dashboard__data__content__details__content">
        <p class="dashboard__data__content__details__content__text">
          Registrar Estudiante
        </p>
      </div>
    </div>
    <form  action="{{ route('director_estudiante.store') }}"  method="post" class="dashboard__data__content__form">
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
        Contraseña:
        <input
        name="password"
          type="password"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Seccion
            <select name="id_seccion">
          @foreach($secciones as $seccion)
            <option value="{{ $seccion->id }}">{{ $seccion->seccion }}</option>
          @endforeach
        </select>
      </label>



         <label class="dashboard__data__content__form__label">
        Nombre Reprecentante:
        <input
          type="text"
          name="nombre_reprecentante"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Apellido Reprecentante:
        <input
          name="apellido_reprecentante"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Fecha de nacimiento Del Reprecentante:
        <input
          name="fecha_nacimiento_Reprecentante"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Cédula Reprecentante:
        <input
        name="cedula_reprecentante"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
      <label class="dashboard__data__content__form__label">
        Email Reprecentante :
        <input
        name="email_reprecentante"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>
     
      <label class="dashboard__data__content__form__label">
        Contraseña Rprecentante:
        <input
        name="password"
          type="password"
          class="dashboard__data__content__form__label__input"
        />
      </label>

      <label class="dashboard__data__content__form__label">
        Domicilio:
        <input
        name="domicilio"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>

      <label class="dashboard__data__content__form__label">
        localidad:
        <input
        name="localidad"
          type="text"
          class="dashboard__data__content__form__label__input"
        />
      </label>

    
      <button class="dashboard__data__content__form__btn">
        Registrar usuario
      </button>
    </form>
  </div>
</x-app-layout>
