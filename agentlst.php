<?include("header.php");?>
<?
$db = mysql_connect("localhost", "root", "");
mysql_select_db("pomis",$db);
$result = mysql_query("SELECT * FROM agents");
echo "<TABLE BORDER=1>";

echo"<TR><TD><B>NO</B><TD><B>AGENT</B><TD><B>AGENT CODE</B></TR>";
while ($myrow = mysql_fetch_array($result))
{
echo "<TR><TD>".$myrow["AGENT_NO"]." <td>".$myrow["username"]."<TD>".$myrow["usercode"];
//echo "<TR><TD>".$myrow["AGENT_NO"]." <td>".$myrow["username"]."<TD>".$myrow["usercode"]";
}
echo "</TABLE>";
//header('location:approve.php');


?>