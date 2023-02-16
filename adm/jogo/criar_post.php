<html>
    <?php 
    include('../conexao.php');
    ?>

<body>
    <?php 
        $nome = $_POST['nome'];
        $avaliacao = $_POST['avaliacao'];
        $descricao = $_POST['descricao'];
        $genero_id = $_POST['genero_id'];

        $query = "INSERT INTO jogo (nome, avaliacao, descricao, genero_id) VALUES ('" . $nome . "', '" . $avaliacao . "', '" . $descricao . "', " . $genero_id . ")";

        mysqli_query($db,$query) or die ('Erro no banco de dados: '.mysqli_error($db));
					
	?>
	<script type="text/javascript">
		alert("Jogo Adicionado.");
		window.location = "../index.php";
	</script>
</body>
</html>