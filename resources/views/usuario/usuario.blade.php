
@extends('layout')

@section('title',"Listado de Usuarios - ") 

@section('content')
<div class="table90 right-align">
	<a class="btn-floating btn-large green waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Crear Usuario" href="usuarios/create"><i class="material-icons large ">add</i></a>
</div>
<h3 class="center-align">Usuarios</h3>
@if(sizeof($users)>0)
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
			<th>Eliminar</th>
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
				<a href=""><i class="material-icons orange-text">edit</i></a>
			</td>
			<td>
				<i class="material-icons red-text">delete</i>
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
</script>
@endsection
