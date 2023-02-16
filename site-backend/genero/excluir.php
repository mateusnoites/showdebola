<html>
	<?php
	include('../conexao.php');
	?>  

	<body>

	<?php

	$query = 'DELETE FROM genero WHERE id = '.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
	?>
		
	<script type="text/javascript">
		alert("Gênero Excluído com sucesso!");
		window.location = "../index.php";
	</script>
	</body>
</html>
