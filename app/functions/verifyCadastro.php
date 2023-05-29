<?php
include_once '../config.php';

if (isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repitaSenha'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = md5(hash('sha256', $_POST['senha']));
    $repitaSenha = md5(hash('sha256', $_POST['repitaSenha']));

    if ($senha !== $repitaSenha) {
        echo "<script>window.location.href='../../cadastro/?nome=".urlencode($nome)."&sobrenome=".urlencode($sobrenome)."&telefone=".urlencode($telefone)."&email=".urlencode($email)."'; alert('As senhas não conferem!');</script>";
        exit();
    }

    // Verifica se o e-mail já existe
    $query = "SELECT COUNT(*) as count FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        echo "<script>window.location.href='../../cadastro/?nome=".urlencode($nome)."&sobrenome=".urlencode($sobrenome)."&telefone=".urlencode($telefone)."&email=".urlencode($email)."'; alert('Este e-mail já está registrado!');</script>";
        exit();
    }

    $usuario = strtolower($nome);
    $query = "SELECT COUNT(*) as count FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        $usuario .= $row['count'];
    }

    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, nome, sobrenome, email, senha) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $usuario, $nome, $sobrenome, $email, $senha);

    if ($stmt->execute()) {
        echo "<script>window.location.href='../../cadastro/analise/'; alert('Registro criado com sucesso!');</script>";
    } else {
        echo "<script>window.location.href='../../cadastro/?nome=".urlencode($nome)."&sobrenome=".urlencode($sobrenome)."&telefone=".urlencode($telefone)."&email=".urlencode($email)."'; alert('Erro: ".$stmt->error."');</script>";
    }
} else {
    echo "<script>window.location.href='../../cadastro/'; alert('Todos os campos são obrigatórios!');</script>";
}
?>