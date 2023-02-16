<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include('conexao.php')
    ?>

    <style>
        /* Estilos gerais */

        body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333;
        margin: 0;
        padding: 0;
        }

        a {
        color: #337ab7;
        text-decoration: none;
        }

        a:hover {
        text-decoration: underline;
        }

        h1, h2 {
        margin: 20px 0;
        }

        table {
        border-collapse: collapse;
        margin: 20px 0;
        width: 100%;
        }

        th, td {
        padding: 10px;
        text-align: left;
        }

        th {
        background-color: #ddd;
        }

        td {
        border-bottom: 1px solid #ddd;
        }

        /* Estilos específicos para a tabela de jogos */

        #jogos-table th:nth-child(3),
        #jogos-table td:nth-child(3) {
        text-align: center;
        }

        #jogos-table th:nth-child(4),
        #jogos-table td:nth-child(4) {
        text-transform: capitalize;
        }

        #jogos-table td:last-child {
        text-align: center;
        }

        /* Estilos específicos para a tabela de gêneros */

        #generos-table td:last-child {
        text-align: center;
        }
    </style>

    <title>Index</title>
</head>
<body>
    <h1>Show de Bola Games</h1>

    <h2>Lista de Jogos</h2>
    <br>
    <a href="./jogo/criar.php">Cadastrar novo Jogo</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Avaliação</th>
                <th>Gênero</th>
                <th>Opções</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            $query = 'SELECT * FROM jogo';
            $result = mysqli_query($db, $query) or die (mysqli_error($db));

            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nome'] . '</td>';
                    echo '<td>' . $row['avaliacao'] . '</td>';
                    echo '<td>' . $row['genero_id'] . '</td>';

                    echo '<td>';
                        echo '<a href="./jogo/detalhes.php?id='.$row['id'].'" >Detalhes</a><br/>';
                        echo '<a href="./jogo/editar.php?id='.$row['id'].'">Editar</a><br/>';
                        echo '<a href="./jogo/excluir.php?id='.$row['id'].'">Excluir</a>';
                    echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table> <br> <br>

    <h2>Lista de Gêneros</h2>
    <br>
    <a href="./genero/criar.php">Cadastrar novo Gênero</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
        </thead>
        
        <tbody>
        <?php 
            $query = 'SELECT * FROM genero';
            $result = mysqli_query($db, $query) or die (mysqli_error($db));

            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nome'] . '</td>';

                    echo '<td>';
                        echo '<a href="./genero/detalhes.php?id='.$row['id'].'" >Detalhes</a><br/>';
                        echo '<a href="./genero/editar.php?id='.$row['id'].'">Editar</a><br/>';
                        echo '<a href="./genero/excluir.php?id='.$row['id'].'">Excluir</a>';
                    echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>

    </table>
</body>
</html>