
<?php

	$link = mysqli_connect('localhost','root','');
	mysqli_select_db($link, 'glpi');
	
// Busca1

	$busca1 = isset( $_GET['busca1'] ) ? $_GET['busca1'] : null;
	if($busca1 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca1%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	
	// Busca2

	$busca2 = isset( $_GET['busca2'] ) ? $_GET['busca2'] : null;
	if($busca2 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca2%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	
	// Busca3

	$busca3 = isset( $_GET['busca3'] ) ? $_GET['busca3'] : null;
	if($busca3 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca3%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	
	// Busca4

	$busca4 = isset( $_GET['busca4'] ) ? $_GET['busca4'] : null;
	if($busca4 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca4%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	
	// Busca5

	$busca5 = isset( $_GET['busca5'] ) ? $_GET['busca5'] : null;
	if($busca5 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca5%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	
	
	// Busca6

	$busca6 = isset( $_GET['busca6'] ) ? $_GET['busca6'] : null;
	if($busca6 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca6%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	
	// Busca7

	$busca7 = isset( $_GET['busca7'] ) ? $_GET['busca7'] : null;
	if($busca7 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca7%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	
	// Busca8

	$busca8 = isset( $_GET['busca8'] ) ? $_GET['busca8'] : null;
	if($busca8 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca8%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	
	// Busca9

	$busca9 = isset( $_GET['busca9'] ) ? $_GET['busca9'] : null;
	if($busca9 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca9%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}
	

	// Busca10

	$busca10 = isset( $_GET['busca10'] ) ? $_GET['busca10'] : null;
	if($busca10 != "") {
		$sql = "SELECT * FROM glpi_tickets WHERE id LIKE '%$busca10%' ORDER BY id ASC ";
		$query = mysqli_query($link,$sql);
		
		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysqli_fetch_object($query)) {
			echo "<div class='abertura'>";
			echo $row->date. "&nbsp;</div>";
			echo "<div class='chamado'>";
			echo utf8_encode($row->content."&nbsp;</div>");
			echo "<div class='obs'>&nbsp;</div>";
			echo "<div class='id'>GLPI Nº&nbsp;";
			echo $row->id. "</div>";
			$cont ++;
		}
	}


?>