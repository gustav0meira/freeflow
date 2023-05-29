<?php include_once('../../app/cdn.php'); ?>

<script type="text/javascript">
    setTimeout(function(){
        window.location.href = '../../login/';
    }, 5000);
</script>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seu cadastro está em Análise</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/x-icon" href="<?php echo $appLocal ?>/assets/favicon.png">
</head>
<body>
	<center>
		<div class="align">
			<i class="fa-solid fa-circle-check"></i>
			<h1>O seu acesso foi submetido e encontra-se em análise!</h1>
			<p>Por favor, aguarde enquanto o administrador do sistema realiza a aprovação</p>
		</div>
	</center>
</body>
</html>