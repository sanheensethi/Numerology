<?php
defined('BASEPATH') or die('Can not Access This Page');$split_data = str_split($name);$vowels_in_data = array_intersect($split_data,$vowels);$consos_in_data = array_intersect($split_data,$consos);
?>