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
				<form class="flex flex-col gap-5 p-5" action="inserir_fornecedor.php">
					<input required type="text" name="fornecedor" placeholder="Nome do fonecedor" class="mt-10 bg-gray-700 text-gray-50 p-3 border rounded-md border-gray-950">
					<div class="flex justify-center gap-3">

		<a class="text-center w-32 text-gray-50 cursor-pointer bg-slate-900 p-3 shadow-xl rounded-xl hover:bg-gray-800" href="produtos.php" role="button">
	Menu
	</a>
	<input class="w-32 text-gray-50 cursor-pointer bg-slate-900 p-3 shadow-xl rounded-xl hover:bg-gray-800" type="submit" value="Cadastrar">
	</div>
				</form>
			</div>
		</div>

	<script>
		document.forms[0].addEventListener("submit", async function(event){
			event.preventDefault()
			const response = await fetch(this.action,{
				method:"post",
				body:new URLSearchParams(new FormData(this))
			})
			if(response.ok){
				alert("Categoria acidionada com sucesso")
			}else{
				alert("Categoria não adicionada")
			}
		})
	</script>
</body>
</html>
