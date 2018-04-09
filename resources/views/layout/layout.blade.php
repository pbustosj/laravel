
<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oxygen|Ubuntu" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<script
	src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
	<a href="#" data-activates="slide-out" class="button-collapse pulse">
		<img style="width: 10%;" 
		src="{{ URL::asset('/img/logoSMGES.png') }}"><i class="material-icons medium green-text">menu</i></a>
		<br><label style=""> @yield('title')  Sistema de Gestión Operacional - San Martín Gestorías</label>
	</head>
	<body>	
		<ul id="slide-out" class="side-nav">
			<li>
				<div class="row fondoPerfil">
					<div class="user-view col l4" style="margin-top:20px;">
						<a href="#!user"><img class="circle" style="width:75px;height: 80px;margin-top:-20px;margin-left: -20px;" 
							src="{{ URL::asset('/img/vene.png') }}"></a>
						</div>
						<div class="col l8 separacionLineas" >	
							<a href="#!name"><span class="white-text fontSizeName">Venecia Barahona</span></a>
							<a href="#!name"><span class="white-text fontSizeCharge">Administrador</span></a>
							<a href="#!email"><span class="white-text fontSizeMail">vbarahona@sanmartingestorias.cl</span></a><br>
							<a class="btn waves waves-effect amber lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar Perfil">Editar</a><br><br>
						</div>	
					</div>
				</li>
				<li><a href="/dashboard/dashboard"><i class="material-icons">home</i>Home</a></li>
				<li><a href="/user/user"><i class="material-icons">group</i>Usuarios</a></li>
				<li><a href="/notificaciones/notificaciones"><i class="material-icons">notifications</i>Notificaciones</a></li>
				<li><a href="#!"><i class="material-icons">business</i>Clientes</a></li>
				<li><a href="#!"><i class="material-icons">work</i>Solicitudes</a></li>
				<li><a ><i class="material-icons">settings</i>Configuración</a></li>
				<li><a ><i class="material-icons">trending_up</i>Estadísticas</a></li>
				<li><div class="divider"></div></li>
				<li><a class="waves waves-effect tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cerrar Sesión"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
			</ul>
			<div class="containerPbj">
				@yield('content')
			</div>
		</body>
		<style>

		.fontSizeName{
			font-size: 20px;
		}
		.fontSizeCharge{
			font-size: 16px;
		}
		.fontSizeMail{
			font-size: 12px;
		}
		.separacionLineas{
			line-height: 25px;
			margin-top: 20px;
		}
		.containerPbj{
			margin-left: 5%;
			margin-right: 5%;
			margin-top: -5%;
		}
		.fondoPerfil{
			background-color: rgba(1,97,52,0.7);
			//background-image: url("{{ URL::asset('/img/backgroundProfile2.png') }}");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$('.tablePbj').DataTables();
		});
	</script>