<html>
  <head>
  </head>
<body style="background-image:url(college11.jpg);background-size:cover;">
<form name="f1" method="get" action="log.html">
<center>
<font size=5>
<table style="background-color:lightblue;border-radius:10px;"" border=2 height=200 width=600><tr><td>
<?php
$s="localhost";
$u="root";
$p="";
$b="logproj";
$con=mysqli_connect($s,$u,$p,$b);
$hval=0;
if(!$con)
{
  echo "failed";
}
else
{
 echo "<h3>PHP TO MYSQL CONNECTION SUCCESS</h3>";
 echo "----------------------------------------------------------------"."<br><br><br>";
 $hval=1;
}
$a=$_GET["t1"];
$c=$_GET["r1"];
$d=$_GET["cb1"];
$t="";
foreach($d as $v)
$t=$t.$v.",";
$e=$_GET["s1"];
$f=$_GET["p1"];
$sw="insert into loginfo(Name,Gender,Skills,Branch,Password)values('$a','$c','$t','$e','$f')";
if(mysqli_query($con,$sw)){
  echo "RECORD INSERTED SUCCESFULLY"."<br><br><br><br>";
}
else{
  echo "COULDNT ENTER THE DATA INTO THE RECORDS";
}
echo "ENTERED DATA OF THE NEW USER"."<br>";
echo "--------------------------------------------------";
echo "<br><br>";
echo "ENTERED NAME =".$a."<br><br>";
echo "GENDER       =".$c."<br><br>";
echo "TECH SKILLS  =".$t;
echo "<br><br>";
echo "BRANCH IS    =".$e;
echo "<br><br>";
echo "PASSWORD     =".$f;

?>
<br><br>
<center>
<input class="hi" type="submit" style="border-radius:20px;background-color:lightslategray">
</center>
</form>
</body>
</html>