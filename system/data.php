<?php
	$tablename=$_POST['tablename'];
	$data=$_POST['data'];
	require_once "data/pdo.php";
		try{
		$ex=$db->prepare("INSERT INTO ".$tablename." (data) VALUES (".$db->quote(htmlspecialchars(htmlentities(nl2br($data)))).")");
		if($ex->execute()){
			echo "<p class='col-md-12 text-primary text-justify'>"."INSERT INTO ".$tablename." (data) VALUES (".$db->quote(htmlspecialchars(htmlentities(nl2br($data)))).")"."</p>";
			echo "<p class='text-success'>Data Inserted Successfully</p>";
			session_start();
			$_SESSION['id']="<p class='text-primary'>Last Insert Id is : [ ".$db->lastInsertId()." ] In Table : [ ".$tablename." ]</p>";
		}else{
			echo "<p class='text-danger'>Some Error , Not Inserted</p>";
		}
	}catch(PDOException $e){
		echo "<p class='text-danger'>Error : ".$e->getMessage()."</p>";
	}
?>