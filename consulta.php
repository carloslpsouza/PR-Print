<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Controle PT</title>
  <link rel="stylesheet" href="css/consulta_styles.css">
</head>
<body>
<header>
	<div class="topo">
		<div class="cabelogo">
			<img src="../PT/img/logo_concer.png" width="120" height="85" border="0">
		</div>
		<div class="cabe">
		CONTROLE DE PERMISSÕES DE TRABALHO
		</div>
	</div>
</header>
<nav>
	<div class="divnav">
		<form action="consulta.php" id="form1" name="form1" method="POST">
			Buscar:<br/><br/>
			<label>Data ou PT:</label><br/>
			<input size="15" style="margin-bottom: 5px; margin-top: 5px; border-top: hidden; border-right: hidden; border-left: hidden; background-color: rgba(255,255,255,0.5);" type="text" name="data" value=""><br/>
			<input type="submit" name="submit" value="Buscar">
		</form>
		
	</div>	
</nav>
<div class="conteiner">
<?php

if (isset($_POST['data'])){
	$data = $_POST['data'];
}else{
	$data = date('d/m/Y');
	echo "aguardando DATA";
	//print date('m/Y')
}
echo $data;


require_once("dbcontroller.php");
$db_handle = new DBController();
$sql ="SELECT * FROM principal WHERE iniexe LIKE '%$data%' OR ID LIKE '$data' ORDER BY id DESC LIMIT 30";

$faq = $db_handle->runQuery($sql);

?>

<?php
$result = $db_handle->runQuery($sql);

