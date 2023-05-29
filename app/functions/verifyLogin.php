<?php

require_once "../config.php";

$usuarioSubmetido = $_POST["usuario"];
$senhaSubmetido = md5(hash('sha256', $_POST["senha"]));

$query = "SELECT * FROM usuarios WHERE usuario = '$usuarioSubmetido'";
$resultado = mysqli_query($conn, $query);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);
    $usuario_bancodedados = $usuario["usuario"];
    $senha_bancodedados = $usuario["senha"];
    $id_do_usuario_no_banco_de_dados = $usuario["id"];

    if ($usuarioSubmetido == $usuario_bancodedados && $senhaSubmetido == $senha_bancodedados) {
        session_start();
        $_SESSION['id'] = $id_do_usuario_no_banco_de_dados;

        echo '<script>window.location.href = "../../dashboard/"</script>';
    } else {
        echo '<script>alert("E-mail e/ou senha incorretos!"); window.location.href = "../../login/"</script>';
    }
} else {
    echo '<script>alert("E-mail e/ou senha incorretos!"); window.location.href = "../../login/"</script>';
}

?>