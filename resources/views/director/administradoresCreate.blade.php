

<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Registrar Administrador
  </p>
  <form  action="{{ route('director_administrador.store') }}"  method="post" class="dashboard__main__content__form">
    @csrf
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
      required
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
      />
     @error('nombre')
      <p style="color:red;" > campo requerido </p>
     @enderror 
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
      required
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
         @error('apellido')
      <p style="color:red;" > campo requerido </p>
     @enderror 
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        type="date"
        required
        class="dashboard__main__content__form__label__input"
      />
         @error('fecha_nacimiento')
      <p style="color:red;" > campo requerido </p>
     @enderror 
    </label>

    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
      required
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
    </label>
       @error('direccion')
      <p style="color:red;" > campo requerido </p>
     @enderror 
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
        required
        name="cedula"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
         @error('cedula')
      <p style="color:red;" > campo requerido, tenga en cuenta que esta cedula puede estar en uso dentro del sistema </p>
     @enderror 
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
        required
        name="email"
        type="text"
        class="dashboard__main__content__form__label__input"
        autocomplete="off"
      />
         @error('email')
      <p style="color:red;" > campo requerido </p>
     @enderror 
    </label>
    
    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
        required
        name="password"
        type="password"
        class="dashboard__main__content__form__label__input"
        autocomplete="off"
      />

         @error('password')
      <p style="color:red;" > campo requerido </p>
     @enderror 
    </label>
    <label class="dashboard__main__content__form__label">
      
    </label>
  
    <button class="dashboard__main__content__form__btn">
      Registrar Administrador
    </button>
  </form>
</x-app-layout>
