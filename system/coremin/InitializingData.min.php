<?php
defined('BASEPATH') or die('Can not Access This Page');$name=strtolower($fn.$ln);$vowels = ['a','e','i','o','u'];$consos = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z'];$vowels_ascii=[];$conso_ascii=[];foreach($vowels as $vowel){$vowels_ascii[]=ord($vowel); }foreach($consos as $conso){$consos_ascii[]=ord($conso);}
?>