foreach($faq as $k=>$v) {

?>
<div class="painel">
	<div class="grupo">
		<div class="campos"><strong>PT Número: <?php echo $faq[$k]["ID"]; ?></strong></div>
		<div class="campos">DT Exec.:<?php echo $faq[$k]["iniexe"]; ?></div>
		<div class="campos">Téc.:<?php echo $faq[$k]["tecnico"]; ?></div>
		<div class="campos">Local:<?php echo $faq[$k]["local"]; ?></div>
	</div>
	<div class="grupo">
		<div class="campos">Tipo:<?php echo $faq[$k]["tipo"]; ?></div>
		<div class="campos">H Ini.:<?php echo date('H:i', strtotime($faq[$k]["hini"])); ?></div>
		<div class="campos">H Fim:<?php echo date('H:i', strtotime($faq[$k]["hfim"])); ?></div>
		<div class="campos">Ref.: <?php echo $faq[$k]["referencia"]; ?></div>
	</div>
	<div class="grupo">
		<div class="campos">EPI:<br><?php echo $faq[$k]["epi"]; ?></div>
	</div>
	<div class="grupo">
		<div class="campos">Apoio:<br><?php echo $faq[$k]["apoio"]; ?></div>
	</div>
	<div class="grupo">
		<div class="campos">Altura:<br><?php echo $faq[$k]["altura"]; ?></div>
	</div>
	<div class="atividades">
		<div class="campoatv"><strong>Previsto / Realizado:</strong></div>
		<div class="campoatv">
			<table>
				<tr>
					<td class="atv">
						
						<?php 
							$atv1 = $faq[$k]["atividade1"];
							$ida = $faq[$k]["ID"];
							//var_dump($id);
							$id1 = strstr($atv1, 'GLPI Nº');
							$atividade1 = strstr($atv1, 'GLPI Nº', true);
							$filtro = preg_replace("/[^0-9]/", "", $id1);
							echo $id1, $atividade1;
							if ($filtro != null){
							print "<a href='http://glpi.concer.com.br/front/ticket.form.php?id=".$filtro."'target=_blank>GLPI</a>";	
							
						?>
					</td>
					
					<td class="real" contenteditable="true" onBlur="saveToDatabase(this,'realizado1','<?php echo $faq[$k]["ID"]; ?>')" onClick="showEdit(this);">
					<?php echo $faq[$k]["realizado1"]; ?>						
					</td>
				</tr><?php } ?>
			</table>

			<table>
				<tr>
					<td class="atv">
						
						<?php 
							$atv1 = $faq[$k]["atividade2"];
							$ida = $faq[$k]["ID"];
							//var_dump($id);
							$id1 = strstr($atv1, 'GLPI Nº');
							$atividade1 = strstr($atv1, 'GLPI Nº', true);
							$filtro = preg_replace("/[^0-9]/", "", $id1);
							echo $id1, $atividade1;
							if ($filtro != null){
							print "<a href='http://glpi.concer.com.br/front/ticket.form.php?id=".$filtro."'target=_blank>GLPI</a>";	
							
						?>
					</td>
					
					<td class="real" contenteditable="true" onBlur="saveToDatabase(this,'realizado2','<?php echo $faq[$k]["ID"]; ?>')" onClick="showEdit(this);">
					<?php echo $faq[$k]["realizado2"]; ?>						
					</td>
				</tr><?php } ?>
			</table>

			<table>
				<tr>
					<td class="atv">
						
						<?php 
							$atv1 = $faq[$k]["atividade3"];
							$ida = $faq[$k]["ID"];
							//var_dump($id);
							$id1 = strstr($atv1, 'GLPI Nº');
							$atividade1 = strstr($atv1, 'GLPI Nº', true);
							$filtro = preg_replace("/[^0-9]/", "", $id1);
							echo $id1, $atividade1;
							if ($filtro != null){
							print "<a href='http://glpi.concer.com.br/front/ticket.form.php?id=".$filtro."'target=_blank>GLPI</a>";	
							
						?>
					</td>
					
					<td class="real" contenteditable="true" onBlur="saveToDatabase(this,'realizado3','<?php echo $faq[$k]["ID"]; ?>')" onClick="showEdit(this);">
					<?php echo $faq[$k]["realizado3"]; ?>						
					</td>
				</tr><?php } ?>
			</table>

			<table>
				<tr>
					<td class="atv">
						
						<?php 
							$atv1 = $faq[$k]["atividade4"];
							$ida = $faq[$k]["ID"];
							//var_dump($id);
							$id1 = strstr($atv1, 'GLPI Nº');
							$atividade1 = strstr($atv1, 'GLPI Nº', true);
							$filtro = preg_replace("/[^0-9]/", "", $id1);
							echo $id1, $atividade1;
							if ($filtro != null){
							print "<a href='http://glpi.concer.com.br/front/ticket.form.php?id=".$filtro."'target=_blank>GLPI</a>";	
							
						?>
					</td>
					
					<td class="real" contenteditable="true" onBlur="saveToDatabase(this,'realizado4','<?php echo $faq[$k]["ID"]; ?>')" onClick="showEdit(this);">
					<?php echo $faq[$k]["realizado4"]; ?>						
					</td>
				</tr><?php } ?>
			</table>

			<table>
				<tr>
					<td class="atv">
						
						<?php 
							$atv1 = $faq[$k]["atividade5"];
							$ida = $faq[$k]["ID"];
							//var_dump($id);
							$id1 = strstr($atv1, 'GLPI Nº');
							$atividade1 = strstr($atv1, 'GLPI Nº', true);
							$filtro = preg_replace("/[^0-9]/", "", $id1);
							echo $id1, $atividade1;
							if ($filtro != null){
							print "<a href='http://glpi.concer.com.br/front/ticket.form.php?id=".$filtro."'target=_blank>GLPI</a>";	
							
						?>
					</td>
					
					<td class="real" contenteditable="true" onBlur="saveToDatabase(this,'realizado5','<?php echo $faq[$k]["ID"]; ?>')" onClick="showEdit(this);">
					<?php echo $faq[$k]["realizado5"]; ?>						
					</td>
				</tr><?php } ?>
			</table>

			<table>
				<tr>
					<td class="atv">
						
						<?php 
							$atv1 = $faq[$k]["atividade6"];
							$ida = $faq[$k]["ID"];
							//var_dump($id);
							$id1 = strstr($atv1, 'GLPI Nº');
							$atividade1 = strstr($atv1, 'GLPI Nº', true);
							$filtro = preg_replace("/[^0-9]/", "", $id1);
							echo $id1, $atividade1;
							if ($filtro != null){
							print "<a href='http://glpi.concer.com.br/front/ticket.form.php?id=".$filtro."'target=_blank>GLPI</a>";	
							
						?>
					</td>
					
					<td class="real" contenteditable="true" onBlur="saveToDatabase(this,'realizado6','<?php echo $faq[$k]["ID"]; ?>')" onClick="showEdit(this);">
					<?php echo $faq[$k]["realizado6"]; ?>						
					</td>
				</tr><?php } ?>
			</table>

			<table>
				<tr>
					<td class="atv">
						
						<?php 
							$atv1 = $faq[$k]["atividade7"];
							$ida = $faq[$k]["ID"];
							//var_dump($id);
							$id1 = strstr($atv1, 'GLPI Nº');
							$atividade1 = strstr($atv1, 'GLPI Nº', true);
							$filtro = preg_replace("/[^0-9]/", "", $id1);
							echo $id1, $atividade1;
							if ($filtro != null){
							print "<a href='http://glpi.concer.com.br/front/ticket.form.php?id=".$filtro."'target=_blank>GLPI</a>";	
							
						?>
					</td>
					
					<td class="real" contenteditable="true" onBlur="saveToDatabase(this,'realizado7','<?php echo $faq[$k]["ID"]; ?>')" onClick="showEdit(this);">
					<?php echo $faq[$k]["realizado7"]; ?>						
					</td>
				</tr><?php } ?>
			</table>


			<table>
				<tr>
					<td class="atv">
						<?php 
							$atv1 = $faq[$k]["atividade8"];
							$ida = $faq[$k]["ID"];
							//var_dump($id);
							$id1 = strstr($atv1, 'GLPI Nº');
							$atividade1 = strstr($atv1, 'GLPI Nº', true);
							$filtro = preg_replace("/[^0-9]/", "", $id1);
							echo $id1, $atividade1;
							if ($filtro != null){
							print "<a href='http://glpi.concer.com.br/front/ticket.form.php?id=".$filtro."'target=_blank>GLPI</a>";	
						?>
					</td>
					<td class="real" contenteditable="true" onBlur="saveToDatabase(this,'realizado8','<?php echo $faq[$k]["ID"]; ?>')" onClick="showEdit(this);">
					<?php echo $faq[$k]["realizado8"]; ?>						
					
					</td>
				</tr>
			<?php } ?>
			</table>
	</div>

</div>
	 	

</div>
		
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/registra-realizado.js"></script>

</body>

</html>
<?php
}
?>