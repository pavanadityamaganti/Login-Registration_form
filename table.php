<html>
<body>
<?php
$n=$_GET["pin"];
$s="localhost";
$u="root";
$p="";
$b="logproj";
$conn=mysqli_connect($s,$u,$p,$b);
$q="SELECT * FROM stuinfo where Pin=".$n;
$r=mysqli_query($conn,$q);
echo "<table border=10 height=150 width=800>";
echo "<tr><th>NAME</th><th>PIN</th><th>BRANCH</th><th>YEAR</th><th>SEMISTER</th><th>PERCENTAGE</th><th>BACKLOGS</th></tr>";

if(mysqli_num_rows($r)>0)
{
while($row=mysqli_fetch_assoc($r))
 {
   echo "<tr><td align=center>";
   echo $row['Name'];
   echo "</td><td align=center>"; 
   echo $row['Pin'];
   echo "</td><td align=center>";
   echo $row['Branch'];
    echo "</td><td align=center>"; 
   echo $row['Year'];
  echo "</td><td align=center>"; 
   echo $row['Sem'];
   echo "</td><td align=center>"; 
   echo $row['Per'];
   echo "</td><td align=center>"; 
   echo $row['Backlogs'];
   echo "</td></tr>";
 }
}
echo "</td></tr></table>";

mysqli_close($conn)
?>
</body>
</html>