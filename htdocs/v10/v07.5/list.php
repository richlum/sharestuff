<html>
<body>
<br />

 <!--myperson = <?php echo $myperson; ?>
 post myuser = <?php echo $_POST["myuser"]; ?>
 post myuser = <?php echo $_POST['myuser']; ?>
 get myuser = <?php echo $_GET["myuser"]; ?>
 get myuser = <?php echo $_GET['myuser']; ?>
-->
<br />
<hr />
<br />
<br />
<A HREF="mystuff.php?myperson=<?php echo $myperson?>" target="main">My STuff</A><br />
<A HREF="otherstuff.php?myperson=<?php echo $myperson?>" target="main">STuff I can borrow</A><br />
<A HREF="deleteItem.php?myperson=<?php echo $myperson?>" target="main">Remove Item from  STuff </A><br />
<A HREF="books.php?myperson=<?php echo $myperson?>" target="main">Show Books</A><br />
<A HREF="cds.php?myperson=<?php echo $myperson?>" target="main">Show CD's</A><br />
<A HREF="videos.php?myperson=<?php echo $myperson?>" target="main">Show Videos</A><br />
<A HREF="misc.php?myperson=<?php echo $myperson?>" target="main">Show Misc</A><br />


<?php $itemid=9999;  ?>
<A HREF="insert01.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Add Misc </A><br />
<A HREF="insertbook.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Add Book </A><br />
<A HREF="insertcd.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Add CD </A><br />
<A HREF="insertvideo.php?myperson=<?php echo $myperson?>&itemid=<?php echo $itemid?>" target="main">Add Video</A><br />


<form method="post" action="search.php" target="main" >
Find: <input type ="text" size="10" name="token" value="">
<input type="submit" value="SEARCH">
</form>
<br />
delete yourself : IMMEDIATE!
<form method="post" action="deleteMyself.php" target="main" >
Password: <input type ="password" size="10" name="token" value=<?php echo $myperson ?> >
<input type="submit" value="ERASE ME">
</form>
<CENTER>
<br />
<br />
<hr />

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
<hr />
<br />


<IMG src="apache_pb22_ani.gif" alt="a neat image">
<br />
<a href="http://Www.google.com" target ="main" >Search </a>
<br />
<br />
<br />

</body>
</html>

