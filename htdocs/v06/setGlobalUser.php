<?php
$GLOBALS['SelectedUser']=$_POST["selectUser"];

//	$_SESSION['theuser']=$_POST["selectUser"];

include ('showPersons.php');
echo "<br />";
foreach ($userpasswd as $key => $value) {
      echo $key   ;
      echo $value ;
      echo "<br />";
}
echo "myperson=";
echo $myperson;
echo "<br/> post pwd =";
echo $_POST["pwd"];
echo "<br/> userpass myper =";
echo $userpasswd[$myperson];
if ((  $myperson !== '' )&&(trim($_POST["pwd"]) == trim($userpasswd[$myperson]))  ){
include ('list.php');
}
?>
 
