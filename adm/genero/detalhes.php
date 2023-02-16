<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include ('../conexao.php');
    ?>

    <title>Detalhes do Gênero</title>
</head>
<body>
    <h1>Show de Bola Games</h1>

    <?php 
	$query = 'SELECT * FROM genero WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['id'];
                $id = $row['id'];
                $nome = $row['nome'];
  	}
              
	?>

    <h2>Detalhes do Gênero</h2>

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
        </tbody>
    </table>
    <a href="../index.php">Retornar para o Index</a>
</body>
</html>