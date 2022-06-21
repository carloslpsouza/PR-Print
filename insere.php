<?php
include 'variaveis.php';

$link = mysqli_connect('localhost','root','');
	mysqli_select_db($link, 'pt_print');

$sql = "INSERT INTO principal (
referencia, 
local, 
tipo, 
iniexe, 
hini,
hfim, 
tecnico, 
epi, 
apoio, 
altura, 
atividade1,
atividade2,
atividade3,
atividade4,
atividade5,
atividade6,
atividade7,
atividade8
) 
VALUES (
'$ref1, $ref2, $ref3, $ref4, $ref5, $ref6, $ref7, $ref8, $ref9', 
'$local', 
'$corretiva, $preventiva, $c_prog, $instalacao', 
'$iniexe', 
'$hini',
'$hfim', 
'$tecnico', 
'$epi1, $epi2, $epi3, $epi4, $epi5, $epi6, $epi7, $epi8', 
'$apoio1, $apoio2, $apoio3, $apoio4, $apoio5', 
'$altura1, $altura2, $altura3, $altura4, $altura5, $altura6, $altura7', 
'$atv1', 
'$atv2', 
'$atv3',
'$atv4',
'$atv5',
'$atv6',
'$atv7',
'$atv8'
);";

if ($link->query($sql) === TRUE) {
	echo "Enviado com sucesso<br><br>";
	} else{
	echo "Error".$sql."<br>".$link->error;
	echo $glpi;
}



mysqli_close($link);
header("Refresh: 2;url=pt.php");
?>
