
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Gestionar administradores
  </p>
  <div class="dashboard__main__content__actions">
    <a
      href="{{ route('director_administrador.create') }}" 
      class="dashboard__main__content__actions__action dashboard__main__content__actions__action--add-user">
      Agregar administrador
      <img
        class="dashboard__main__content__actions__action__icon"
        src="{{ asset('images/user-plus.svg') }}"
        alt="usuario"
      >
    </a>
    <a
      href="{{ route('director_administrador.index') }}" 
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
      <span class="dashboard__main__content__user-stats__total__label">administradores actuales:</span>
      <span class="dashboard__main__content__user-stats__total__value">{{ count($administrador) }}</span>
    </div>
  
  </div>
</x-app-layout>
