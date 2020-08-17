<HTML>
<?php
if($submit)
$db = mysql_connect("localhost", "root","");
mysql_select_db("learndb",$db);
$sql = "UPDATE personnel SET firstname='$first',lastname='$last',nick='$nickname',email='$email',
salary='$salary' WHERE id=$id";
$result = mysql_query($sql);
echo "Thank you! Information updated.\n";
 if($id)
{
$db = mysql_connect("localhost", "root", "");
mysql_select_db("learndb",$db);
$result = mysql_query("SELECT * FROM personnel WHERE id=$id",$db);
$myrow = mysql_fetch_array($result);
?>
<form method="post" action="<?php echo $PHP_SELF?>">
<input type="hidden" name="id" value="<?php echo $myrow["id"]?>">
First name:<input type="Text" name="first" value="<?php echo
br>
Last name:<input type="Text" name="last" value="<?php echo $myrow["lastname"]?>"><br>
Nick Name:<input type="Text" name="nickname" value="<?php echo $myrow["nick"]?>"><br>
E-mail:<input type="Text" name="email" value="<?php echo $myrow["email"]?>"><br>
Salary:<input type="Text" name="salary" value="<?php echo $myrow["salary"]?>"><br>
<input type="Submit" name="update" value="Update information"></form>
<?
}
else
{
?>
<form method="post" action="<?php echo $PHP_SELF?>">
First name:<input type="Text" name="first"><br>
Last name:<input type="Text" name="last"><br>
Nick Name:<input type="Text" name="nickname"><br>
E-mail:<input type="Text" name="email"><br>
Salary:<input type="Text" name="salary"><br>
<input type="Submit" name="submit" value="Enter information"></form>
<?
}
?>
</HTML>