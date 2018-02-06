
<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->

	@include('header')
</head>
<body>
	@include('navbar')
	@include('footer')
	<div class="margenLeft ">
		<h3 class="center-align">Listado de Notificaciones</h3>

		<table class="highlight table90" >
			<thead>
				<tr class="amber lighten-2 ">
					<th>Id</th>
					<th>Mail</th>
					<th>Asunto</th>
					<th>Mensaje</th>
					<th>Fecha y Hora Consulta</th>
					<th>Fecha y Hora Respuesta</th>
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

	</div>


</body>
<style>
.margenLeft{
	margin-left: 300px;
	

}
.table90{
	width:90%;
	margin: 0 auto;
}
</style>
<script>
	
	$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});
</script>
