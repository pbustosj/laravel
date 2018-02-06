<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oxygen|Ubuntu" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">

</head>

<body>
	<div id="body">

		<div class="containerLogin"  >


			<div class=" card-panel" style="background: rgba(238, 238, 238, 0.7);">
				<div class="row center">
					<div class="col l12">
						 <img id="logoSMGES2" src="{{ URL::asset('/img/logoSMGES.png') }}" class="hide-on-med-and-down" style="width:180px;height:80px;">
          <img id="logoSMGES" src="http://sanmartingestorias.cl/images/logoSMGES.png" class="responsive-img hide-on-med-and-up" style="width: 110px;">
					</div>
				<div class="row">
					<div class="col l12"><h4 style="font-weight: bold;">Iniciar Sesión</h4> <hr></div>  

				</div>
				<div class="row">
					<form class="col s12" action="./loginServlet" method="POST" id="frmLogin">
						<div class="row">

							<div class="col l12 center">
								<div class="row">


									<div class="input-field col s12">
										<i class="material-icons prefix">account_circle</i>
										<input id="usuarioQl" name="usuarioQl" type="text" class="validate">
										<label for="icon_prefix">Username</label>
									</div>

								</div>
								<div class="row">


									<div class="input-field col s12">
										<i class="material-icons prefix">vpn_key</i>
										<input id="contraQl" name="contraQl" type="password" class="validate">
										<label for="icon_telephone">Password</label>
									</div>



								</div>
								<div class="row">

									<div class="input-field col s12">
										<a class="btn-large green waves-effect waves-light" style="width:100%;" id="ingresar">Ingresar</a><br>
										<a href="{{ url('/') }}">Volver</a>

									</div>


								</div>
								<div class="row center">
									<div class="col-l12">
										© 2016 Copyright Powered by SanMartinGestorías.
Todos los derechos reservados.
									</div>
								</div>
							</div>  


						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	<div id="cargandoDiv" style="display: none;top:50%;left:48%;position: fixed;">
		<h6>Cargando...</h6>
	 <div class="preloader-wrapper big active" >
	 	
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>


</html>

<style>

</style>
<script>
	$(document).ready(function(){
		var height = $(window).height();
		height = parseInt(height+15);
		$('#body').css('height',height+'px');
		$('#body').css('margin-top','-15px');
		$('#body').css('width','100%');
		$('#body').css('background','url("https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/ydYuAi5/4k-sunrise-in-the-mountains-and-lake-in-torres-del-paine-patagoniachile_vkblkaos__F0003.png")');
		$('#body').css('background-size','cover');	
		$('#body').css('background-repeat','no-repeat');
		$('.containerLogin').css('width','35%');
		$('.containerLogin').css('margin','0 auto');
		$('.containerLogin').css('height',height+'px');
	
		
     	var options = [
		{
			selector: '#body', offset: 0, callback: function(el){ 
				Materialize.fadeInImage($(el)); 
			} }, 

			];

			Materialize.scrollFire(options);
			
		});

	$('#ingresar').click(function(){
		if($('#usuarioQl').val().trim()==''){

        Materialize.toast("Username es obligatorio.",5000,"rounded red");
        $('#usuarioQl').focus();
        return false;

      }
      if($('#contraQl').val().trim()==''){

        Materialize.toast("Password es obligatorio.",5000,"rounded red");
        $('#contraQl').focus();
        return false;

      }else{
      	location.href="{{ URL::asset('home') }}";
      }
	});	
	
	</script>
