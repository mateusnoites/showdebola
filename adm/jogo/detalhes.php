<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include ('../conexao.php');
    ?>

    <title>Detalhes do Jogo</title>
</head>
<body>
    <h1>Show de Bola Games</h1>

    <?php 
	$query = 'SELECT * FROM jogo WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['id'];
                $id = $row['id'];
                $nome = $row['nome'];
                $avaliacao = $row['avaliacao'];
                $descricao = $row['descricao'];
                $genero_id = $row['genero_id'];
             
  	}
              
	?>

    <h2>Detalhes do Jogo</h2>

    <table>
        <tbody>
            <tr>
                <td><strong>ID: </strong></td>
                <td><?php echo $id; ?></td>
            </tr>

            <tr>
                <td><strong>Nome: </strong></td>
                <td><?php echo $nome; ?></td>
            </tr>


            <tr>
                <td><strong>Avaliação: </strong></td>
                <td><?php echo $avaliacao; ?></td>
            </tr>

            <tr>
                <td><strong>Descrição: </strong></td>
                <td><?php echo $descricao; ?></td>
            </tr>

            <tr>
                <td><strong>ID do Gênero: </strong></td>
                <td><?php echo $genero_id; ?></td>
            </tr>
        </tbody>
    </table>
    <a href="../index.php">Retornar para o Index</a>
</body>
</html>