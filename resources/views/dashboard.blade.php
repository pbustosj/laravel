<div class="margenLeft">
		<div class="row">
			<div class="col l12">
				<span><h3 class="center-align">Estadísticas Generales</h3></span>
			</div>
		</div>
		<div class="row">
			<div class="col l6">
				
				<canvas id="myChart"></canvas>
			</div>
			<div class="col l6">
				<canvas id="myChart2"></canvas>
			</div>
		</div>
		<div class="row">
			<div class="col l6">
				<h6 class="center-align" style="font-size: 12px;">Comunas donde más se realizan gestiones</h6>
				<canvas id="myChart3"></canvas>
			</div>
			<div class="col l6"><br>
				<canvas id="myChart4"></canvas>
			</div>
		</div>
		<div class="row">
			<div class="col l6">
				
				<canvas id="myChart5"></canvas>
			</div>
			<div class="col l6">
				<canvas id="myChart6"></canvas>
			</div>
		</div>
	</div>

	<script>

	$(document).ready(function(){
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["VBC", "CCM", "PBJ", "FCM", "FBC", "BPC"],
				datasets: [{
					label: 'Cumplimiento Tareas x Usuario en mes actual',
					data: [58, 47, 12, 8, 3, 76],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		var ctx2= document.getElementById("myChart2").getContext('2d');
		var myChart2 = new Chart(ctx2, {
			type: 'line',
			data: {
				labels: ["VBC", "CCM", "PBJ", "FCM", "FBC", "BPC"],
				datasets: [{
					label: 'Tareas asignadas x Usuario y que aún no están finalizadas',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		var ctx3= document.getElementById("myChart3").getContext('2d');
		var myChart3 = new Chart(ctx3, {
			type: 'polarArea',
			data: {
				labels: ["Maipú", "Quilicura", "Renca", "Los Andes", "Cerro Navia", "San Miguel"],
				datasets: [{
					label: 'Comunas donde mas se trabaja',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		var ctx4= document.getElementById("myChart4").getContext('2d');
		var myChart4 = new Chart(ctx4, {
			type: 'radar',
			data: {
				labels: ["WOM", "MOVISTAR", "CLARO", "ENTEL", "NEXTEL", "Heisenberg"],
				datasets: [{
					label: 'Solicitudes x Clientes mes actual',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		var ctx5 = document.getElementById("myChart5").getContext('2d');
		var myChart5 = new Chart(ctx5, {
			type: 'bar',
			data: {
				labels: ["VBC", "CCM", "PBJ", "FCM", "FBC", "BPC"],
				datasets: [{
					label: 'Cumplimiento Tareas x Usuario en mes actual',
					data: [58, 47, 12, 8, 3, 76],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		var ctx6= document.getElementById("myChart6").getContext('2d');
		var myChart6 = new Chart(ctx6, {
			type: 'line',
			data: {
				labels: ["VBC", "CCM", "PBJ", "FCM", "FBC", "BPC"],
				datasets: [{
					label: 'Tareas asignadas x Usuario y que aún no están finalizadas',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});


	});
</script>