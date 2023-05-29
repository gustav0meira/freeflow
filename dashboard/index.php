<?php $pageName = 'Dashboard'; ?>
<?php include_once('../app/vars.php'); ?>
<?php include_once('../app/cdn.php'); ?>
<?php include_once('../app/menu.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $pageName . ' | ' . $appName ?></title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="tabelaClientes.css">
	<link rel="stylesheet" type="text/css" href="calendar.css">

	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="module">
					<div class="row">
						<div class="col-3">
							<i class="fa-regular fa-credit-card moduleIcon align"></i>
						</div>
						<div class="col-sm">
							<label class="title">Receitas:</label><br>
							<label class="desc">R$ 1.587,00</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="module">
					<div class="row">
						<div class="col-3">
							<i class="fa-regular fa-newspaper moduleIcon align"></i>
						</div>
						<div class="col-sm">
							<label class="title">Projetos:</label><br>
							<label class="desc">12</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="module">
					<div class="row">
						<div class="col-3">
							<i class="fa-regular fa-address-card moduleIcon align"></i>
						</div>
						<div class="col-sm">
							<label class="title">Clientes:</label><br>
							<label class="desc">12</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-8">
						<h3 class="topModule">#projetos</h3>
						<div class="module">
							<div id="projetos" style="height: 250px !important; width:500px;" class="ag-theme-material"></div>
						</div>

						<h3 class="topModule">#eventos-de-hoje</h3>
						<div class="module">
							<div id='calendar'></div>
						</div>

						<h3 class="topModule">#clientes</h3>
						<div class="module">
							<div id="clientes" style="height: 200px; width:500px;" class="ag-theme-material"></div>
						</div>
					</div>
					<div class="col-4">
						<div class="topModule">#faturas</div>
						<div class="module">
							<canvas id="myChart"></canvas>
							<div style="margin-top: 30px;">
								<center>
									<i style="color: #191921;" class="fa-solid fa-circle faturaBublue"></i><label style="margin-right: 20px;" class="faturaLabel"> Receitas</label>
									<i style="color: #35424e;" class="fa-solid fa-circle faturaBublue"></i><label class="faturaLabel"> Despesas</label>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Receita', 'Despesas'],
      datasets: [{
        data: [12, 19],
        backgroundColor: ['#35424e', '#191921'],
        borderWidth: 2
      }]
    },
    options: {
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          display: false
        },
        x: {
          display: false
        }
      }
    }
  });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridDay',
    initialDate: '<?php echo date('Y-m-d'); ?>',
    events: [
      {
        title: 'Reunião de design do projeto',
        start: '2023-05-28',
        end: '2023-05-29T02:00:00'
      },
      {
        title: 'Revisão de código do projeto',
        start: '2023-05-28',
        end: '2023-05-29T06:00:00'
      },
      {
        title: 'Brainstorming do projeto W',
        start: '2023-05-28',
        end: '2023-05-29T17:00:00'
      },
      {
        title: 'Reunião de planejamento do projeto V',
        start: '2023-05-28',
        end: '2023-05-29T12:00:00'
      },
    ]
  });

  calendar.render();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.js"></script>
<script>
// Primeira tabela
const columnDefs1 = [
  { field: "nome", flex: 1, filter: true },
  { field: "cliente", flex: 1, filter: true },
  { field: "prazo", flex: 1, filter: true }
];

const rowData1 = [
  { nome: "Projeto A", cliente: "Cliente 1", prazo: "30/06/2023" },
];

const gridOptions1 = {
  columnDefs: columnDefs1,
  rowData: rowData1
};

// Segunda tabela
const columnDefs2 = [
  { field: "nome", flex: 1, filter: true },
  { field: "email", flex: 1, filter: true },
  { field: "telefone", flex: 1, filter: true }
];

const rowData2 = [
  { nome: "Cliente de Teste", email: "contato@cliente.teste", telefone: "77 9 9999 9999" },
];

const gridOptions2 = {
  columnDefs: columnDefs2,
  rowData: rowData2
};

document.addEventListener('DOMContentLoaded', () => {
    const gridDiv1 = document.querySelector('#projetos');
    new agGrid.Grid(gridDiv1, gridOptions1);

    const gridDiv2 = document.querySelector('#clientes');
    new agGrid.Grid(gridDiv2, gridOptions2);
});
</script>

</html>