<style>

	body{
		margin: 0px !important;
		background: #00000005 !important;
		font-family: Poppins;
		font-size: 0.9rem !important;
	}

	.menu{
		font-size: 0.9rem !important;
		background: #191921;
		width: 17vw;
		position: fixed;
		top: 0;
		left: 0;
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

	.ativo{
		background: #FFFFFF30 !important;
	}

</style>

<div class="menu">
	<div class="menuContent">
		<img class="logo" src="<?php echo $appLocal ?>/assets/logo.png">
		<div class="itens">

			<a href="<?php echo $appLocal ?>/dashboard/">
				<div class="item <?php if($pageName == 'Dashboard'){echo 'ativo';} ?>">
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

			<a href="<?php echo $appLocal ?>/#">
				<div class="item <?php if($pageName == 'Projeto'){echo 'ativo';} ?>">
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

			<a href="<?php echo $appLocal ?>/#">
				<div class="item <?php if($pageName == 'Tarefas'){echo 'ativo';} ?>">
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

			<a href="<?php echo $appLocal ?>/#">
				<div class="item <?php if($pageName == 'Faturas'){echo 'ativo';} ?>">
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

			<a href="<?php echo $appLocal ?>/#">
				<div class="item <?php if($pageName == 'Cliente'){echo 'ativo';} ?>">
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
				<a href="<?php echo $appLocal ?>/#"><label class="itemFast">FAQ</label></a><br>
				<a href="<?php echo $appLocal ?>/#"><label class="itemFast">Central de Ajuda</label></a><br>
			</div>

		</div>
	</div>
</div>


<style>
	.menuTop{
		position: absolute;
		padding: 30px 85px 30px calc(17vw + 85px);
		width: 100%;
		left: 0;
		top: 0;
	}
	.right{
		float: right !important;
	}
	.icons svg{
		font-size: 18px;
		color: #444 !important;
		margin-left: 20px;
	}
	.no-button{
		background: transparent !important;
		padding: 0px !important;
		border: none !important;
	}
	.dropdown-menu{
		border: none !important;
		font-weight: 300 !important;
		border-radius: 15px !important;
		box-shadow: 0px 0px 50px -20px rgba(0,0,0,0.1);
	}
	.dropdown-item{
		color: #444 !important;
		font-weight: 300 !important;
	}
	.dropdown hr{
		border-color: #00000030;
	}
</style>

<div class="menuTop">
	<div class="row">
		<div class="col-6">
			<i class="fa-regular fa-folder"></i><label style="margin-left: 10px; margin-right: 10px;">></label><label><?php echo $pageName ?></label>
		</div>
		<div class="col-6">
			<div class="right">
				<div class="icons">
					<div style="display: inline-block !important;" class="dropdown">
						<button class="no-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-regular fa-bell"></i>
						</button>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="#">Nenhuma Notificação</a></li>
						</ul>
					</div>
					<div style="display: inline-block !important;" class="dropdown">
						<button class="dropdown-toggle no-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-regular fa-user"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Minha Conta</a></li>
							<li><a class="dropdown-item" href="#">Portfólio</a></li>
							<hr>
							<li><a class="dropdown-item" href="#">Sair</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>