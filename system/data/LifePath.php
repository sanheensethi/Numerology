<?php
	if($lifepath_num==11){
		$lifepath_num=2;
	}else if($lifepath_num==22){
		$lifepath_num=4;
	}else if($lifepath_num==33){
		$lifepath_num=6;
	}
	$query = $db->prepare("SELECT * FROM lifepath WHERE id=".$lifepath_num);
	$query->execute();
	$LifePathData = $query->fetchAll(PDO::FETCH_OBJ);
?>