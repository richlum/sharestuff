<?php 
include ('simple.php');

$instance = new SimpleClass();
$instance->displayVar();


$className = 'SimpleClass';
$inst = new $className();
$inst->displayVar();
?>

