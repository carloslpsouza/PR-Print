<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * from principal WHERE id=3";
$faq = $db_handle->runQuery($sql);
?>
<html>

    <body>		
	   <table width="400px" border="1px">

		  <?php
		  foreach($faq as $k=>$v) {
		  ?>
			  <tr class="table-row">
				
				<td contenteditable="true" onBlur="saveToDatabase(this,'realizado1','3')" onClick="showEdit(this);"><?php echo $faq[$k]["realizado1"]; ?></td>
			  </tr>
		<?php
		}
		?>
		  
		</table>


<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="js/registra-realizado.js"></script>


		
    </body>

</html>
