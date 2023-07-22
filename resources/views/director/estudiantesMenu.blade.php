

<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Gestionar estudiantes
  </p>
  <div class="dashboard__main__content__actions">
    <a
      href="{{ route('director_estudiante.create') }}" 
      class="dashboard__main__content__actions__action dashboard__main__content__actions__action--add-user">
      Agregar estudiante
      <img
        class="dashboard__main__content__actions__action__icon"
        src="{{ asset('images/user-plus.svg') }}"
        alt="usuario"
      >
    </a>
    <a
      href="{{ route('director_estudiante.index') }}" 
      class="dashboard__main__content__actions__action dashboard__main__content__actions__action--view-users">
      Ver listado actual
      <img
        class="dashboard__main__content__actions__action__icon"
        src="{{ asset('images/list.svg') }}"
        alt="usuario"
      >
    </a>
    <a
      href="{{ route('director_estudiante.index') }}" 
      class="dashboard__main__content__actions__action dashboard__main__content__actions__action--delete-user">
      Eliminar estudiante
      <img
        class="dashboard__main__content__actions__action__icon"
        src="{{ asset('images/user-minus.svg') }}"
        alt="usuario"
      >
    </a>
    <a
      class="dashboard__main__content__actions__action dashboard__main__content__actions__action--enable-user"
      href="{{ route('director_estudiante.index') }}" 
    >
      Editar estudiante
      <img
        class="dashboard__main__content__actions__action__icon"
        src="{{ asset('images/wand-magic-sparkles.svg') }}"
        alt="usuario"
      >
    </a>
  </div>
    
  <div class="dashboard__main__content__user-stats">
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Estudiantes actuales:</span>
      <span class="dashboard__main__content__user-stats__total__value">27</span>
    </div>
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Estudiantes sin seccion:</span>
      <span class="dashboard__main__content__user-stats__total__value">3</span>
    </div>
  </div>
</x-app-layout>
