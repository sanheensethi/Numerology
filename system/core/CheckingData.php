<?php
	if($_GET['firstname']==''){
		echo "<p class='text-danger'>First Name Required</p>";
		die();
	}
	if($_GET['lastname']==''){
		$ln='';
	}
	if($_GET['dob']==''){
		echo "<p class='text-danger'>Date Of Birth Required</p>";
		die();
	}
?>