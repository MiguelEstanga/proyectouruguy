<x-app-layout>
	<h2>
		Creear grados para la secciones del  Periodo {{ $periodo->añoescolar }}
	</h2>
	<form action="{{ route('grado.store') }}" method="post">
		@csrf
	
	<label class="dashboard__main__content__form__label">
      secciones
      <select name="id_seccion">
        @foreach($secciones as $seccion)
          <option value="{{ $seccion->id }}">{{ $seccion->seccion }}</option>
        @endforeach
      </select>
    </label>
    <input hidden type="text" name="id_periodo" value="{{ $periodo->añoescolar }}" >
    <label 
     class="dashboard__main__content__form__label"
    	>
    	Nombre Del Grado	
    	 <input type="text" name="grado" >
    	</label>
   
    <div>
    	 <button>
    	crear sccion
    </button>
    </div>
   </form>
</x-app-layout>
