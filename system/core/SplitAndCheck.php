<?php
	defined('BASEPATH') or die('Can not Access This Page');
	$split_data = str_split($name); // spliting each value of name into array i.e., array of all chars
	$vowels_in_data = array_intersect($split_data,$vowels); // array_intesect -> used to check vowels are present or not and getting all vowels 
	$consos_in_data = array_intersect($split_data,$consos); // array_intersect -> used to check consonants that are present or not and geeting all consonants
	
?>