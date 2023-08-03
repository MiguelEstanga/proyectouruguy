
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Registrar Docente
  </p>
  <form  action="{{ route('director_docente.store') }}"  method="post" class="dashboard__main__content__form">
    @csrf 
    <label class="dashboard__main__content__form__label">
      Nombre: 
      
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
      />
      @error('nombre')
        <p style="color:red" >El nombre es requerido</p>
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
        <p style="color:red" >El apellido es requerido</p>
      @enderror
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
        name="email"
        type="email"
        class="dashboard__main__content__form__label__input"
      />
      @error('email')
        <p style="color:red" >El email es requerido</p>
      @enderror
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        id="fecha_nacimiento_input"
        type="date"
        class="dashboard__main__content__form__label__input"
      />
      @error('fecha_nacimiento')
        <p style="color:red" >La fecha de nacimiento es requerida</p>
      @enderror
    </label>
    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
      />

      @error('direccion')
        <p style="color:red" >La dirección es requerida</p>
      @enderror
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
        name="cedula"
        type="text"
        id="cedula"
        class="dashboard__main__content__form__label__input"
      />
      @error('cedula')
        <p style="color:red" >La cédula debe ser única</p>
      @enderror
    </label>

    <label class="dashboard__main__content__form__label">
      Contraseña:
      <input
        name="password"
        type="text"
        id="password"
        class="dashboard__main__content__form__label__input"
      />
      @error('password')
        <p style="color:red" >El password es requerido</p>
      @enderror
    </label>

    <label class="dashboard__main__content__form__label">
      Grado
      @error('grado')
        <p style="color:red" >El garado es requerido</p>
      @enderror
      <select name="grado">  
        @foreach($grados as $grado)
          <option value="{{ $grado['id'] }}">{{ $grado['grado'] }}</option>
        @endforeach
      </select>
    </label>

    <label class="dashboard__main__content__form__label">
      Sección
      @error('id_seccion')
        <p style="color:red" >Es necesario que elija una seccion </p>
      @enderror
      <select name="id_seccion">
        @foreach($secciones as $seccion)
          <option value="{{ $seccion['id'] }}">{{ $seccion['seccion'] }}</option>
        @endforeach
      </select>
    </label>

    <button class="dashboard__main__content__form__btn">
      Registrar docente
    </button>
  </form>
</x-app-layout>
