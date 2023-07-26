

<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Registrar Administrador
  </p>
  <form  action="{{ route('director_administrador.store') }}"  method="post" class="dashboard__main__content__form">
    @csrf
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
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
        type="text"
        class="dashboard__main__content__form__label__input"
      />
         @error('fecha_nacimiento')
      <p style="color:red;" > campo requerido </p>
     @enderror 
    </label>

    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
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
      name="cedula"
        type="text"
        class="dashboard__main__content__form__label__input"
      />
         @error('cedula')
      <p style="color:red;" > campo requerido </p>
     @enderror 
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
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
