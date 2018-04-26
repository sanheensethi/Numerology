<?php
defined('BASEPATH') or die('Can not Access This Page');
$name=strtolower($fn.$ln); // creating full name in lower case
$vowels = ['a','e','i','o','u']; // initializing vowels
$consos = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z']; // initializing consonants
$vowels_ascii=[]; // empty vowels ascii key array
$conso_ascii=[]; // empty consosnants ascii key array
foreach($vowels as $vowel){
	$vowels_ascii[]=ord($vowel); // putting asscii keys of vowels in vowels_ascii array
}
foreach($consos as $conso){
	$consos_ascii[]=ord($conso); // putting asscii keys of consonants in conso_ascii array
}
?>