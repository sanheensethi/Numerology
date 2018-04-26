<?php
	$tablename=$_POST['tablename'];
	require_once "data/pdo.php";
		try{
		$ex=$db->prepare("CREATE TABLE ".$tablename."(id int PRIMARY KEY AUTO_INCREMENT,data TEXT)");
		if($ex->execute()){
			echo "<p class='text-success'>Table Created Successfully</p>";
			session_start();
			$_SESSION['table']="<p class='text-primary'>Last Table Created : [ ".$tablename." ]</p>";
		}else{
			echo "<p class='text-danger'>Some Error , Not Created</p>";
		}
	}catch(PDOException $e){
		echo "<p class='text-danger'>Error : ".$e->getMessage()."</p>";
	}
?>