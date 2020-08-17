<?
$dbhost='localhost';
$dbuser='root';
$conn=mysql_connect("localhost","root","") or die("could not connect...!!!");
mysql_select_db("pomis",$db) or die("could not find database!!!");
?>