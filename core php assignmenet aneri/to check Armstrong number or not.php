<html>
<head>
<title>PHP Program To Check a given number is Armstrong number or Not</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="num" value="" placeholder="Enter a number"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/> </td>
</tr>
</table>
</form>
<?php
//To Check a given number is Armstrong number or Not
if(isset($_POST['submit']))
{
$n = $_POST['num'];
$x = $n;
$r = 0;
$sum = 0;
while($n>1)
{
$r = $n%10;
$sum = $sum+($r*$r*$r);
$n =$n/10;
}
if($x==$sum)
{
echo "$x is Amstrong number";
}
else
{
echo "$x is not a Amstrong number";
}
}
return 0;
?>
</body>
</html>