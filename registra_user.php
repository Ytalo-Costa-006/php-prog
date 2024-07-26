<?php
include 'conexao.php';
$senhaUsuario = $_POST ["senha"];
$emailUsuario = $_POST ["email"];
$nomeUsuario = $_POST ["nome"];

$sql = "INSERT INTO usuarios(senha_usuario, nome_usuario, mail_usuario) VALUES('$senhaUsuario' ,'$nomeUsuario', '$emailUsuario')";
$inserir = mysqli_query($connection, $sql);
if(!$inserir){
	http_response_code(500);
	return;
}

header("Location: index.php");
?>
