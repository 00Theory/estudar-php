<?php
$bool = true && false; //false
var_dump($bool);

$bool = (true and false); // true
var_dump($bool);

$bool = (true or (true && false)); // true
var_dump($bool);

var_dump(7 == 7 and 9 < 7); // false

var_dump(7 === '7' or 9 < 7); // false
var_dump(7 === 7 or 9 < 7); // true
?>