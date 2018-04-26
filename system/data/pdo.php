<?php
	//defined('BASEPATH') or die('Can not Access This Page');
	try{
		$db=@new PDO('mysql:host=localhost;dbname=numerology','root','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>