<?php
include "../includes/conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cnpj = $_POST['cnpj'];
$estado = $_POST['estado'];
$sql = "insert into ongs(nome, telefone, email, cnpj, estado) values('$nome', '$telefone', '$email', '$cnpj', '$estado')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>