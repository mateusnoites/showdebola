<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include('../conexao.php');
    ?>

    <style>
        /* Estilos para o título principal */
        h1 {
        font-size: 2.5em;
        text-align: center;
        margin-bottom: 30px;
        }

        /* Estilos para o subtítulo */
        h2 {
        font-size: 1.5em;
        margin-bottom: 20px;
        }

        /* Estilos para o formulário */
        form {
        width: 50%;
        margin: 0 auto;
        }

        label {
        font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
        display: block;
        width: 100%;
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        }

        input[type="submit"],
        input[type="reset"] {
        display: inline-block;
        padding: 10px;
        margin-right: 10px;
        border-radius: 5px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        }

        a {
        color: #007bff;
        }
    </style>

    <title>Criar Gênero</title>
</head>
<body>
    <h1>Show de Bola Games</h1>

    <h2>Adicionar novo Gênero</h2>
    <br>
    <form method="post" action="./criar_post.php">
        <input type="text" name="nome" placeholder="Nome"> <br> <br>

        <input type="submit" value="Criar">
        <input type="reset" value="Apagar">
        <a href="../index.php">Voltar para o Index</a>
    </form>
</body>
</html>