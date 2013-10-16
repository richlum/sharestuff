<?php
$GLOBALS['SelectedUser']=$_POST["selectUser"];

	$_SESSION['theuser']=$_POST["selectUser"];

include ('showPersons.php');
include ('list2.php');
?>
 
