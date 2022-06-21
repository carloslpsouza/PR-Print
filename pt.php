<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Permissao de Trabalho</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/jquery-ui.css">

<!--script para calendário -->
  
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/consulta.js"></script>

  
</head>

<body>
<?php
include 'connect.php';
// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbnamept);
// Verifica
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM principal WHERE id!=0 ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Associa resultados
    while($row = $result->fetch_assoc()) {
?>
<form action="insere.php" method="post">

<table border='1' bordercolor='000' cellspacing='0' cellpadding='0' width='800'>
<tr>
  <td><table width="100%" border="0">
    <tr>
        <td><img src="../PT/img/logo_concer.png" width="120" height="85" border="0"></td>
        <td align="center"><b><font size="5">PT - Permissao de trabalho</font></b></td>
      </tr>
  </table></td>
  <td>
    <table border="0" width="100%">
  <tr>
    <td align="center"><b>N de Controle</b></td>
  </tr>
  <tr>
    <td align="center"><b><?php echo $row["ID"]+1 ; ?></b></td>
  </tr>
  </table>
<?php
    }
}

$conn->close();

?>
    
  </td>
</tr>
</table>
<p></p>
<table border='1' bordercolor='000' cellspacing='0' cellpadding='0' width='800'>
<tr>
  <td>
  <p></p>
  Referencia: 
  (<INPUT TYPE="checkbox" NAME="praca" VALUE="Praça">)Praca
  (<INPUT TYPE="checkbox" NAME="sede" VALUE="Sede">)Sede 
  (<INPUT TYPE="checkbox" NAME="iluminacao" VALUE="Iluminação">)Iluminação 
  (<INPUT TYPE="checkbox" NAME="monitoramento" VALUE="Monitoramento">)Monitoramento 
  (<INPUT TYPE="checkbox" NAME="radio" VALUE="Rádio">)Rádio 
  (<INPUT TYPE="checkbox" NAME="fibra" VALUE="Fibra Otica">)Fibra Óptica<br>
  (<INPUT TYPE="checkbox" NAME="outros" VALUE="Outros">)Outros:
  <input type="text" NAME="ref_out" size="15" maxlength="20" class="inp"><br>
  Local:
  <label for="select"></label>
  <select name="local" id="select" class="inp">
    <option></option>
    <option>Rod.-Baixada</option>
    <option>Rod.-Serra</option>
    <option>Rod.-Areal à Levi Gasp</option>
    <option>Rod.-Trecho mineiro</option>
    <option>CEWL</option>
    <option>Praças</option>
    <option>SAU's</option>
  </select><br>
  
  Tipo de manutencao: 
  (<INPUT TYPE="checkbox" NAME="corretiva"  VALUE="Corretiva">)Corretiva 
  (<INPUT TYPE="checkbox" NAME="preventiva" VALUE="Preventiva">)Preventiva 
  (<INPUT TYPE="checkbox" NAME="c_prog" VALUE="Corretiva Programada">)Corretiva Programada 
  (<INPUT TYPE="checkbox" NAME="instalacao" VALUE="Instalação">)Instalação<br><br>
  </td>
</tr>
</table><table border='1' bordercolor='000' cellspacing='0' cellpadding='0' width='800'>
<tr>
  <td>  
  Data da Execucao:<input type="date" name="iniexe" id="datepicker" size="10" maxlength="10" class="inp"><br>
  Hora inicio da Atividade:<input  name="hini" type="time" value="<?php print date('H:i')?>" class="inp"><br>
  Hora fim da Atividade:<input  name="hfim" type="time" value="<?php print date('H:i')?>" class="inp"><br>
  Responsável:
  <label for="select"></label>
  <select name="tecnico" id="select" class="inp">
    <option></option>
    <option>Carlos Souza - 3404</option>
    <option>Carlos José - 2709</option>
    <option>Elbert Rosário - 2128</option>
    <option>José Marinho - 2150</option>
    <option>Marcus Vinicius - 2771</option>
    <option>Celio Almeida - 1188</option>
  </select>
  <br><br>
</td>
  <td align="center" width="350px">
  ________________________<br>
  Supervisao (Manutencao)<br>
  </td>
</tr>
</table>
<table border='1' bordercolor='000' cellspacing='0' cellpadding='0' width='800'>
<tr>
  <td align="center" bgcolor='#CCCCCC'>AST</td>
</tr>
<tr>
  <td>
  <table border="0" width="100%">
<tr>
  <td>
  (<INPUT TYPE="checkbox" NAME="capacete" VALUE="Capacete">) Capacete<br>
  (<INPUT TYPE="checkbox" NAME="luva" VALUE="Luva">) Luva de Raspa  <br>
  (<INPUT TYPE="checkbox" NAME="atpv" VALUE="Luva ATPV">) Luva ATPV   <br>
  (<INPUT TYPE="checkbox" NAME="cinto" VALUE="Cinto de Segurança">) Cinto de seguranca    <br>
  </td>
  <td>
  (<INPUT TYPE="checkbox" NAME="oculos" VALUE="Oculos Contra Impacto">) Oculos contra impacto   <br>
  (<INPUT TYPE="checkbox" NAME="auricular" VALUE="Protetor Auricular">) Protetor Auricular   <br>
  </td>
  <td>
  (<INPUT TYPE="checkbox" NAME="outepi" VALUE="Outros">)Outros:<input type="text" name="outepitext" size="40" class="inp" /><br>
  </td>
