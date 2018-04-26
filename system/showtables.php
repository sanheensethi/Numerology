<?php
	require_once "data/pdo.php";
	$ex = $db->prepare("SHOW TABLES");
	$ex->execute();
	$tables = $ex->fetchAll(PDO::FETCH_OBJ);
	echo "<select class='form-control' id='tablename'>";
		foreach($tables as $table){
			echo "<option value=".$table->Tables_in_numerology.">".$table->Tables_in_numerology."</option>";
		}
	echo "</select>";
?>