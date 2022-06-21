<?php
require_once("dbcontroller.php");
//Inicio Variaveis

$coluna = $_POST["column"];
$id = $_POST["id"];

//Fim Variaveis




$db_handle = new DBController();
$result = $db_handle->executeUpdate("UPDATE principal set $coluna = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);;


echo "Gravado com sucesso";


?>