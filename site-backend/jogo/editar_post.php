<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
        $id = $_POST['id'];
		$nome = $_POST['nome'];
		$avaliacao = $_POST['avaliacao'];
		$descricao = $_POST['descricao'];
		$genero_id = $_POST['genero_id'];
		
		include('../conexao.php');
		
        $query = 'UPDATE jogo SET nome ="'.$nome.'", avaliacao="'.$avaliacao.'", descricao="'.$descricao.'", genero_id='.$genero_id.' WHERE id='.$id;
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        ?>        

		<script type="text/javascript">
			alert("Jogo Editado com sucesso!");
			window.location = "../index.php";
		</script>
	</body>
</html>
