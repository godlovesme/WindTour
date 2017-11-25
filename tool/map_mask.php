<?php

$arr = file('mask.txt');


$content = array();
foreach ($arr as $key => $value) {
	$value = str_replace("\n", "", $value);
	$value = str_replace("\r", "", $value);
	$value = str_replace(" ", "", $value);
	$value = substr($value, 0,strlen($value)-1);
	$content[] ="[".$value."]";
}
dump($content);

$content = "[\n".implode(",\n",$content)."\n]";

file_put_contents('to_mask.txt', $content);


function dump($var){
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
}