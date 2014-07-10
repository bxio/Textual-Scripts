#!/usr/bin/php
<?php

include "config.php";

$args = $GLOBALS['argv'];
$args = array_slice($args, 2);  //trim after 2.
//print_r($args);

$output = implode(" ",$args);
//echo "/debug Before:[$output]\n";
$output = preg_replace($patterns, $replacements, $output);
//echo "/debug After:[$output]\n";
echo $output;
exit();

?>
