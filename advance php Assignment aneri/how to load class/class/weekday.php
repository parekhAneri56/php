<!DOCTYPE html>
<html>
<body bgcolor="yellow">
 
<center>
<br></br>
<br>
<br>
<?php
$days = "4";
echo 'The Number is ';
echo $days;
 
switch ($days) {
  case "1":
    echo " and its MONDAY!";
    break;
  case "2":
    echo " and its TUESDAY!";
    break;
  case "3":
    echo " and its WEDNESDAY!";
    break;
     case "4":
    echo "and  its THURSDAY!";
    break;
     case "5":
    echo "and its FRIDAY!";
    break;
     case "6":
    echo "and its SATURDAY!";
    break;
     case "7":
    echo "and  its SUNDAY!";
    break;
  default:
    echo "there is no other day :)  !";
}
?>
</center>
 
</body>
</html>