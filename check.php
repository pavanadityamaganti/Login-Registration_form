<html>
<form name="f1" method="get">
<?php
$a=$_GET['name'];
$b=$_GET['pwd'];
$l="localhost";
$u="root";
$p="";
$d="logproj";
$con=mysqli_connect($l,$u,$p,$d);
$s="select Name,Password from loginfo";
$r=mysqli_query($con,$s);
while($row=mysqli_fetch_array($r))
{
$u=$row['Name'];
$p=$row['Password'];
if(strcmp($b,$p)==0 and strcmp($a,$u)==0)
{
    echo "<script LANGUAGE='JavaScript'>
window.alert('LOGIN Succesful              DONE BY 19MH1A0532');
window.location.href='rollno.html';
</script>";
    break;
}
else
{
    echo "<script>alert('INVALID USERNAME (OR) PASSWORD, please check and try again.')</script>";
    echo "<script>alert('PLEASE register if you do not have an account.');window.location.href='log.html';</script>";
    break;
}
}
?>
</form>
</html> 