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
<a href="sample_page.html" target ="main" >Sample Page</a>
<A HREF="testreceive.html?town=Rochester" target="main">West Rochester</A>
<A HREF="testr.php?town=Rochester&email=no@jumkhome" target="main">West Rochester</A>
<A HREF="testr.html?town=Rochester" target="main">West Rochester</A>
<br />
<br />

// <A HREF="testr.php?town=<?php echo $mytestvar?>&email=no@jumkhome" target="main">rest wochester</A>


<a href="vartest.php?arg1=one&parm=cheese" target="main">Test var</a>
<?php $zza="AnotherOne"; 
	echo $zza ; ?>
<a href="vartest.php?arg1=<?php echo $zza ?>&parm=cheese" target="main">Test var</a>

<br />

</body>
</html>

