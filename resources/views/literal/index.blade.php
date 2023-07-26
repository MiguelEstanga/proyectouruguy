<x-app-layout>
	<h2 class="alert alert-success">
		Evaluacion Final Literal
	</h2>

	<form action="{{ route('literal.create') }}" method="post" >
		@csrf

		<label  class="form-label" for="">
			Evaluar literal Nota Final
		</label>
		<select name="literal" class="form-control" >
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
		</select>

		<input type="text" hidden value="{{ $informe->id }}" name="id_informe" >
		<input type="text"  hidden value="{{ $estudiante->id }}" name="id_estudiante" >
		<button class="btn btn-primary" >
			Cargar Literal
		</button>
	</form>


</x-app-layout>	