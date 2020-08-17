<?
if(isset($_post['submit'])){
if(isset($_get['go'])){
if(preg_match("/[0-9]/",$_post['search'])){
$search=$_post['name'];
$db=mysql_connect("localhost","root","") or die("Could not connect..");
$mydb=mysql_select_db("pomis");

$sql="select notification_no,pob,county,childname,sex,dob,mother,father,informant,tinfo,dreg,agentno where notification_no LIKE
'%".$Search."%'";
$result=mysql_query($sql);
//create while loop and loop through result set

while($row=mysql_fetch_array($result))
{
$notification_no=$myrow['notification_no'];
$pob=$myrow['pob'];
$county=$myrow['county'];
$childname=$myrow['childname'];
$sex=$myrow['sex'];
$dob=$myrow['dob'];
$mother=$myrow['mother'];
$father=$myrow['father'];
$informant=$myrow['informant'];
$tinfo=$myrow['tinfo'];
$dreg=$myrow['dreg'];
$agentno=$myrow['agentno'];

// display the result of the array

echo"<table border=1>";
echo "<TR><TD>NOTIFICATION".$myrow["notification_no"]." <td>".$myrow["pob"]." <td>".$myrow["county"]."<TD>".$myrow["childname"].
"<TD>".$myrow["sex"]."<TD>".$myrow["dob"]." <td>".$myrow["mother"]." <td>".$myrow["father"]."<TD>".$myrow["informant"].
"<TD>".$myrow["tinfo"]."<TD>".$myrow["dreg"]."<TD>".$myrow["agentno"];
echo"</td></tr></table>";
}
}
}

?>

