<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class= "bg-gray-700 flex flex-col items-center justify-center w-full min-h-dvh">

		<div class="flex flex-col gap-5 p-5">
			<div class="flex flex-col gap-5 p-5">
			<h1 class="text-center text-5xl text-gray-50">Formulario de cadastro</h1>
				<form class="flex flex-col gap-5 p-5" action="_inserir_produto.php">
					<input type="text" name="nomeproduto" placeholder="Nome do produto" class="bg-gray-700 text-gray-50 p-3 border rounded-md border-gray-950">
					<input type="text" name="numproduto" placeholder="Numero do produto" class="bg-gray-700 text-gray-50 p-3 border rounded-md border-gray-950">
					<select class="bg-gray-700 text-gray-50 p-3 border rounded-md border-gray-950" name="categoria" required>
						<option value hidden disabled selected>Selecione a categoria</option>
						<?php
							include 'conexao.php';
							$sql = "SELECT * FROM categoria order by categoria ASC";
							$buscar = mysqli_query($connection, $sql);
							while ($array = mysqli_fetch_array($buscar)) {
								$id_categoria = $array['id_categoria'];
								$nome_categoria = $array['categoria'];

								echo "<option value=\"\">$nome_categoria</option>";
							}
						?>

					<input name="quantidade" type="text" placeholder="Disponiveis" class="text-gray-50 bg-gray-700 p-3 border rounded-md border-gray-950">

					</select><select class="p-3 bg-gray-700 text-gray-50 border rounded-md border-gray-950" name="fornecedor">
					<option value hidden disabled selected>Selecione o fornecedor</option>
						<?php
							include 'conexao.php';
							$sql2 = "SELECT * FROM fornecedor";
							$buscar = mysqli_query($connection, $sql2);
							while ($array2 = mysqli_fetch_array($buscar)) {
								$id_fornecedor = $array2['id_fornecedor'];
								$nome_fornecedor = $array2['nome_fornecedor'];

								echo "<option value=\"$id_fornecedor\">$nome_fornecedor</option>";
							}
						?>
					</select>
				<form>
			</div>
		</div>
	<div class="flex justify-center gap-3">
		<a class="text-center w-32 text-gray-50 cursor-pointer bg-slate-900 p-3 shadow-xl rounded-xl hover:bg-gray-800" href="produtos.php" role="button">
			Menu
		</a>
		<input class="w-32 text-gray-50 cursor-pointer bg-slate-900 p-3 shadow-xl rounded-xl hover:bg-gray-800" type="submit" value="Cadastrar">
	</div>
	<script>
		document.forms[0].addEventListener("submit", async function(event){
			event.preventDefault()
			const response = await fetch(this.action,{
				method:"post",
				body:new URLSearchParams(new FormData(this))
			})
			if(response.ok){
				alert("Produto acidionado com sucesso")
			}else{
				alert("Produto não adicionado")
			}
		})
	</script>
</body>
</html>
