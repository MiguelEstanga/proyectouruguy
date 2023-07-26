<x-app-layout>
	<p class="dashboard__main__content__section-title">
   Proyectos
  </p>
  <div class="dashboard__main__content__actions">
    <a
      href="{{ route('proyecto.create') }}" 
      class="dashboard__main__content__actions__action dashboard__main__content__actions__action--add-user">
      Crear Proyecto
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
    <a
      href="{{ route('director_administrador.index') }}" 
      class="dashboard__main__content__actions__action dashboard__main__content__actions__action--delete-user">
      Eliminar administrador
      <img
        class="dashboard__main__content__actions__action__icon"
        src="{{ asset('images/user-minus.svg') }}"
        alt="usuario"
      >
    </a>
    <a
      class="dashboard__main__content__actions__action dashboard__main__content__actions__action--enable-user"
      href="{{ route('director_administrador.index') }}" 
    >
      Editar administradores
      <img
        class="dashboard__main__content__actions__action__icon"
        src="{{ asset('images/wand-magic-sparkles.svg') }}"
        alt="usuario"
      >
    </a>
  </div>
    
  

</x-app-layout>