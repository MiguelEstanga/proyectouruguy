
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Registrar Profesor
  </p>
  <form  action="{{ route('director.store') }}"  method="post" class="dashboard__main__content__form">
    @csrf
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        required
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
      required
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
      required
        name="fecha_nacimiento"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
      required
      name="cedula"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
      required
      name="email"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    
    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
      required
      name="password"
        type="password"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Seccion
          <select name="id_seccion">
        @foreach($secciones as $seccion)
          <option value="{{ $seccion->id }}">{{ $seccion->seccion }}</option>
        @endforeach
      </select>
    </label>
  
    <button class="dashboard__main__content__form__btn">
      Registrar usuario
    </button>
  </form>
</x-app-layout>
