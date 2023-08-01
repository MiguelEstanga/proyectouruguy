
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Editar ficha de Docente
  </p>
  <form  action="{{ route('director_docente.update' , $docente->id ) }}"  method="post" class="dashboard__main__content__form">
    @csrf
    @method('put')
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre1"
        class="dashboard__main__content__form__label__input"
        value="{{ $docente['nombre1'] }}"
      />
    </label>
       <label class="dashboard__main__content__form__label">
      Nombre 2:
      <input
        type="text"
        name="nombre2"
        class="dashboard__main__content__form__label__input"
        value="{{ $docente['nombre1'] }}"
      />
    </label>
    <label 
        class="dashboard__main__content__form__label"
      >
      Habilitar
    
      <select name="habilitar">
                <option  

                {{ $docente->usuario->roles[0] == 'Desabilitado' ? 'selected' : ''  }}
                 value="Desabilitado">
                   Deshabilitar
                </option>
                <option  
                  {{ $docente->usuario->roles[0]->name == "Profesor" ? 'selected' : '' }}
                   value="Profesor">
                  Habilitar
                </option>
      </select>
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input

        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $docente['apellido2'] }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
        name="email"
        type="email"
        value="{{ $docente->usuario->email }}"
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
        value="{{ $docente->usuario->fecha_nacimiento }}"
      />
    </label>
  
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
        name="cedula"
        type="text"
        value="{{ $docente->usuario->cedula }}"
        class="dashboard__main__content__form__label__input"
      />
    </label>

    

    <label class="dashboard__main__content__form__label">
      Sección
      <select name="id_seccion">
        @foreach($secciones as $seccion)
          <option
         

            value="{{ $seccion['id'] }}"
            {{ $docente->seccion->id == $seccion->id ?'selected' : '' }}
          >
            {{ $seccion['seccion'] }}
        </option>
        @endforeach
      </select>
    </label>

    

    <button class="dashboard__main__content__form__btn">
      Actualizar docente
    </button>
  </form>

  <div class="dashboard__main__content__student-links student-links">
    <!-- eliminar docente -->
 
    <!-- eliminar docente -->
    <form action="{{ route('director.busqueda') }}">
      <button class="dashboard__main__content__search__button">Inhabilitar docente</button>
    </form>
  </div>
</x-app-layout>
