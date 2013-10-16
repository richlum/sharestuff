<html>
<body>
<FORM><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>

<?php 	$mylocalvar = $_POST['myperson'];
?>
<?php
if ($db_conn=OCILogon("ora_i0r7", "a41671785", "ug")){
	$cmdstr = "select email, available, count(*), sum(value)  from item i, ownedby o  where 
			i.i_number=o.i_number  
		   group by
			i.available, o.email
			order by o.email, i.available";
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
	
?>
<table border="2">

<?php
	while($row = OCI_Fetch_Array($parsed, OCI_BOTH)){
		echo "<tr>";
		echo "<td>";
		echo "Person = ";
		echo $row[0];
		echo "<td>";
		echo " Avail = ";
		echo $row[1];
		echo "<td>";
		echo " count  = ";
		echo $row[2];
		echo "<td>";
		echo " total value  = ";
		echo $row[3];
		echo "</tr>  ";
	}

	echo "</table>";
	echo "<br />";
	 OCICommit($db_conn);
	OCILogoff($db_conn);
}
?>
<hr />
<?php
	echo "$cmdstr \n";
	echo "<br/>";
?>
</body>
</html>

