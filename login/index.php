<?php include_once('../app/cdn.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | FreeFlow</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="icon" type="image/x-icon" href="../assets/favicon.png">

</head>
<body>
    <center>
        <img class="logo" src="../assets/logo_freeflow.png" alt="logo">
		
        <div class="login">
            <form action="../app/functions/verifyLogin.php" method="post">
                <input type="email" required placeholder="Nome de usuário" name="email">
                <input style="margin-bottom: 2px !important;" type="password" required placeholder="Sua senha" name="senha">
                <p class="form"> <a href="#">Esqueci minha senha</a></p>
                <button>Enviar</button>
                <p class="form">Ainda não tem uma conta? <a href="#">Criar conta</a></p>
            </form>
        </div>

        <span class="copy">Todos os direitos reservados à Freeflow ©</span>
    </center>
</body>
</html>