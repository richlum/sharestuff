<html>
<body>
file:list.php 

<br />
<?php echo "myperson=$myperson"; ?>
<br />
global[SelectedUsers] = 
<?php echo $GLOBALS["SelectedUser"]; ?>
<br />
<br />
// <A HREF="query01.php?myperson=<?php echo $myperson?>&email=no@jumkhome" target="main">The First Query</A>

<br />
<hr />
<br />
Richard
<br />
<CENTER>
<A HREF="mystuff.php?myperson=<?php echo $myperson?>" target="main">My STuff</A><br />
<A HREF="otherstuff.php?myperson=<?php echo $myperson?>" target="main">STuff I can borrow</A><br />
<A HREF="deleteItem.php?myperson=<?php echo $myperson?>" target="main">Remove Item from  STuff </A><br />
</CENTER>
<br />
Raphael
<br />

<br />
Kevin
<br />

<br />
Yaphet
<br />
<br />
<br />
 
<hr />
UNASSIGNED ITEMS
<br />
<?php $itemid=9999;  ?>
<A HREF="addItem.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">addItem </A><br />

<?php $itemid=9998;  ?>
<A HREF="comment.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Add Comment to STuff </A><br />

<?php $itemid=9997;  ?>
<A HREF="borrowItem.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Borrow STuff </A><br />

<?php $itemid=9996;  ?>
<A HREF="returnItem.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Return STuff </A><br />

<A HREF="personReport.php?myperson=<?php echo $myperson?>" target="main">Person Report </A><br />


<?php $itemid=9995;  ?>
<A HREF="itemReport.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">item report</A><br />

<?php $itemid=9994;  ?>
<A HREF="queueOnItem.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Wait for STuff </A><br />
<?php $itemid=9993;  ?>
<A HREF="dequeueOnItem.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Stop Waiting on STuff </A><br />


<A HREF="newPerson.php?myperson=<?php echo $myperson?>" target="main">Add Person </A><br />
<br />

<br />
<hr />
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
<br />

</body>
</html>

