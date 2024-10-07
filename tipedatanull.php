<?php
$name = "paul";
$name =  null;

$age = null;

echo "name";
echo $name;
echo "\n"; 

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";


// Menghapus Variable
$contoh = "Eko";
unset($contoh);

$contoh = "Kurniawan";
$contoh = null;

var_dump(isset($contoh));