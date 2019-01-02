<?php

require("conecta.php");

$retorno = mysqli_query($link, "select * from pessoas");

while($array = mysqli_fetch_array($retorno)){


	//print_r ($array);
	echo "id: ".$array["id"];
	echo "<br>";
	echo "Nome ".$array["nome"];
	echo "<br>";
	echo "Data nascimento ".$array["data_nascimento"];
	echo "<hr>";


}