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
        Elija Un Menu De Usuario De Acuerdo A su Acargo
      </p>
    </div>

    <div class="dashboard-index__actions">
      <a 
       href="{{ route('director_docente.menu') }}"
        class="dashboard-index__actions__action dashboard-index__actions__action--add-user">
        Director
        <img
          class="dashboard-index__actions__action__icon"
          src="{{ asset('images/user-plus.svg') }}"
          alt="usuario"
        >
      </a>
      <a class="dashboard-index__actions__action dashboard-index__actions__action--view-users">
        Administrador
        <img
          class="dashboard-index__actions__action__icon"
          src="{{ asset('images/list.svg') }}"
          alt="usuario"
        >
      </a>
      <a 
      href="{{route('docente.inicio') }}" 
      class="dashboard-index__actions__action dashboard-index__actions__action--delete-user">
        Docente
        <img
          class="dashboard-index__actions__action__icon"
          src="{{ asset('images/user-minus.svg') }}"
          alt="usuario"
        >
      </a>
   
    </div>
  </div>
</x-app-layout>
