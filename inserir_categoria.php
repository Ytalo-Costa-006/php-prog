<?php
include 'conexao.php';
$nomeCategoria = $_POST ["categoria"];

$sql = "INSERT INTO categoria (categoria) VALUES('$nomeCategoria')";
$inserir = mysqli_query($connection, $sql);
if(!$inserir){
	http_response_code(500);
}
?>
