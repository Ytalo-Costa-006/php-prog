<?php
include 'conexao.php';
$numproduto = $_POST ["numproduto"];
$nomeproduto = $_POST ["nomeproduto"];
$categoria = $_POST ["categoria"];
$quantidade = $_POST ["quantidade"];
$fornecedor = $_POST ["fornecedor"];

$sql = "INSERT INTO estoque (numproduto, nomeproduto, categoria, quantidade, fornecedor) VALUES('$numproduto', '$nomeproduto', '$categoria', '$quantidade', '$fornecedor')";
$inserir = mysqli_query($connection, $sql);
if(!$inserir){
	http_response_code(500);
}
?>
