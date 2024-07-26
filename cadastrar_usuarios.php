<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registre-se</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-700 text-white flex flex-col items-center justify-center w-full min-h-dvh">
	<form action="cadastro_usuario.php" method="post">
		<div class="flex flex-col justify-center gap-5 p-5">
			<img src="imagens/user.png" class="rounded" alt="user">
			<input  required name="email" type="text" placeholder="Email" class="p-2 placeholder:text-gray-400 bg-gray-700 border rounded-md border-gray-950 outline-none focus:border-gray-600">
			<input required name="nome" type="text" placeholder="Nome" class="p-2 placeholder:text-gray-400 bg-gray-700 border rounded-md border-gray-950 outline-none focus:border-gray-600">
			<input required name="senha" type="password" placeholder="Senha" class="p-2 placeholder:text-gray-400 bg-gray-700 border rounded-md border-gray-950 outline-none focus:border-gray-600">
			<input type="submit" value="Registre-se" class="cursor-pointer bg-slate-900 p-3 shadow-xl rounded-xl hover:bg-gray-800">
		</div>
	</form>
</body>
</html>
