
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Gestionar docentes
  </p>
  @if(session('mensage'))
    <h2 class="alert alert-success" >
      {{  session('mensage') }}
    </h2>
  @endif
  <div class="dashboard__main__content__search">
    <form action="{{ route('director.busqueda') }}" method="get">
    <input
      type="search"
      name="cedula"
      class="dashboard__main__content__search__input"
      placeholder="Buscar por cedula"
    />
    <button class="dashboard__main__content__search__button">Buscar</button>
    </form>
  </div>
  
  <table class="table">
    <tr class="dashboard__main__content__users__headers">
      <th class="dashboard__main__content__users__headers__header">Nombre</th>
      <th class="dashboard__main__content__users__headers__header">Cedula</th>
      <th class="dashboard__main__content__users__headers__header">Email</th>

      <th class="dashboard__main__content__users__headers__header">Fecha de nacimiento</th>
      <th class="dashboard__main__content__users__headers__header">Grado</th>
      <th class="dashboard__main__content__users__headers__header">Seccion</th>
      <th class="dashboard__main__content__users__headers__header">Acción</th>
    </tr>
    @if($docentes != 'null')
          @foreach($docentes as $docente)
          <tr 

             style="
                padding: 10px;
                border: solid 1px  {{ $docente->usuario->roles[0]->name == "Profesor" ? 
              '#1D8348' : ' #C0392B' }};"
              class="dashboard__main__content__users__row">

            <td class="dashboard__main__content__users__row__data"> 
              {{ $docente->nombre1 }} 
            </td>

            <td class="dashboard__main__content__users__row__data">
              {{ $docente->usuario->cedula }} 
              
            </td>
            <td class="dashboard__main__content__users__row__data">
              {{ $docente->usuario->email }} 
              
            </td>
            <td class="dashboard__main__content__users__row__data">
              {{ $docente->usuario->fecha_nacimiento }}
            </td>
            <td class="dashboard__main__content__users__row__data">
              {{ $docente->grado_id->grado }}
            </td>
        
            <td class="dashboard__main__content__users__row__data">{{ $docente->seccion->seccion  }}</td>
            <td class="dashboard__main__content__users__row__data">
                <form 
                  method="post" 
                  action="{{ route('director_docente.destroy' , $docente->id ) }}">
                  @method('delete')
                  @csrf

                <button class="dashboard__main__content__users__row__data__delete">Eliminar</button>
              </form>
            </td>  
            <td>
              <a
                class="dashboard__main__content__users__row__data__delete" 
                href="{{ route('director_docente.edit' , $docente->id ) }}">
                Editar
              </a>
            </td>
          </tr>
        @endforeach
    @endif

  </table>
  <a  href="{{ route('director_docente.create') }}" class="dashboard__main__content__add-user-btn">
    Agregar docente
  </a>
  <div class="dashboard__main__content__user-stats">
    <div class="dashboard__main__content__user-stats__total">
      <span class="dashboard__main__content__user-stats__total__label">Docentes actuales:</span>
      <span class="dashboard__main__content__user-stats__total__value">{{ count($docentes) }}</span>
    </div>
 
  
  </div>
  <style>
    .menu{
      font-family: ;
    }
  </style>
</x-app-layout>
