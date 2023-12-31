

<x-app-layout>
  <div class="dashboard__data__content">
    <p class="dashboard__data__content__section-title">
      Resultado De la Busqueda
    </p>
    <div class="dashboard__data__content__search">
      <form action="{{ route('director.busqueda') }}">
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
      <tr class="dashboard__data__content__users__headers">
        <th class="dashboard__data__content__users__headers__header">Nombre</th>
        <th class="dashboard__data__content__users__headers__header">Apellido</th>
        <th class="dashboard__data__content__users__headers__header">Email</th>

        <th class="dashboard__data__content__users__headers__header">Cedula</th>
           <th class="dashboard__data__content__users__headers__header">Fecha de nacimiento</th>
        <th>
          Acciones
        </th>   

  
      
      </tr>
      @if($usuario != 'null')



     
      <tr class="dashboard__data__content__users__row">
        <td class="dashboard__data__content__users__row__data">
          {{ $usuario->profesor[0]->nombre1 }}

        </td>
        <td class="dashboard__data__content__users__row__data">{{ 
          $usuario->profesor[0]->apellido2 }}</td>
        <td class="dashboard__data__content__users__row__data">{{ $usuario->email }}</td>


        <td class="dashboard__data__content__users__row__data">{{ $usuario->cedula}}</td>
        <td class="dashboard__data__content__users__row__data">
          {{ $usuario->fecha_nacimiento }}
        </td>
       
          <td class="dashboard__main__content__users__row__data">
                <form 
                  method="post" 
                  action="{{ route('director_docente.destroy' , $usuario->profesor[0]->id ) }}">
                  @method('delete')
                  @csrf

                <button class="dashboard__main__content__users__row__data__delete">   Eliminar
                </button>
              </form>
            </td>  
            <td>
              <a
                class="dashboard__main__content__users__row__data__delete" 
                href="{{ route('director_docente.edit' ,  $usuario->profesor[0]->id ) }}">
                Editar
              </a>
            </td>
      
       
     
      </tr>
     
      @endif
    </table>
   
   
  </div>
</x-app-layout>
