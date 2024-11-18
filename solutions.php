<?php

$solutions = [
	"chapter-01-variables-and-data-types/solutions/topic-02-type-conversion",
];

$php_prefix = "https://codingfluidity.test/";
$php_suffix = ".php";
$js_prefix = "node ";
$js_suffix = ".js";

foreach ($solutions as $solution) {
	echo "<a href='{$php_prefix}{$solution}{$php_suffix}'>$solution</a><br>";
	echo "$js_prefix chapter-01-variables-and-data-types/solutions/topic-02-type-conversion$js_suffix<br>";
}
