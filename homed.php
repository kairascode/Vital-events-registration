<?php include("header.php");?>
<?php
$pod=$_POST['pod'];
$conn= mysql_connect("localhost","root","") or die("server not found...");
mysql_select_db("pomis",$conn);
$sql=mysql_query("select* from dreg where pod ='$pod' ORDER BY dod",$conn);


echo "<table width=850 border=1>";
echo"<tr><th> PERMIT NO<TH>DATE OF DEATH<th>NAME<th>AGE<th>SEX<TH>ID CARD NO<th>PLACE OF DEATH<th>CAUSE OF DEATH</th></tr>";
while($row=mysql_fetch_assoc($sql))
{

echo"<tr><td>";echo $row['permit_no'];echo "<td>";echo $row['dod'];echo"<td>";echo $row['dname'];echo "<td>";echo $row['age'];echo"<td>";echo $row['sex'];
echo"<td>";echo $row['id_no'];echo "<td>";echo $row['pod'];echo "<td>";echo $row['dcause'];echo"</td></tr>";
}
echo"</table>";
?>
<?php include("footer.php");?>

