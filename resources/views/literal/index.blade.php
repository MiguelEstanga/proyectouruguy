<x-app-layout>


	<form action="{{ route('literal.create') }}" method="post" >
		@csrf

		<table class="table">
			<thead>
			  <tr>
			  	<td>
			  		<h2 class="alert alert-success">
			  			Cargar rasgos personales
			  		</h2>
			  	</td>
			  </tr>		
			  <tr>
					<td>
						Buena conduta
					</td>
					<td>
							<select name="Conducta" id="">
								<option value="si">Si</option>
								<option value="no">No</option>
							</select>
				   </td>
			   </tr>
			   <tr>
			   		<td>Disfruta la lectura</td>
			   		<td>
						<select name="Lectuta" id="">
							<option value="si">Si</option>
							<option value="no">No</option>
						</select>
					</td>
			   </tr>

			   <tr>
			   	<td>Expresa capacidad creadora al conversar</td>
			   		<td>
						<select name="Expresion" id="">
							<option value="si">Si</option>
							<option value="no">No</option>
						</select>
					</td>
			   </tr>

			   <tr>
			   		<td>Trabaja en grupo y mantiene relaciones interpersonales abiertas y positivas</td>
					<td>
						<select name="Partisipacion" id="">
							<option value="si">Si</option>
							<option value="no">No</option>
						</select>
					</td>
			   </tr>
			   <tr>
			   	   <td>
			   	   	 Participación colaborativa
			   	   </td>
			   	  	<td>
						<select name="Trabajo_En_Equipo" id="">
							<option value="si">Si</option>
							<option value="no">No</option>
						</select>
					</td>
			   	  
			   </tr>
			</thead>
		
		</table>

			<h2 class="alert alert-success">
		Evaluación final: Literal calificativo
	</h2>
		<select name="literal" class="form-control" >
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
		</select>

		<input type="text"  value=" {{ $informe->id }}" hidden name="id_informe" >
		<input type="text"  hidden value="{{ $estudiante->id }}" name="id_estudiante" >
		<button class="btn btn-primary" >
			Cargar Literal
		</button>
	</form>


</x-app-layout>	