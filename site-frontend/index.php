<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show de Bola Games</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>

    <?php include('./conexao.php') ?>

    <style>
        @font-face {
            font-family: 'PressStart2P';
            src: url('./PressStart2P-Regular.ttf') format('truetype');
        }


        section {
            color: white;
            background-image: linear-gradient(90deg, #9572FC 0%, #43E7AD 50.52%, #E2D45C 100%);
            padding-top: 4px;
            border-radius: 10px;
            margin-bottom: 50px;
        }

        .contedor {
            background-color: #2A2634;
            padding: 32px;
            padding-top: 24px;
            border-radius: 8px;
        }

        section h2 {
            letter-spacing: -0.47px;
        }

        section p {
            letter-spacing: -0.18px;
            color: #A1A1AA;
        }

        section {
            display: flex;
            flex-wrap: wrap;

            margin-top: 24px;
        }

        body {
            color: white;
            background-position: top center;
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-color: #121214;
            
        }

        body * {
            font-family: 'Inter', sans-serif;
            line-height: 160%;
        }
        
        header {
            text-align: center;
            margin: 50px 50px;
            font-style: 'Arial';
            font-size: 15px;
            text-align: center;
        }

        .dutra {
            margin-left: 10px;
            width: 40px;
            border-radius: 100%;
        }

        .titulo {
            font-family: 'PressStart2P';
        }

        footer {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
        }

        .cabecalho {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="titulo">SHOW DE BOLA GAMES</h1>
        <p>Professor: Thiago Dutra <img onclick="alert('O melhor')" class="dutra" src="mitodutra.jpg" alt="Professor Thiago Dutra sorrindo"></p>
    </header>
    <main class="container">
        <h4 class="categoria">Jogos</h4>

        <?php 
        $query = 'SELECT * FROM jogo';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));

        while($row = mysqli_fetch_assoc($result)) {
            echo '<section class="row">
                <div class="contedor">
                    <div class="cabecalho">
                        <h2 class="nomeDoJogo col-sm-8">'.$row['nome'].'</h2> <h4 class="avaliacao col-sm-4">Nota: '.$row['avaliacao'].'/10</h4>
                    </div>
            
                    <article class="descricao col-sm-12">
                        <p>'.$row['descricao'].'</p>
                    </article>
                </div>
            </section>';
        }        
        ?>
    </main>

    <footer>Desenvolvido por: Mateus Dias e Sabrina Vit??ria</footer>
</body>
</html>
