
@extends('../layout/layout')

@section('title',"Listado de Usuarios - ") 

@section('content')

<div class="table90 right-align">
	<a class="btn-floating btn-large green waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Crear Usuario" href="create"><i class="material-icons large ">add</i></a>
</div>

<h3 class="center-align">Usuarios</h3>
@if(isset($users) && sizeof($users)>0)
<table class="highlight table90" >
	<thead>
		<tr class="amber lighten-2 ">
			<th>Id</th>
			<th>RUN</th>
			<th>DV</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Mail</th>
			<th>Estado</th>
			<th>Perfil</th>
			<th>Editar</th>
			<th>Cambiar Estado</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>
				{{ $user-> iduser}}
			</td>
			<td>
				{{ $user-> runuser}}
			</td>
			<td>
				{{ $user-> dvuser}}
			</td>
			<td>
				{{ $user-> firstnameuser}}
			</td>
			<td>
				{{ $user-> lastnameuser}}
			</td>
			<td>
				{{ $user-> mailuser}}
			</td>
			<td>					
				@if($user-> status ->namestatus=='activo')
				<a class="btn green waves-effect">{{  $user-> status ->namestatus }}</a>
				@else
				<a class="btn red waves-effect">{{ $user-> status ->namestatus }}</a>
				@endif

			</td>
			<td>
				{{ $user-> profile -> nameprofile}}
			</td>
			<td>
				<a onclick="editUser({{$user->iduser}})"><i class="material-icons orange-text">edit</i></a>
			</td>
			<td>
				<a onclick="desactiveUser({{$user->iduser}})"><i class="material-icons red-text">sync</i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<button id="triggerToDelete" class="modal-trigger" href="#modalToDelete" style="display:none;"></button>
<form id="formToDeleteUser" method="POST" action="{{ url('user/desactive') }}">
	{{ csrf_field() }}
	<div id="modalToDelete" class="modal modal-fixed-footer">
		<div class="modal-content center-align">
			<h4 id="titleToDelete">Cambiar Estado de Usuario</h4>
			<p id="bodyToDelete"></p>
			<input type="hidden" id="userIdToDelete" name="userIdToDelete" value="">
		</div>
		<div class="modal-footer center-align">
			<a id="btnToDeleteCancel" class="modal-action red modal-close waves-effect waves-green btn-flat">Cancelar</a>
			<a id="btnToDeleteConfirm" class="modal-action green modal-close waves-effect waves-green btn-flat">Continuar</a>
		</div>
	</div>
</form>
<button id="triggerToEdit" class="modal-trigger" href="#modalToEdit" style="display:none;"></button>
<form id="formToEditUser" method="POST" action="{{ url('user/edit') }}">
	{{ csrf_field() }}
	<div id="modalToEdit" class="modal modal-fixed-footer">
		<div class="modal-content center-align">
			<h4 id="titleToEdit">Editar Usuario</h4>
			<p id="bodyToEdit"></p>
			<input type="hidden" id="userIdToEdit" name="userIdToEdit" value="">
		</div>
		<div class="modal-footer center-align">
			<a id="btnToEditCancel" class="modal-action red modal-close waves-effect waves-green btn-flat">Cancelar</a>
			<a id="btnToEditConfirm" class="modal-action green modal-close waves-effect waves-green btn-flat">Continuar</a>
		</div>
	</div>
</form>
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
					Lamentamos informarle, que no existen registros de usuarios en nuestro sistema.
				</span>
			</div>
			<div class="col s2">
				<img src="http://www.intrans.iastate.edu/root_images/intrans-images/icons/404-icon.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
			</div>
		</div>
	</div>
</div>
@endif

</body>

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
		$('.modal').modal();
	});

	function desactiveUser(idUser){
		$('#triggerToDelete').click();
		$('#modalToDelete').css('width','30%');
		$('#modalToDelete').css('height','40%');
		$('#userIdToDelete').val(idUser);
		var msg = '<div class="center-align">Estimado (a):<br> ¿Está seguro que desea desactivar usuario con id:' + idUser+ ' ?</div>'; 
		$('#bodyToDelete').html('');
		$('#bodyToDelete').html(msg);
	}

	function editUser(idUser){
		$('#triggerToEdit').click();
		$('#modalToEdit').css('width','30%');
		$('#modalToEdit').css('height','40%');
		$('#userIdToEdit').val(idUser);
		var msg = '<div class="center-align">Estimado (a):<br> ¿Está seguro que desea editar usuario con id:' + idUser+ ' ?</div>'; 
		$('#bodyToEdit').html('');
		$('#bodyToEdit').html(msg);
	}
	

	$('#btnToDeleteConfirm').click(function(){
		$('#formToDeleteUser').submit();
	});

	$('#btnToEditConfirm').click(function(){
		$('#formToEditUser').submit();
	});

</script>

@endsection
