<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
        $id = $_POST['id'];
		$nome = $_POST['nome'];
		
		include('../conexao.php');
		
        $query = "UPDATE genero SET nome = '$nome' WHERE id = " . $id;
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        ?>        

		<script type="text/javascript">
			alert("Gênero Editado com sucesso!");
			window.location = "../index.php";
		</script>
	</body>
</html>
