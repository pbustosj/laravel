
@extends('layout')

@section('title',"Creación Usuario")
@section('content')


<h3 class="center-align">Creación Usuario </h3>
<div class="table90">
	<div class="row">
		@if(!empty($message))
		<script>

			$(document).ready(function(){
				Materialize.toast('<?= $message ?>', 5000, 'red rounded');
			})
		</script>
		{{$message = null }}
		@endif
		<form class="col s12" id="formSaveUser" method="POST" action="{{ url('usuarios/save') }}">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s5">
					<i class="material-icons prefix">perm_identity</i>
					<input name="txtRun" id="txtRun" type="text" class="validate">
					<label for="txtRun">RUN</label>
				</div>
				<div class="input-field col s1">					
					<input name="txtDv" value=" " id="txtDv" readonly="readonly" type="text" class="validate">
					<label for="txtDv">DV</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">account_box</i>
					<input name="txtNombres" id="txtNombres" type="text" class="validate">
					<label for="txtNombres">Nombres</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input name="txtApellidos" id="txtApellidos" type="text" class="validate">
					<label for="txtApellidos">Apellidos</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">contact_mail</i>
					<input name="txtMail" id="txtMail" type="email" class="validate">
					<label for="txtMail">Mail</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">security</i>
					<input name="txtPassword" id="txtPassword" type="password" class="validate">
					<label for="txtPassword">Contraseña</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">security</i>
					<input name="txtPassword2" id="txtPassword2" type="password" class="validate">
					<label for="txtPassword2"> RepitaContraseña</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">							
					<select id="txtStatus" name="txtStatus">
						<option value="-1" disabled selected>-- Elija opción --</option>
						@foreach ($statues as $status)
						<option value="{{ $status->idstatus }}">{{ $status->namestatus }}</option>
						@endforeach
					</select>
					<label>Estado</label>
				</div>

				
				<div class="input-field col s6">
					
					<select id="txtProfile" name="txtProfile">
						<option value="-1" disabled selected>-- Elija opción --</option>
						@foreach ($profiles as $profile)
						<option value="{{ $profile->idprofile }}">{{ $profile->nameprofile }}</option>
						@endforeach
					</select>
					<label>Perfil</label>
				</div>
				
			</div>
			<div class="row center-align">
				<a href="{{ url('/usuarios') }}" class="btn-large waves-effect waves-light orange ">Volver</a>
				<a id="btnGuardar" class="btn-large waves-effect waves-light blue ">Crear Usuario</a>
			</div>

		</form>
		
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
.sinData{
	font-size: 40px;
	background-color: red;
}
</style>

<script>	
	$(document).ready(function(){
		$('select').material_select();
		$('#btnGuardar').click(function(){
			if($('#txtRun').val().trim()==''){
				Materialize.toast('Debe ingresar Run',5000,'red rounded');
				$('#txtRun').focus();
				return false;
			}
			if($('#txtNombres').val().trim()==''){
				Materialize.toast('Debe ingresar Nombres',5000,'red rounded');
				$('#txtNombres').focus();
				return false;
			}
			if($('#txtApellidos').val().trim()==''){
				Materialize.toast('Debe ingresar Apellidos',5000,'red rounded');
				$('#txtApellidos').focus();
				return false;
			}
			if($('#txtMail').val().trim()==''){
				Materialize.toast('Debe ingresar Mail',5000,'red rounded');
				$('#txtMail').focus();
				return false;
			}
			if($('#txtPassword').val().trim()==''){
				Materialize.toast('Debe ingresar Password',5000,'red rounded');
				$('#txtPassword').focus();
				return false;
			}
			if($('#txtPassword2').val().trim()==''){
				Materialize.toast('Debe re ingresar Password',5000,'red rounded');
				$('#txtPassword2').focus();
				return false;
			}else{
				if($('#txtPassword').val().trim()!=''){

					if(!isNotTheSameValue($('#txtPassword').val(),$('#txtPassword2').val())){
						Materialize.toast('Las contraseñas deben coincidir',5000,'red rounded');
						$('#txtPassword2').focus();
						return false;
					}
				}
			}
			if($('#txtStatus').val()==null){
				Materialize.toast('Debe seleccionar Estado',5000,'red rounded');
				$('#txtStatus').focus();
				return false;
			}
			if($('#txtProfile').val()==null){
				Materialize.toast('Debe seleccionar Perfil',5000,'red rounded');
				$('#txtProfile').focus();
				return false;
			}else{

				$('#formSaveUser').submit();
			}
		});

		$('#txtMail').focusout(function(){
			if($('#txtMail').val().trim()!=''){
				if(!isValidEmailAddress($(this).val())){
					Materialize.toast('Debe ingresar Mail válido',5000,'red rounded');
					$('#txtMail').focus();
					return false;
				}
			}
		});



		$('#txtRun').focusout(function(){
			if($('#txtRun').val().trim()!=''){
				var value=validaRut($(this).val());
				if(!value){
					Materialize.toast('Debe ingresar Rut válido',5000,'red rounded');
					$('#txtRun').focus();
					return false;
				}else{

					$('#txtDv').val(value);
				}
			}
		});

	});


	function isValidEmailAddress(emailAddress) {
		var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
		return pattern.test(emailAddress);
	}

	function validaRut(rut) {

		if (!rut || !rut.length || typeof rut !== 'string') {
			return -1;
		}

		var secuencia = [2,3,4,5,6,7,2,3];
		var sum = 0;

		for (var i=rut.length - 1; i >=0; i--) {
			var d = rut.charAt(i)
			sum += new Number(d)*secuencia[rut.length - (i + 1)];
		};

		var rest = 11 - (sum % 11);

		return rest === 11 ? 0 : rest === 10 ? "K" : rest;
	}

	function isNotTheSameValue(text1, text2){
		return text1 == text2;
	}

</script>
@endsection