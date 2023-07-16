@php

@endphp

<x-app-layout>
  <div class="dashboard-index">
    <h1 class="dashboard-index__welcome-msg">
      <img class="dashboard-index__welcome-msg__icon" src="{{ asset('images/users-gear.svg') }}" alt="" />
      Bienvenido al sistema
    </h1>
    <div class="dashboard-index__description">
      <p class="dashboard-index__description__p">
        Gracias por confiar en nuestro Sistema de Información. Estamos seguros de que esta herramienta te será de gran utilidad para administrar de manera eficiente y organizada todos los perfiles relacionados con nuestra escuela.
      </p>
    </div>

    <div class="dashboard-index__actions">
      <button class="dashboard-index__actions__action dashboard-index__actions__action--add-user">
        Cómo agregar usuarios
        <img
          class="dashboard-index__actions__action__icon"
          src="{{ asset('images/user-plus.svg') }}"
          alt="usuario"
        >
      </button>
      <button class="dashboard-index__actions__action dashboard-index__actions__action--view-users">
        Ver lista de usuarios
        <img
          class="dashboard-index__actions__action__icon"
          src="{{ asset('images/list.svg') }}"
          alt="usuario"
        >
      </button>
      <button class="dashboard-index__actions__action dashboard-index__actions__action--delete-user">
        Cómo eliminar usuarios
        <img
          class="dashboard-index__actions__action__icon"
          src="{{ asset('images/user-minus.svg') }}"
          alt="usuario"
        >
      </button>
      <button class="dashboard-index__actions__action dashboard-index__actions__action--enable-user">
        Cómo habilitar/inhabilitar usuarios
        <img
          class="dashboard-index__actions__action__icon"
          src="{{ asset('images/wand-magic-sparkles.svg') }}"
          alt="usuario"
        >
      </button>
    </div>
  </div>
</x-app-layout>
