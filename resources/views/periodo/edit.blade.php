<x-app-layout>
	<form  method="POST" action="{{ route('periodo.store') }}" class="dashboard__main__content__form">
		@csrf
		<label class="dashboard__main__content__form__label">
	     Fecha De Inicio:
	      <input
	        type="date"
	        name="Fecha_Inicio"
	        class="dashboard__main__content__form__label__input"
	      />

	      @error('Fecha_Inicio')
	      	<p style="color: red;" >
	      		se necesita una fecha de inicio
	      	</p>
	      @enderror
	    </label>
		 <label class="dashboard__main__content__form__label">
	      Fecha De Cierra:
	      <input
	        type="date"
	        name="Fecha_Cierre"
	        class="dashboard__main__content__form__label__input"
	      />
	         @error('Fecha_Cierre')
	      	<p style="color: red;" >
	      		se necesita una fecha de cierre
	      	</p>
	      @enderror
	    </label>
	    <label class="dashboard__main__content__form__label">
	     	Ano Escolar:
	      <input
	        type="text"
	        name="Ano_Escolar"
	        class="dashboard__main__content__form__label__input"
	      />

	         @error('Ano_Escolar')
	      	<p style="color: red;" >
	      		se necesita una Año Escolar
	      	</p>
	      @enderror
	    </label>
	     <button
        class="informacion-periodo__actions__action"
       
      >Registrar Periodo</button>
	</form>

</x-app-layout>
