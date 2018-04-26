<?php
defined('BASEPATH') or die('Can\'t Access This Page');
$maturity_sum = $lifepath_num + $destiny_num;

if($maturity_sum!=11 && $maturity_sum!=22 && $maturity_sum!=33){ // making sum to single digit untill it is not 11 , 22 , 33
while($maturity_sum > 9){ // sum to single digit
	if($maturity_sum == 11 || $maturity_sum == 22 || $maturity_sum == 33){
		break;
	}
	if($maturity_sum==13){
		$karmic_debt13 = 13;
	}
	if($maturity_sum==14){
		$karmic_debt14 = 14;
	}
	if($maturity_sum==16){
		$karmic_debt16 = 16;
	}
	if($maturity_sum==19){
		$karmic_debt19 = 19;
	}
		$maturity_sum = str_split($maturity_sum);
		$maturity_sum = array_sum($maturity_sum);
}
}

/*@*/$maturity_num = $maturity_sum;
?>