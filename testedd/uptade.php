<?php

require("conecta.php");


$nome = "Antonio";
$id = 2;
mysqli_query($link, "update pessoas set nome = '$nome' where id=$id");

