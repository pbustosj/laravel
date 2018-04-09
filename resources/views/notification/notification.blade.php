<?php use \App\Http\Controllers\NotificationController;?>
@extends('../layout/layout')

@section('title',"Listado de Notificaciones - ") 

@section('content')
<div class="table90 right-align">
	<br><br>
</div>
<h3 class="center-align">Notificaciones</h3>
@if(isset($notifications) && sizeof($notifications)>0)
<div class="row">
	<div class="col l12">
		<table class="highlight tablePbj">
			<thead>
				<tr class="amber lighten-2 ">
					<th>Id</th>
					<th>Nombre</th>
					<th>Teléfono</th>
					<th>Mail</th>
					<th>Asunto</th>
					<th>Mensaje</th>
					<th>Fecha y Hora Consulta</th>
					<th>Usuario Asignado</th>
					<th>Fecha y Hora Respuesta</th>
					<th>Estado</th>
					<th>Acción</th>
				</tr>
			</thead>

			<tbody>

				<tr class="" >
					@foreach($notifications as $notification)
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->idcontact)}}
					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->nameContact)}}
					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->phoneContact)}}
					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->mailcontact)}}

					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->subjectcontact)}}

					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->messagecontact)}}

					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->senddatecontact)}}

					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->mailuserresponse)}}

					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->senddateresponse)}}

					</td>
					<td>
						{{NotificationController::replaceAllNUllOrUndefinded($notification->status_idstatus)}}

					</td>
					<td>
						<i class="material-icons green-text">remove_red_eye</i>
					</td>

				</tr>
				@endforeach
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
	width: 20%;
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
    $('.tablePbj').DataTable({
    	'width': 50%
    });
});
</script>
@endsection