
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
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix" type="text" class="validate">
							<label for="icon_prefix">RUN</label>
						</div>
						<div class="input-field col s1">
							
							<input id="icon_telephone" type="tel" class="validate">
							<label for="icon_telephone">DV</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_telephone" type="tel" class="validate">
							<label for="icon_telephone">Nombres</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix" type="text" class="validate">
							<label for="icon_prefix">Apellidos</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_telephone" type="tel" class="validate">
							<label for="icon_telephone">Mail</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix" type="text" class="validate">
							<label for="icon_prefix">Contraseña</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_telephone" type="tel" class="validate">
							<label for="icon_telephone">Repita Contraseña</label>
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
