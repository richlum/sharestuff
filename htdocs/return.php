<html>
<body>


<?php 
	echo "return.php\n";
	include ('GoogleOpenID.php');

	$googleLogin = GoogleOpenID::getResponse();
	if ($googleLogin->success()){
		$user_id = $googleLogin->identity();
		include ('list.php');
	}

?>

</body>
</html>
