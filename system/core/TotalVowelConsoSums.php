<?php
defined('BASEPATH') or die('Can\'t Access This Page');
$total_sum = $vowel_sum+$conso_sum; //total sum 
if($total_sum!=11 && $total_sum!=22 && $total_sum!=33){ // making sum to single digit untill it is not 11 , 22 , 33
while($total_sum > 9){
	if($total_sum == 11 || $total_sum == 22 || $total_sum == 33){
		break;
	}
	if($total_sum==13){
		$karmic_debt13 = 13;
	}
	if($total_sum==14){
		$karmic_debt14 = 14;
	}
	if($total_sum==16){
		$karmic_debt16 = 16;
	}
	if($total_sum==19){
		$karmic_debt19 = 19;
	}
		$total_sum = str_split($total_sum);
		$total_sum = array_sum($total_sum);
}
}
if($vowel_sum!=11 && $vowel_sum!=22 && $vowel_sum!=33){  // making sum to single digit untill it is not 11 , 22 , 33
while($vowel_sum > 9){
	if($vowel_sum == 11 || $vowel_sum == 22 || $vowel_sum == 33){
		break;
	}
	if($vowel_sum==13){
		$karmic_debt13 = 13;
	}
	if($vowel_sum==14){
		$karmic_debt14 = 14;
	}
	if($vowel_sum==16){
		$karmic_debt16 = 16;
	}
	if($vowel_sum==19){
		$karmic_debt19 = 19;
	}
		$vowel_sum = str_split($vowel_sum);
		$vowel_sum = array_sum($vowel_sum);
}
}
if($conso_sum!=11 && $vowel_sum!=22 && $vowel_sum!=33){  // making sum to single digit untill it is not 11 , 22 , 33
while($conso_sum > 9){
	if($conso_sum == 11 || $conso_sum == 22 || $conso_sum == 33){
		break;
	}
	if($conso_sum==13){
		$karmic_debt13 = 13;
	}
	if($conso_sum==14){
		$karmic_debt14 = 14;
	}
	if($conso_sum==16){
		$karmic_debt16 = 16;
	}
	if($conso_sum==19){
		$karmic_debt19 = 19;
	}
		$conso_sum = str_split($conso_sum);
		$conso_sum = array_sum($conso_sum);
}
}
?>