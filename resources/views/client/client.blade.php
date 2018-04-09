
@extends('../layout/layout')

@section('title',"Listado de Clientes - ") 

@section('content')
<div class="table90 right-align">
	<br><br>
</div>
<h3 class="center-align">Clientes</h3>
@if(isset($clients) && sizeof($clients)>0)
<table class="highlight table90" >
	<thead>
		<tr class="amber lighten-2 ">
			<th>Id</th>
			<th>Run</th>
			<th>DV</th>
			<th>Nombre</th>
			<th>Fecha Creación</th>
			<th>Tipo Cliente</th>
			<th>Estado</th>
			<th>Acción</th>



		</tr>
	</thead>

	<tbody>

		<tr class="" >
			<td>
				1
			</td>
			<td>
				bustos.jorquera.pedro@gmail.com
			</td>
			<td>
				Consulta Servicio
			</td>
			<td>
				Hola queria saber cuanto cuesta documento de antecedentes.
			</td>
			<td>
				01/02/2018 06:30 PM
			</td>
			<td>
				01/02/2018 08:30 PM
			</td>
			<td>
				Resuelto
			</td>
			<td>
				<i class="material-icons green-text">remove_red_eye</i>
			</td>


		</tr>	
		<tr class="">
			<td>
				1
			</td>
			<td>
				bustos.jorquera.pedro@gmail.com
			</td>
			<td>
				Consulta Servicio
			</td>
			<td>
				Hola queria saber cuanto cuesta documento de antecedentes.
			</td>
			<td>
				01/02/2018 06:30 PM
			</td>
			<td>
				s/d
			</td>
			<td>
				Pendiente
			</td>
			<td>
				<i class="material-icons red-text">reply</i>
			</td>


		</tr>
		<tr class="" >
			<td>
				1
			</td>
			<td>
				bustos.jorquera.pedro@gmail.com
			</td>
			<td>
				Consulta Servicio
			</td>
			<td>
				Hola queria saber cuanto cuesta documento de antecedentes.
			</td>
			<td>
				01/02/2018 06:30 PM
			</td>
			<td>
				01/02/2018 08:30 PM
			</td>
			<td>
				Resuelto
			</td>
			<td>
				<i class="material-icons green-text">remove_red_eye</i>
			</td>


		</tr>	
		<tr class="">
			<td>
				1
			</td>
			<td>
				bustos.jorquera.pedro@gmail.com
			</td>
			<td>
				Consulta Servicio
			</td>
			<td>
				Hola queria saber cuanto cuesta documento de antecedentes.
			</td>
			<td>
				01/02/2018 06:30 PM
			</td>
			<td>
				s/d
			</td>
			<td>
				Pendiente
			</td>
			<td>
				<i class="material-icons red-text">reply</i>
			</td>


		</tr>
	</tbody>
</table>

<div id="modal1" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>Modal Header</h4>
		<p>A bunch of text</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
	</div>
</div>
@else
<div class="col s12 m8 offset-m2 l6 offset-l3">
	<div class="card-panel grey lighten-5 z-depth-1">
		<div class="row valign-wrapper">
			<div class="col s2">
				<img src="http://www.intrans.iastate.edu/root_images/intrans-images/icons/404-icon.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
			</div>
			<div class="col s8 center-align">
				<span class="black-text">
					Estimado Usuario(a):<br>
					Lamentamos informarle, que no existen registros de notificaciones en nuestro sistema.
				</span>
			</div>
			<div class="col s2">
				<img src="http://www.intrans.iastate.edu/root_images/intrans-images/icons/404-icon.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
			</div>
		</div>
	</div>
</div>

@endif


<style>
.margenLeft{
	margin-left: 300px;
	

}
.table90{
	margin: 0 auto;
}
.sinData{
	font-size: 40px;
	text-align:center;
}
</style>
<script>
	
	$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});
</script>
@endsection