<html>
<body>
<?php
	include ('GoogleOpenID.php');
	echo "login.php \n";
	echo "<br/>";
	$googleLogin = GoogleOpenID::createRequest("http://galiano.ugrad.cs.ubc.ca:61313/");
	echo "$googleLogin";
	$googleLogin->redirect();
?>


</body>
</html>

