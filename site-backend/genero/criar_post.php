<html>
    <?php 
    include('../conexao.php');
    ?>

<body>
    <?php 
        $nome = $_POST['nome'];

        $query = "INSERT INTO genero (nome) VALUES ('$nome')";

        mysqli_query($db,$query) or die ('Erro no banco de dados: '.mysqli_error($db));
					
	?>
	<script type="text/javascript">
		alert("Gênero Adicionado.");
		window.location = "../index.php";
	</script>
</body>
</html>