<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include('../conexao.php')
    ?>

    <title>Editar Gênero</title>
</head>
<body>
    <h1>Show de Bola Games</h1>

    <?php 
	$query = 'SELECT * FROM genero WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nome = $row['nome'];        
  	}   
	?>

    <h2>Editar Gênero</h2>

    <form method="post" action="editar_post.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome; ?>"> <br> <br>

        <input type="submit" value="Editar">
        <input type="reset" value="Apagar">
        <a href="../index.html">Voltar para o Index</a>
    </form>
</body>
</html>