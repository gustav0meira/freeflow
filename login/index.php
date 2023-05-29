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
        <img class="logo" src="../assets/logo.png" alt="logo">
		
        <div class="login">
            <form action="../app/functions/verifyLogin.php" method="post">
                <input type="text" required placeholder="Nome de usuário" name="usuario">
                <input type="password" required placeholder="Sua senha" name="senha">
                <button>Enviar</button>
                <p class="form"><a href="#">Esqueci minha senha</a></p>
            </form>
        </div>

        <span class="copy">Todos os direitos reservados à Freeflow ©</span>
    </center>
</body>
</html>