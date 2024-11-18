<?php

$solutions = [
	"chapter-01-variables-and-data-types/solutions/topic-01-variable-declaration",
	"chapter-01-variables-and-data-types/solutions/topic-02-type-conversion",
	"chapter-01-variables-and-data-types/solutions/topic-03-scope-understanding",
	"chapter-01-variables-and-data-types/solutions/topic-04-type-juggling",
	"chapter-01-variables-and-data-types/solutions/topic-05-variable-references",
	"chapter-01-variables-and-data-types/solutions/topic-06-constants-vs-variables",
	"chapter-01-variables-and-data-types/solutions/topic-07-type-checking-function",
	"chapter-02-string-operations/solutions/exercise-01-string-reversal",
	"chapter-02-string-operations/solutions/exercise-02-case-counter",
	"chapter-02-string-operations/solutions/exercise-03-palindrome-checker",
	"chapter-02-string-operations/solutions/exercise-04-word-counter",
	"chapter-02-string-operations/solutions/exercise-05-string-compression",
	"chapter-02-string-operations/solutions/exercise-06-string-pattern-matching",
];

$php_prefix = "https://codingfluidity.test/";
$php_suffix = ".php";
$js_prefix = "node ";
$js_suffix = ".js";

foreach ($solutions as $solution) {
	echo "<a href='{$php_prefix}{$solution}{$php_suffix}'>$solution</a><br>";
	echo "$js_prefix $solution$js_suffix<br>";
	echo "<br>";
}
