<x-app-layout>
	<h2>
		
		Creación de lapsos

	</h2>
	@if(session('error'))
		<h2 class="alert alert-success" >
			{{ session('error') }}
		</h2>
	@endif
	<form  method="POST" action="{{ route('lapso.store') }}" class="dashboard__main__content__form">
		@csrf
		<label class="dashboard__main__content__form__label">
	     Fecha de inicio:
	      <input
	        type="date"
	        name="Fecha_Inicio"
	        class="dashboard__main__content__form__label__input"
	      />
	      @error('Fecha_Cierre')
	      	<p style="color:red" >Es necesario que se coloque la fecha de inicio</p>
	      @enderror
	    </label>
		 <label class="dashboard__main__content__form__label">
	      Fecha de cierre:
	      <input
	        type="date"
	        name="Fecha_Cierre"
	        class="dashboard__main__content__form__label__input"
	      />
	      @error('Fecha_Cierre')
	      	<p style="color:red" >Es necesario que se coloque la fecha de cierre</p>
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
	      	<p style="color:red" >Es necesario que coloque el nombre del lapso</p>
	      @enderror
	    </label>
	   	<input hidden type="text" name="id_periodo" value="{{ $periodo->id }}">
	   	<div>
	   		
	   	</div>
	     <button

       
      >Registrar lapso</button>
	</form>

</x-app-layout>
