<?php

	require("conecta.php");

	$id = 2;

	mysqli_query($link, "delete from pessoas where id=$id");	

