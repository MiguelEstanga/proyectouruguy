
<x-app-layout>
    <p class="dashboard__main__content__section-title">
      Evaluar Estudiante
    </p>
  <div class="ficha-estudiante">
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->nombre1 }}"
        disabled
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->apellido }}"
        disabled
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        id="fecha_nacimiento_input"
        type="date"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->usuario->fecha_nacimiento }}"
        disabled
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Lugar de nacimiento:
      <input
        name="lugar_nacimiento"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->reprecentante->localidad }}"
        disabled
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Dirección:
      <input
        name="direccion"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->reprecentante->localidad }}"
        disabled
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Cédula escolar:
      <input
        name="cedula_escolar"
        type="text"
        id="cedula_escolar_input"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->cedulaescolar }}"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Grado
      <input
        name="cedula_escolar"
        type="text"
        id="cedula_escolar_input"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->grado }}"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Sección
      <input
        name="cedula_escolar"
        type="text"
        id="cedula_escolar_input"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->seccion }}"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Cédula Representante:
      <input
        id="cedula_representante_input"
        name="cedula_reprecentante"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->reprecentante->usuario->cedula }}"
        disabled
      />
    </label>

    <label class="dashboard__main__content__form__label">
      Nombre del Representante:
      <input
        name="nombre_reprecentante"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $estudiante->reprecentante->nombre1 }}"
        disabled
      />
    </label>
  </div>

  <div class="dashboard__main__content__student-links student-links">
    

   
          <a
            target="_black"
            href="{{ route('informe.crear' , $estudiante->id ) }}"
            class="btn btn-primary"
          >
            Hcer Informe
          </a>
     
          <a
            href="{{ route('informe.show' ,  $estudiante->id ) }}"
            class="btn btn-primary"
            target="_black"
          >
            Cargar informe
          </a>
  
          <a
            href="{{ route( 'constancia' ,  $estudiante->id) }}"
            class="btn btn-primary"
          >
            imprimir constancia de estudio del periodo
          </a>

    @if( $ultimo_lapso == 3)
       <a
       target="_black"
      href="{{ route('literal.evaluar' , $estudiante->id  ) }}"
      class="btn btn-primary"
    >
      Cargar literal
    </a>
    @endif      
   
  </div>
</x-app-layout>
