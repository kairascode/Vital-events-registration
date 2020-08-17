<html>
<head><?php include("header.php");?></head>
<body>
<p align="right"><a href="approve.php">Home</a>&nbsp&nbsp&nbsp <a href="logoff.php">Log out</a></p><br>
<?php
if(isset($_POST["submit"]))
if (isset($_POST['number'])) { $number = $_POST['number']; }

$conn=mysql_connect("localhost","root","")or die("COULD NOT CONNECT...");
mysql_select_db("pomis",$conn);

$update="UPDATE breg set status='approved' where no='$number'";
mysql_query($update,$conn);

echo"Record ready for certificate processing";

?>
</body>
</html>