<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="pt-br" />
		<title>Treino - Layout Responsivo</title>
		<link href="css/geral.css" rel="stylesheet" type="text/css" media="all"/>

	</head>
		<body>

		
		<?php
		/*
		//include "caminho" mas deixa passar

		
		//require diz que precisa, é obrigatório
		require ("conecta.php");


		$nome = "Felipe";
		$data_nascimento = "1990-06-19";

		//mysqli_query($link, "insert into pessoas set nome='$nome', data_nascimento='$data_nascimento'");


		for ($i=1; $i <= 8 ; $i++) { 
			$novonome = $nome.$i;
			mysqli_query($link, "insert into pessoas set nome='$novonome', data_nascimento='$data_nascimento'");
		}


		//Acrescentar o campo número de semanas.
		*/
		$valorVindoBD="teste";
		?>
	


		<form action="recebeinsere.php" method"="post>
			<?php for ($i=1; $i <= 8 ; $i++) { ?>
				<select name="teste[]">
					<option value="<?= $valorVindoBD ?>"> <?= $valorVindoBD ?></option>
				</select>
			<?php } ?>
			<input type="submit" value"ok" name="ok" />
		</form>


	</body>
</html>

		




