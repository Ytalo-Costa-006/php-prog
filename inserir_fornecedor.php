<?php
include 'conexao.php';
$nomefornecedor = $_POST ["fornecedor"];

$sql = "INSERT INTO fornecedor (nome_fornecedor) VALUES('$nomefornecedor')";
$inserir = mysqli_query($connection, $sql);
if(!$inserir){
	http_response_code(500);
}
?>
