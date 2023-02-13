<?php
  $servername = "localhost";
  $username = "root";
  $password = "senha";
  $dbname = "showdebola";

  // Cria a conexão
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Verifica se a conexão foi bem-sucedida
  if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
  }
  echo "Conexão realizada com sucesso <br><br>";
  $sql = "SELECT * FROM genero";
  $result = mysqli_query($conn, $sql);

  echo "<h4>Gêneros:</h4>";
  if (mysqli_num_rows($result) > 0) {
      // Exibir cada linha da tabela
      while($row = mysqli_fetch_assoc($result)) {
          echo $row["id"]. " - Nome: " . $row["nome"]. "<br>";
      }
  } else {
      echo "Nenhum registro encontrado";
  }
?>