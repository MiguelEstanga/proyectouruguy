

<x-app-layout>
  <div class="dashboard__data__content">
    <p class="dashboard__data__content__section-title">
      Resultado Administrador
    </p>
    <div class="dashboard__data__content__search">
      <form action="{{ route('administradores.busqueda') }}">
      <input
        type="search"
        name="nombre"
        class="dashboard__data__content__search__input"
        placeholder="Buscar por nombre"
      />
      <button class="dashboard__data__content__search__button">Buscar</button>
      </form>
    </div>
    <table class="dashboard__data__content__users">
      <tr class="dashboard__data__content__users__headers">
        <th class="dashboard__data__content__users__headers__header">Nombre</th>
        <th class="dashboard__data__content__users__headers__header">Apellido</th>
        <th class="dashboard__data__content__users__headers__header">Email</th>

        <th class="dashboard__data__content__users__headers__header">Cedula</th>
        <th class="dashboard__data__content__users__headers__header">Fecha de nacimiento</th>
                <th class="dashboard__data__content__users__headers__header">Action</th>
  
      
      </tr>
      @if($administrador != 'null')



     
      <tr class="dashboard__data__content__users__row">
        <td class="dashboard__data__content__users__row__data">{{ $administrador->nombre }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $administrador->apellido }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $administrador->email }}</td>


        <td class="dashboard__data__content__users__row__data">{{ $administrador->cedula}}</td>
        <td class="dashboard__data__content__users__row__data">{{ $administrador->fecha_nacimiento }}</td>
        
       
       
        <td class="dashboard__data__content__users__row__data">
          <form 
            method="post" 
            action="{{ route('director.destroy' , $administrador->id) }}">
            @method('delete')
            @csrf

          <button class="dashboard__data__content__users__row__data__delete">Eliminar</button>
          </form>
        </td>
      </tr>
     
      @endif
    </table>
    <a  href="{{ route('administradores.create') }}" class="dashboard__data__content__add-user-btn">
      Agregar Aministrador
    </a>
   
  </div>
</x-app-layout>
