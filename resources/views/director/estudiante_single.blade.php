
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Gestionar estudiantes
  </p>
  <div class="dashboard__main__content__search">
    <form action="{{ route('director.busqueda') }}">
    <input
      type="search"
      name="nombre"
      class="dashboard__main__content__search__input"
      placeholder="Buscar por nombre"
    />
    <button class="dashboard__main__content__search__button">Buscar</button>
    </form>
  </div>
  
  <table class="dashboard__main__content__users">
    <thead>
      
 
    <tr class="dashboard__main__content__users__headers">
      <th class="dashboard__main__content__users__headers__header">Nombre</th>
      <th class="dashboard__main__content__users__headers__header">Cedula</th>
      <th class="dashboard__main__content__users__headers__header">Fecha de nacimiento</th>
      <th class="dashboard__main__content__users__headers__header">Grado</th>
      <th class="dashboard__main__content__users__headers__header">Seccion</th>
      <th class="dashboard__main__content__users__headers__header">Acción</th>
    </tr>
    </thead>
    <tbody>
          <tr class="dashboard__main__content__users__row">
            <td class="dashboard__main__content__users__row__data"> {{ $estudiante->nombre1 }} </td>
            <td class="dashboard__main__content__users__row__data">{{ $estudiante->usuario->cedula }}</td>
            <td class="dashboard__main__content__users__row__data">{{ $estudiante->usuario->fecha_nacimiento }}</td>
            <td class="dashboard__main__content__users__row__data">
              {{ $estudiante->grado_id->grado }}
            </td>
            <td class="dashboard__main__content__users__row__data">
               {{ $estudiante->seccion_id->seccion }}
            </td>
            <td class="dashboard__main__content__users__row__data">
                <a href="{{ route('director_estudiante.edit' , $estudiante->usuario->id ) }}">
                 Editar 
               </a>
          </tr>
   </tbody>
  </table>
  <a  href="{{ route('director_estudiante.create') }}" class="dashboard__main__content__add-user-btn">
    Agregar estudiante
  </a>
  <style>
    .menu{
      font-family: ;
    }
  </style>
</x-app-layout>
