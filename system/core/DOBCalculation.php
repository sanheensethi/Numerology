<?php
defined('BASEPATH') or die('Can\'t Access This Page');
	$dob_sum = date('dmY',strtotime($dob)); // changing dob format
	
	$date_sum = date('d',strtotime($dob));
	$month_sum = date('m',strtotime($dob));
	$year_sum = date('Y',strtotime($dob));
	
	while($dob_sum > 9){ // sum to single digit
	if($dob_sum == 11 || $dob_sum == 22 || $dob_sum == 33){
	break;
	}
	if($dob_sum==13){
	$karmic_debt13 = 13;
	}
	if($dob_sum==14){
	$karmic_debt14 = 14;
	}
	if($dob_sum==16){
	$karmic_debt16 = 16;
	}
	if($dob_sum==19){
	$karmic_debt19 = 19;
	}
	$dob_sum = str_split($dob_sum);
	$dob_sum = array_sum($dob_sum);
	}
	$dob_num = $dob_sum;
?>