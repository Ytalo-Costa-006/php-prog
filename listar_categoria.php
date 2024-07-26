<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://unpkg.com/tabulator-tables@4.1.4/dist/css/tabulator.min.css">
	<script src="https://unpkg.com/tabulator-tables@4.1.4/dist/js/tabulator.min.js"></script>
</head>
<body class="bg-gray-700 text-gray-50">
	<?php
		session_start();
		$usuario = $_SESSION['usuario'];
		if(!isset($_SESSION['usuario'])){
			header('Location: index.php');
		}
		include "conexao.php";
		$produtos = $connection->query("SELECT * FROM categoria ORDER BY id_categoria ASC");
		$produtosArray = array();

		if($produtos->num_rows > 0){
			while($produto = $produtos->fetch_assoc()){
				$produtosArray[] = $produto;
			}
		}
		mysqli_close($connection);
	?>
	<div class="text-center m-5 p-7 text-5xl font-bold size">
		<h1>Listar Categorias</h1>
	</div>

	<div class="bg-gray-700 m-5 text-gray-50" id="lista"></div>






<script>
(() => {
const produtos = <?php echo json_encode($produtosArray) ?>

const table = new Tabulator("#lista", {
	data: produtos,
	layout: "fitColumns",
	responsiveLayout: "hide",
	addRowPos: "top",
	history: true,
	pagination: "local",
	paginationSize: 20,
	paginationCounter: "rows",
	movableColumns: true,
	initialSort: [
		{ column: "id_estoque", dir: "asc" }
	],

	columns:[
			{field: "id_categoria", title:"ID", width:60},
			{field: "categoria", title:"Nome", headerFilter:"input"},
			{title: "Açoes", headerSort:false, width: 155, formatter: cell =>
		'<div class="flex items-center justify-center gap-1.5">' +
			`<a href="editar.php?id=${cell.getRow().getData().id_estoque}" class="mr-3 bg-yellow-600 hover:bg-yellow-700 text-gray-200 inline-flex items-center text-center px-2 rounded-md" role="button">Editar</button>` +

			`<a href="excluir.php?id=${cell.getRow().getData().id_estoque}" class="bg-red-700 hover:bg-red-800 text-gray-200 inline-flex items-center text-center px-2 rounded-md" role="button">Excluir</button>` +
		'</div>'
			}
		],
		locale: "pt-BR",
		langs: {
			"pt-BR": {
				data: {
					loading: "Carregando",
					error: "Erro"
				},
				groups: {
					item: "item",
					items: "itens"
				},
				pagination: {
					page_size: "Tamanho da página",
					page_title: "Mostrar página",
					first: "Primeira",
					first_title: "Primeira página",
					last: "Última",
					last_title: "Última página",
					prev: "Anterior",
					prev_title: "Página anterior",
					next: "Próxima",
					next_title: "Próxima página",
					all: "Todos",
					counter: {
						showing: "Mostrando",
						of: "de",
						rows: "linhas",
						pages: "páginas"
					}
				},
				headerFilters: {
					default: "Pesquisar pelo nome"
				}
			}
		}

	})
})()
</script>
</body>
</html>
