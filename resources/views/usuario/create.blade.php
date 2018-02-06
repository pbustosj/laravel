
<!DOCTYPE html>
<html>
<head>
	@include('header')
</head>
<body>
	@include('navbar')
	@include('footer')
	<div class="margenLeft ">


		<h3 class="center-align">Creación Usuario</h3>
		<div class="table90">
			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s5">
							<i class="material-icons prefix">perm_identity</i>
							<input id="txtRun" type="text" class="validate">
							<label for="txtRun">RUN</label>
						</div>
						<div class="input-field col s1">
							
							<input id="txtDv" type="text" class="validate">
							<label for="txtDv">DV</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">account_box</i>
							<input id="txtNombres" type="text" class="validate">
							<label for="txtNombres">Nombres</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input id="txtApellidos" type="text" class="validate">
							<label for="txtApellidos">Apellidos</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">contact_mail</i>
							<input id="txtMail" type="email" class="validate">
							<label for="txtMail">Mail</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">security</i>
							<input id="txtPassword" type="password" class="validate">
							<label for="txtPassword">Contraseña</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">security</i>
							<input id="txtPassword2" type="password" class="validate">
							<label for="txtPassword2"> RepitaContraseña</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s6">							
							<select>
								<option value="" disabled selected>-- Elija opción --</option>
								@foreach ($statues as $status)
									<option value="{{ $status->idstatus }}">{{ $status->namestatus }}</option>
								@endforeach
							</select>
							<label>Estado</label>
						</div>

						
						<div class="input-field col s6">
							
							<select>
								<option value="" disabled selected>-- Elija opción --</option>
								@foreach ($profiles as $profile)
									<option value="{{ $profile->idprofile }}">{{ $profile->nameprofile }}</option>
								@endforeach
							</select>
							<label>Perfil</label>
						</div>
					
					</div>

				</form>
				
			</div>
			<div class="center-align">

					<a class="btn-large waves-effect waves-light blue ">Crear Usuario</a>
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
.sinData{
	font-size: 40px;
	background-color: red;
}
</style>

<script>	
	$(document).ready(function(){
		$('select').material_select();

	});
</script>
