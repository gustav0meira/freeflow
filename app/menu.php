<style>

	body{
		margin: 0px !important;
		font-family: Poppins;
	}

	.menu{
		background: #191921;
		width: 17vw;
		height: 100vh !important;
	}

	.menu .menuContent{
		padding: 30px;
		padding-top: 60px;
	}

	img.logo{
		width: 30%;
		margin-bottom: 50px;
	}

	.menu .item{
		padding: 20px !important;
		margin-bottom: 15px;
		border-radius: 20px;
		background: #FFFFFF10;
		color: #FFFFFF;
		font-weight: 300;
		transition: all 300ms;
	}

	.menu .item:hover{
		background: #FFFFFF20;
	}

	.item label{
		cursor: pointer !important;
	}

	.item svg{
/*		color: #1d5af3;*/
		color: #FFFFFF20;
	}

	label.fastLink{
		color: #FFFFFF20;
		font-size: 13px !important;
		font-weight: 300;
		margin-top: 20px;
		margin-bottom: 15px;
	}

	.fastLink a{
		color: #FFFFFF10;
		text-decoration: none !important;
	}

	.fastLink label.itemFast{
		padding: 7px;
		margin-bottom: 10px;
		border-radius: 10px;
		font-weight: 300;
		font-size: 13px;
		cursor: pointer !important;
		color: #FFFFFF60;
		background: #1d1d25;
	}

</style>

<div class="menu">
	<div class="menuContent">
		<img class="logo" src="<?php echo $appLocal ?>/assets/logo.png">
		<div class="itens">

			<a href="#">
				<div class="item">
					<div class="row">
						<div class="col-3" style="text-align: center !important;">
							<i class="fa-solid fa-chart-pie align"></i>
						</div>
						<div class="col-sm">
							<label class="align">Dashboard</label>
						</div>
					</div>
				</div>
			</a>

			<a href="#">
				<div class="item">
					<div class="row">
						<div class="col-3" style="text-align: center !important;">
							<i class="fa-solid fa-diagram-project align"></i>
						</div>
						<div class="col-sm">
							<label class="align">Projetos</label>
						</div>
					</div>
				</div>
			</a>

			<a href="#">
				<div class="item">
					<div class="row">
						<div class="col-3" style="text-align: center !important;">
							<i class="fa-solid fa-list-check align"></i>
						</div>
						<div class="col-sm">
							<label class="align">Tarefas</label>
						</div>
					</div>
				</div>
			</a>

			<a href="#">
				<div class="item">
					<div class="row">
						<div class="col-3" style="text-align: center !important;">
							<i class="fa-solid fa-piggy-bank align"></i>
						</div>
						<div class="col-sm">
							<label class="align">Faturas</label>
						</div>
					</div>
				</div>
			</a>

			<a href="#">
				<div class="item">
					<div class="row">
						<div class="col-3" style="text-align: center !important;">
							<i class="fa-solid fa-user align"></i>
						</div>
						<div class="col-sm">
							<label class="align">Clientes</label>
						</div>
					</div>
				</div>
			</a>

			<div class="fastLink">
				<label class="fastLink">Links Rápidos</label><br>
				<a href="#"><label class="itemFast">FAQ</label></a><br>
				<a href="#"><label class="itemFast">Central de Ajuda</label></a><br>
			</div>

		</div>
	</div>
</div>