<x-app-layout>
	<h2>
		
		Creacion De  Lapsos

	</h2>
	@if(session('error'))
		<h2 class="alert alert-success" >
			{{ session('error') }}
		</h2>
	@endif
	<form  method="POST" action="{{ route('lapso.store') }}" class="dashboard__main__content__form">
		@csrf
		<label class="dashboard__main__content__form__label">
	     Fecha De Inicio:
	      <input
	        type="date"
	        name="Fecha_Inicio"
	        class="dashboard__main__content__form__label__input"
	      />
	      @error('Fecha_Cierre')
	      	<p style="color:red" >Es Necesario que se coloque la fecha de Inicio</p>
	      @enderror
	    </label>
		 <label class="dashboard__main__content__form__label">
	      Fecha De Fin:
	      <input
	        type="date"
	        name="Fecha_Cierre"
	        class="dashboard__main__content__form__label__input"
	      />
	      @error('Fecha_Cierre')
	      	<p style="color:red" >Es Necesario que se coloque la fecha de cierre</p>
	      @enderror
	    </label>
	    <label class="dashboard__main__content__form__label">
	       Nombre:
	      <input
	        type="text"
	        name="Nombre"
	        class="dashboard__main__content__form__label__input"
	      />

	      @error('Nombre')
	      	<p style="color:red" >Es Necesario que coloque el nombre del semestre</p>
	      @enderror
	    </label>
	   	<input hidden type="text" name="id_periodo" value="{{ $periodo->id }}">
	   	<div>
	   		
	   	</div>
	     <button

       
      >Registrar Periodo</button>
	</form>

</x-app-layout>
