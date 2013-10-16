<?php

include('simple.php');

$instance = new SimpleClass();

echo "refpoint 1\n";
echo "<br/>";
var_dump($instance);
echo "<br/>";
var_dump($reference);
echo "<br/>";
var_dump($assigned);
echo "<br/>";
echo "<br/>";

$assigned = $instance;
$reference =& $instance;
$instance->var = '$assigned will have this value';

echo "refpoint 2\n";
echo "<br/>";
var_dump($instance);
echo "<br/>";
var_dump($reference);
echo "<br/>";
var_dump($assigned);
echo "<br/>";
echo "<br/>";

$instance = null;

echo "refpoint 3\n";
echo "<br/>";
var_dump($instance);
echo "<br/>";
var_dump($reference);
echo "<br/>";
var_dump($assigned);
echo "<br/>";
echo "<br/>";

?>
