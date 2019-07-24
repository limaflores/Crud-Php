<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="pt-br" />
		<title>Crud</title>
		<link href="estilos/css.css" rel="stylesheet" type="text/css" media="all"/>
		<!-- @Felipe Lima Flores 2019-->
	</head>
	<body>
		<?php
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


		




