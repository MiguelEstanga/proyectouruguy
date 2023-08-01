<x-app-layout>
  <h2>
    Cargar informe del {{ $lapso->nombre ?? 'No se ha creado un lapso' }}
  </h2>
 <form 
 	action="{{ route('informe.store') }}" 
 	 class="dashboard__main__content__current-project__value"
 	 method="post" 
 	 >
 
 	 @csrf
	<label class="form-label" for="descripcion" >
      Descripción:
  </label>

  <textarea 

        name="Descripcion" 
        id="descripcion" 
        cols="30" 
        rows="10"
        class="form-control" 
              
        >
  </textarea>


  
      <input type="text" hidden value="{{ $lapso->id }}"  name="id_lapso" >
      <input type="text" hidden value="{{ $proyecto->id }}" name="id_proyectos" >
      
  
      <button class="dashboard__main__content__current-project__value__button">
        	Crear informe
      </button>
  </form>	
</x-app-layout>	
<style>
	textarea{
		height: 100px;
	}
</style>