<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Página inicial</title>
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	<style>
			:root{
				color-scheme: dark;
			}
		</style>
<body class="bg-gray-700 text-white flex flex-col items-center justify-center w-full min-h-dvh">
	<form action="login.php" method="post">
		<div class="flex flex-col justify-center gap-5 p-5">
	 		<img src="imagens/user.png" alt="user" class="rounded ">
			<input required name="usuario" type="text" placeholder="Usuario" class="p-2 placeholder:text-gray-400 bg-gray-700 border rounded-md border-gray-950 outline-none focus:border-gray-600">
			<input required name="senha" type="password" placeholder="Senha" class="p-2 placeholder:text-gray-400 bg-gray-700 border rounded-md border-gray-950 outline-none focus:border-gray-600">
			<input type="submit" value="Logar" class="cursor-pointer bg-slate-900 p-3 shadow-xl rounded-xl hover:bg-gray-800">
			<a href="register.php" class="text-center hover:text-gray-400">Clique para registrar-se</a>
		</div>

	</form>
</body>
</html>
