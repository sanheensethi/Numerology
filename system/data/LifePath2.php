<?php
	$query = $db->prepare("SELECT * FROM lifepath2 WHERE id=".$lifepath_num);
	$query->execute();
	$LifePathData2 = $query->fetchAll(PDO::FETCH_OBJ);
?>