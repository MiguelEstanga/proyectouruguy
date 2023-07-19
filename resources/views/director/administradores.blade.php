

<x-app-layout>
  <div class="dashboard__data__content">
    <p class="dashboard__data__content__section-title">
      Gestionar administradores
    </p>
    <div class="dashboard__data__content__actions">
      <a
        href="{{ route('administradores.create') }}" 
        class="dashboard__data__content__actions__action dashboard__data__content__actions__action--add-user">
        Agregar administrador
        <img
          class="dashboard__data__content__actions__action__icon"
          src="{{ asset('images/user-plus.svg') }}"
          alt="usuario"
        >
      </a>
      <a
        href="{{ route('administrador.ver') }}" 
        class="dashboard__data__content__actions__action dashboard__data__content__actions__action--view-users">
        Ver listado actual
        <img
          class="dashboard__data__content__actions__action__icon"
          src="{{ asset('images/list.svg') }}"
          alt="usuario"
        >
      </a>
      <a 

      href="{{ route('administrador.ver') }}" 
      class="dashboard__data__content__actions__action dashboard__data__content__actions__action--delete-user">
        Eliminar administrador
        <img
          class="dashboard__data__content__actions__action__icon"
          src="{{ asset('images/user-minus.svg') }}"
          alt="usuario"
        >
      </a>
      <button class="dashboard__data__content__actions__action dashboard__data__content__actions__action--enable-user">
        Habilitar/inhabilitar administrador
        <img
          class="dashboard__data__content__actions__action__icon"
          src="{{ asset('images/wand-magic-sparkles.svg') }}"
          alt="usuario"
        >
      </button>
    </div>
      
    <div class="dashboard__data__content__user-stats">
      <div class="dashboard__data__content__user-stats__total">
        <span class="dashboard__data__content__user-stats__total__label">Administradores actuales:</span>
        <span class="dashboard__data__content__user-stats__total__value">27</span>
      </div>
      <div class="dashboard__data__content__user-stats__total">
        <span class="dashboard__data__content__user-stats__total__label">Administradores inhabilitados:</span>
        <span class="dashboard__data__content__user-stats__total__value">3</span>
      </div>
    </div>
  </div>
</x-app-layout>
