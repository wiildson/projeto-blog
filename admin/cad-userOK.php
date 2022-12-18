<?php 

include "../config/connection.php";

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];

//preparar
$stmt = $conectar->prepare("INSERT INTO users (nome, login, senha, foto) VALUES(:nome, :login, :senha, :foto)");

//tratar
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':foto', $foto);

//executar
$stmt->execute();

echo "Usuário cadastrado com sucesso!";
header("Location:cad-user.php");
?>