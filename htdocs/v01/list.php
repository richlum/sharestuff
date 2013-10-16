<html>
<body>

<br />
Demonstration of how to call other php pages and send parameters.
Also shows use of frames to direct output from this frame.

Attempted to use global variables to retrieve userid from another
frame but scoping of global does not seem to work according to 
web site posting indicating changes due to security.

Intead, we pass parameters as http options or as post or get options
for forms/buttons. 


<br />
<br />
<br />
<?php 
	echo "myperson =";
	echo  $myperson;
	echo "<br />";
	echo "globas[selected users = ";
	echo $GLOBALS["SelectedUser"];
	echo "<br />";
	$mytestvar = "star trek"; 
	$year = 2003;
	echo $year;
	echo " the year is $year ";
 	echo $mytestvar; ?>
<?php echo $mytestvar; ?>
<br />
<button type="button" onclick="getGlobalUser.php">Get Global UserID
</button>

<br />
<form method="post" action=testr.php target="main" >
<input type="submit" name="town" value="ROCHESTER"
			name="user" value="theUser">
</ form>
<br />


<IMG src="apache_pb22_ani.gif" alt="a neat image">
<a href="http://Www.google.com" target ="main" >My Home Page</a>
<br />
<a href="sample_page.html" target ="main" >Sample Page</a>
<br />
<A HREF="testreceive.html?town=Rochester" target="main">testreceive.html?town=Rochester</A>
<br />
<A HREF="testr.php?town=Rochester&email=no@jumkhome" target="main">testr.php?town=Rochester</A>
<br />
<A HREF="testr.html?town=Rochester" target="main">testr.html?town=Rochester</A>
<br />
<br />

// <A HREF="testr.php?town=<?php echo $mytestvar?>&email=no@jumkhome" target="main">testr.php?php dynamic var passing</A>


<br />
<a href="vartest.php?arg1=one&parm=cheese" target="main">vartest.php?arg passing</a>
<?php $zza="AnotherOne"; 
	echo $zza ; ?>
<a href="vartest.php?arg1=<?php echo $zza ?>&parm=cheese" target="main">vartest.php?dynamic var passing</a>

<br />

</body>
</html>

