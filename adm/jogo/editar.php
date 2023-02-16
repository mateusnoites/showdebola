<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include('../conexao.php')
    ?>

    <title>Editar Jogo</title>
</head>
<body>
    <h1>Show de Bola Games</h1>

    <?php 
	$query = 'SELECT * FROM jogo WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nome = $row['nome'];
        $avaliacao = $row['avaliacao'];
        $descricao = $row['descricao'];
        $genero_id = $row['genero_id'];
             
  	}   
	?>

    <h2>Editar Jogo</h2>

    <form method="post" action="editar_post.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome; ?>"> <br> <br>
        <input type="text" name="descricao" placeholder="Descrição" value="<?php echo $descricao; ?>"> <br> <br>
        <input type="number" name="avaliacao" placeholder="Avaliação" value="<?php echo $avaliacao; ?>"> <br> <br>
        <input type="number" name="genero_id" placeholder="ID do Gênero" value="<?php echo $genero_id; ?>"> <br> <br>

        <input type="submit" value="Editar">
        <input type="reset" value="Apagar">
        <a href="../index.html">Voltar para o Index</a>
    </form>
</body>
</html>