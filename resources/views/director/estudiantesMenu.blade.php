

<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Gestionar estudiantes
  </p>
  <div class="dashboard__main__content__actions">
  
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
  
  
  </div>
    
  <div class="dashboard__main__content__user-stats">
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Estudiantes actuales:</span>
      <span class="dashboard__main__content__user-stats__total__value">{{ $numero_de_estudiante }}</span>
    </div>
  
  </div>
</x-app-layout>
