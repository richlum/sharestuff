<html>
<body>


<br />

<FORM><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>

<?php echo $_GET['myperson'];?>
<?php echo $_GET['item'];?>
<br />
<?php 	$mylocalvar = $_GET['myperson'];
	echo  "mylocalvar for using with queries = $mylocalvar";
	echo "<br/>" ;?>
<?php
if ($db_conn=OCILogon("ora_i0r7", "a41671785", "ug")){
	echo "Connected to Oracle". "<br />";
//	$cmdstr = 'select * from item';
//	$cmdstr = "select i.i_number, i.value, i.description, i.available from item i , ownedby o where o.i_number=i.i_number and o.email = '$mylocalvar'";
 	$cmdstr = 'update item set available=\'F\' where item.i_number=';
	$cmdstr = $cmdstr . $_GET['item']; 

	echo "$cmdstr \n";
	echo "<br/>";
	$parsed = OCIParse($db_conn,$cmdstr);
	if (!$parsed){
		$err = OCIError($db_conn);
		echo htmlentities($err['message']);
		exit;
	}
	
	$r=OCIExecute($parsed, OCI_DEFAULT);
	if(!$r){
		$err = oci_error($parsed);
		echo htmlentities($err['message']);
		exit;
	}
	
//	echo "<br /> Data Retrieved <br />";

	OCILogoff($db_conn);
}

include ('deleteItem.php'); 
?>

</body>
</html>

