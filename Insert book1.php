<! DOCTYPE HTML>
<html>
<body bgcolor=87ceeb>
<center><h2> Library management system </h2></center>
<br>

<?php
include ("DBC.php");

$isbn=$_POST["isbn"] ;
$title=$_POST["title"] ;
$author=$_POST["author"] ;
$edition=$_POST["edition"] ;
$publication=$_POST["publication"] ;

$sql="INSERT INTO entry (isbn,title,author,edition,publication) VALUES ('$isbn','$title','$author','$edition','$publication')" ;


 // Insert a query to add book_info information in the book_info
if (mysqli_query($conn,$sql))

{
	echo "added";
}
else{
	echo"error";
}
?>


<a href="Search book1.php"> To find information about the book, click here </a>

</body>
</html>