</tr>
</table>
  </td>
</tr>
<tr>
  <td>
  Precisa de isolamento do local 
  (<input type="radio" name="isolamento" id="isolamento" value="sim" />)sim 
  (<input type="radio" name="isolamento" id="isolamento" value="não" />)nao<br>
  (<INPUT TYPE="checkbox" NAME="cones" VALUE="Cones">) Cones<br>
  (<INPUT TYPE="checkbox" NAME="vtr" VALUE="VTR Apoio">) Viatura de Apoio<br>
  (<INPUT TYPE="checkbox" NAME="outapoio" VALUE="Outros">) Outros:<input type="text" name="outapoiotext" size="40" class="inp"/><br>
  <p></p>
  </td>
</tr>
<tr>
  <td>
  Trabalho em altura? 
  (<input type="radio" name="altura" id="altura" value="sim" />)sim 
  (<input type="radio" name="altura" id="altura" value="não" />) nao <br>
  (<INPUT TYPE="checkbox" NAME="munk" VALUE="Munk">)Uso de Munk 
  (<INPUT TYPE="checkbox" NAME="andaime" VALUE="Andaime">) Uso de Andaime 
  (<INPUT TYPE="checkbox" NAME="plataforma" VALUE="Plataforma">)Uso de Plataforma elevatoria 
  (<INPUT TYPE="checkbox" NAME="escada" VALUE="Escada">) Escada<br>
  (<INPUT TYPE="checkbox" NAME="outalt" VALUE="Outros">) Outros:<input type="text" name="outalttext" size="40" class="inp"/><br>
  <p></p>
  </td>
</tr>
</table>
<table border='1' bordercolor='000' cellspacing='0' cellpadding='0' width='800'>
<tr>
  <td align="center" bgcolor='#CCCCCC'>ATIVIDADES:</td>
</tr>
</table>

<table width="800" border="1" cellspacing="0" class="th">
  <tr>
    <th width="50px">Chamado</td>
    <th width="100px">Data de abertura</td>
    <th width="350px">Chamado</td>
    <th width="300px">Observações</td>
  </tr>
</table>
<table width="800" border="1" cellspacing="0" class="">
 <tr>
  <td>
    <div class="consulta">
    
	<input name="serv1" type="text" class="form" id="busca1" onkeyUp="sendfunct1()" value="" size="10"/>
    <input type="hidden" id="saida1" name="saida1" value="">
    
    </div>
    <div id="entrada1"></div>
   </td>
  </tr>
  
  <tr>
  <td>
    <div class="consulta">
    
	<input name="serv1" type="text" class="form" id="busca2" onkeyUp="sendfunct2()" value="" size="10"/>
    <input type="hidden" id="saida2" name="saida2" value="">
    
    </div>
    <div id="entrada2"></div>
   </td>
  </tr>
  
  <tr>
  <td>
    <div class="consulta">
    
	<input name="serv1" type="text" class="form" id="busca3" onkeyUp="sendfunct3()" value="" size="10"/>
    <input type="hidden" id="saida3" name="saida3" value="">
    
    </div>
    <div id="entrada3"></div>
   </td>
  </tr>
  
  <tr>
  <td>
    <div class="consulta">
    
	<input name="serv1" type="text" class="form" id="busca4" onkeyUp="sendfunct4()" value="" size="10"/>
    <input type="hidden" id="saida4" name="saida4" value="">
    
    </div>
    <div id="entrada4"></div>
   </td>
  </tr>
  
  <tr>
  <td>
    <div class="consulta">
    
	<input name="serv1" type="text" class="form" id="busca5" onkeyUp="sendfunct5()" value="" size="10"/>
    <input type="hidden" id="saida5" name="saida5" value="">
    
    </div>
    <div id="entrada5"></div>
   </td>
  </tr>
  
  <tr>
  <td>
    <div class="consulta">
    
	<input name="serv1" type="text" class="form" id="busca6" onkeyUp="sendfunct6()" value="" size="10"/>
    <input type="hidden" id="saida6" name="saida6" value="">
    
    </div>
    <div id="entrada6"></div>
   </td>
  </tr>
  
  <tr>
  <td>
    <div class="consulta">
    
	<input name="serv1" type="text" class="form" id="busca7" onkeyUp="sendfunct7()" value="" size="10"/>
    <input type="hidden" id="saida7" name="saida7" value="">
    
    </div>
    <div id="entrada7"></div>
   </td>
  </tr>
  
  <tr>
  <td>
    <div class="consulta">
    
	<input name="serv1" type="text" class="form" id="busca8" onkeyUp="sendfunct8()" value="" size="10"/>
    <input type="hidden" id="saida8" name="saida8" value="">
    
    </div>
    <div id="entrada8"></div>
   </td>
  </tr>
</table>
<br>
</table>
<table border='1' bordercolor='000' cellspacing='0' cellpadding='0' width='800'>
<tr>
  <td align="center" bgcolor='#CCCCCC'>TERMO DE ACEITAÇÃO:</td>
</tr>
</table>
<br>
</table>

<br>
<br>
	<div class="dataclient">Data:____/____/____</div>
	<div class="assclient">Cliente Responsável<br>de acordo</div><br>
	<input name="enviar" type="submit" />
	</form>

</body>