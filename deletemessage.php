<?php
if(isset($_POST["submit"]))
if(isset($_POST['clear'])){$clear=$_POST['clear'];}
$conn=mysql_connect("localhost","root")or die("Couldn't connect...!");
mysql_select_db("pomis") or die ("Couldn't find Database");
mysql_query("update message set status='read' where messages='$clear'");
?>