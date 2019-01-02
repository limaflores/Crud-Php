<?php
		
		//require diz que precisa, é obrigatório
		require ("conecta.php");



		$nome = $_POST["teste"] = array(
		   0 => "opção selecionada no primeiro select",
		   2 => "opção selecionada no segundo select",
		   20 => "opção selecionada no último select",
		);

		//mysqli_query($link, "insert into pessoas set nome='$nome', data_nascimento='$data_nascimento'");



?>