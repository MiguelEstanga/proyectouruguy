
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Editar ficha de Estudiante 
  </p>
  <form  action="{{ route('director_estudiante.update' , $estudiante->id  ) }}"  method="post" class="dashboard__main__content__form">

    @csrf
    @method('put')
  
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->estudiante[0]->nombre1 }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->estudiante[0]->apellido }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        id="fecha_nacimiento_input"
       
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->fecha_nacimiento}}"
      />
    </label>
   
    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->estudiante[0]->reprecentante->domicilio }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula escolar:
      <input
        name="cedula_escolar"
        type="text"
        id="cedula_escolar_input"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->estudiante[0]->cedulaescolar }}"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Grado
      <select name="id_grado">
        @foreach($grados as $grado)
          <option
            value="{{ $grado->id }}"
            {{ $grado->id == $estudiante->estudiante[0]->id_grado ? 'selected' : '' }}

          >{{ $grado['grado'] }}</option>
        @endforeach
      </select>
    </label>

    <label class="dashboard__main__content__form__label">
      Sección
      <select name="id_seccion">
        @foreach($secciones as $seccion)
          <option
            value="{{ $seccion['id'] }}"
            {{ $seccion->id == $estudiante->estudiante[0]->id_seccion ? 'selected' : '' }}
          >
          {{ $seccion['seccion'] }}

        </option>
        @endforeach
      </select>
    </label>


    
    <button class="dashboard__main__content__form__btn">
      Actualizar estudiante
    </button>
  </form>

 
</x-app-layout>
