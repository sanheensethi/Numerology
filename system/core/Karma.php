<?php
defined('BASEPATH') or die('Can\'t Access This Page');
$nums = range(1,9);
$num = array_unique($num);
$karma_sum = array_sum(array_diff($nums,$num));
while($karma_sum>9){
	$karma_sum = str_split($karma_sum);
	$karma_sum = array_sum($karma_sum);
}

/*@*/$karma_num = $karma_sum;
/*@*/$karmic_debt13 = isset($karmic_debt13) ? $karmic_debt13 : false;
/*@*/$karmic_debt14 = isset($karmic_debt14) ? $karmic_debt14 : false;
/*@*/$karmic_debt16 = isset($karmic_debt16) ? $karmic_debt16 : false;
/*@*/$karmic_debt19 = isset($karmic_debt19) ? $karmic_debt19 : false;
?>