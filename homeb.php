<?php include("header.php");?>
<?php
$pob=$_POST['pob'];
$conn=mysql_connect("localhost","root","") or die("Server not found...");
mysql_select_db("pomis",$conn);
$sql=mysql_query("select* from breg where pob='$pob' order by dob",$conn);
echo"<table border=1>";
echo"<tr><th>NOTIFICATION NO<th>CHILD NAME<th>PLACE OF BIRTH<th>DATE OF BIRTH<th>SEX</th></tr>";
while($row=mysql_fetch_assoc($sql))
{
//echo "<TR><TD>".$myrow["permit"]."<td>".$myrow["dname"]." <td>".$myrow["pod"]."<TD>".$myrow["dod"]."<td>".$myrow["sex"];
echo "<tr><td>";echo $row['notification_no'];echo"</td><td>";echo $row['childname'];echo "</td><td>";echo $row['pob'];echo"</td><td>";echo $row['dob']; echo"</td><td>";
echo $row['sex'];echo"</td></tr>";
}
echo"</table>";


?>
<?php include("footer.php");?>