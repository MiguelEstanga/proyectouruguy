

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
    <table class="table">
      <thead>
      <tr class="dashboard__data__content__users__headers">
        <th class="dashboard__data__content__users__headers__header">Nombre</th>
        <th class="dashboard__data__content__users__headers__header">
          Apellido
        </th>
        <th class="dashboard__data__content__users__headers__header">
          Email
        </th>

        <th class="dashboard__data__content__users__headers__header">
          Cedula
        </th>
        <th class="dashboard__data__content__users__headers__header">
          Fecha de nacimiento
        </th>
        <th class="dashboard__data__content__users__headers__header">Action</th>
  
      
      </tr>
      </thead>
    
      

      <tbody>
      <tr class="dashboard__data__content__users__row">
        <td class="dashboard__data__content__users__row__data">
          {{ $administrador->administradores[0]->nombre1 }}
        </td>
        <td class="dashboard__data__content__users__row__data">
           {{ $administrador->administradores[0]->nombre1 }}
        </td>
        <td class="dashboard__data__content__users__row__data">
          {{ $administrador->email }}
        </td>


        <td class="dashboard__data__content__users__row__data">
          {{ $administrador->cedula}}
        </td>
        <td class="dashboard__data__content__users__row__data">
          {{ $administrador->fecha_nacimiento }}
        </td>
        
       
       
        <td class="dashboard__data__content__users__row__data">
          <form 
            method="post" 
            @method('delete')
            @csrf

          <button class="dashboard__data__content__users__row__data__delete">Eliminar</button>
          </form>
        </td>
      </tr>
      </tbody>
     
    
     
     
    </table>
   
  </div>
</x-app-layout>
