<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["Paul", "Sesa", "Paulus"];
var_dump($names); 



$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));