
<html>
<body>

<?php

echo "username " . $_POST["name"]. "<br />"; 

if ($c=OCILogon($_POST["name"], $_POST["password"], "ug")) {
  echo "Successfully connected to Oracle.".   "<br />";
	echo date("Y.m.d"). "<br />";
	echo date("H:i:s"). "<br />";
  OCILogoff($c);
} else {
  $err = OCIError();
  echo "Oracle Connect Error " . $err[text];
}
?>
</body>
</html>
