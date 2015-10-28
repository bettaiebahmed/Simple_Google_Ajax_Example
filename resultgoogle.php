<?php

$word = $_GET['word'] ;

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("your_data_base",$con);
$req="SELECT * FROM site where Mot like '%".$word."%'";
$data=mysql_query($req);
?>
<table>
<?php 
while ($row = mysql_fetch_array($data))
{
echo "<tr>";
echo 	"<td><a href='".$row['Url']."'>".$row['Website_Name']."</td>";
echo "<tr>";
echo "<tr>";
echo 	"<td>".$row['Description']."</td>";
echo "<tr>";
}
?>
