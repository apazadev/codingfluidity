<?php

$solutions = [
	"chapter-01-variables-and-data-types/solutions/topic-02-type-conversion",
	"chapter-01-variables-and-data-types/solutions/topic-03-scope-understanding",
];

$php_prefix = "https://codingfluidity.test/";
$php_suffix = ".php";
$js_prefix = "node ";
$js_suffix = ".js";

foreach ($solutions as $solution) {
	echo "<a href='{$php_prefix}{$solution}{$php_suffix}'>$solution</a><br>";
	echo "$js_prefix $solution$js_suffix<br>";
}
