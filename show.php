<?php
define('BASEPATH','system/');
define('DS',DIRECTORY_SEPARATOR);
require_once "system".DS."coremin/GettingData.min.php";
require_once "system".DS."core/CheckingData.php";
require_once "system".DS."coremin/InitializingData.min.php";
require_once "system".DS."coremin/SplitAndCheck.min.php";
require_once "system".DS."coremin/Calculations.min.php";
require_once "system".DS."coremin/TotalVowelConsoSums.min.php";
require_once "system".DS."coremin/DOBCalculation.min.php";
require_once "system".DS."coremin/SettingNumbers.min.php";
require_once "system".DS."coremin/MaturityCalc.min.php";
require_once "system".DS."coremin/DOBDate.min.php";
require_once "system".DS."coremin/Karma.min.php";
require_once "system".DS."data".DS."index.php"; // pdo
$time = $m2-$m1;
echo "
	<div class='row'>
		<div class='col-md-12'>
	Generating time : ".$time." sec";
echo "<br>";
echo "Your LifePath Number : ".$lifepath_num;
echo "<br>";
echo $LifePathData[0]->data;
echo '</div>';
echo "</div>";
?>