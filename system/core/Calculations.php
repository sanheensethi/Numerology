<?php
	defined('BASEPATH') or die('Can not Access This Page');
	if(!empty($vowels_in_data) || !empty($consos_in_data)){ // checking that valowels and consonants array are empty or not if not empty then running if condotion
	$consos_data = count_chars(implode("",$consos_in_data),1); // counting chars in array after imploding the array intersect valies of vowels
	$vowels_data = count_chars(implode("",$vowels_in_data),1); // counting chars in array after imploding the array intersect values of consonants
	$vowel_sum=0; // initializing vowel sum = 0
	$conso_sum=0; // initializing conso sum = 0
	$num = [];
	foreach($vowels_data as $key=>$vowels):
	if(in_array($key,$vowels_ascii)){ // checking that ascii values if present in vowels ascii the doing calculations
	switch($key){
	case 97:  $vowel_sum+=$vowels*1;$num[]=1;continue;
	case 101: $vowel_sum+=$vowels*5;$num[]=5;continue;
	case 105: $vowel_sum+=$vowels*9;$num[]=9;continue;
	case 111: $vowel_sum+=$vowels*6;$num[]=6;continue;
	case 117: $vowel_sum+=$vowels*3;$num[]=3;continue;
	}
	}
	endforeach;		
	foreach($consos_data as $key=>$consos):
	if(in_array($key,$consos_ascii)){ // checking that ascii values if present in vowels ascii the doing calculations
	switch($key){
	case 98:  $conso_sum+=$consos*2;$num[]=2;continue;
	case 99:  $conso_sum+=$consos*3;$num[]=3;continue;
	case 100: $conso_sum+=$consos*4;$num[]=4;continue;
	case 102: $conso_sum+=$consos*6;$num[]=6;continue;
	case 103: $conso_sum+=$consos*7;$num[]=7;continue;
	case 104: $conso_sum+=$consos*8;$num[]=8;continue;
	case 106: $conso_sum+=$consos*1;$num[]=1;continue;
	case 107: $conso_sum+=$consos*2;$num[]=2;continue;
	case 108: $conso_sum+=$consos*3;$num[]=3;continue;
	case 109: $conso_sum+=$consos*4;$num[]=4;continue;
	case 110: $conso_sum+=$consos*5;$num[]=5;continue;
	case 112: $conso_sum+=$consos*7;$num[]=7;continue;
	case 113: $conso_sum+=$consos*8;$num[]=8;continue;
	case 114: $conso_sum+=$consos*9;$num[]=9;continue;
	case 115: $conso_sum+=$consos*1;$num[]=1;continue;
	case 116: $conso_sum+=$consos*2;$num[]=2;continue;
	case 118: $conso_sum+=$consos*4;$num[]=4;continue;
	case 119: $conso_sum+=$consos*5;$num[]=5;continue;
	case 120: $conso_sum+=$consos*6;$num[]=6;continue;
	case 121: $conso_sum+=$consos*7;$num[]=7;continue;
	case 122: $conso_sum+=$consos*8;$num[]=8;continue;
	}
	
	}
	endforeach;
	}
?>