<html>
<body bgcolor=" pink">
<center>
<br>
<br>
<form  method="post">
  Enter a number (1 - 7):<br>
  <br>
  <input name="dayname" type="number" maxlength="100" >
<br>
<br>
  <input type="submit"  name="submit" value="Click it!">
</form>
<?php
if(isset($_POST['submit']))
 {
    
    $num=($_POST["dayname"]);
$common="The day you select";
 
    switch ($num) {
    case '1': 
      echo "$common $num, it's MONDAY.";
      break;
    case '2': 
      echo "$common $num, it's TUESDAY.";
      break;
    case '3': 
      echo "$common $num, it's WEDNESDAY.";
      break;
    case '4': 
      echo "$common $num, it's THURSDAY.";
      break;
    case '5': 
      echo "$common $num, it's FRIDAY.";
      break;
    case '6': 
      echo "$common $num, it's SATURDAY.";
      break;
 case '7': 
      echo "$common $num, it's SUNDAY.";
      break;
    default: 
      echo "there is no other day :)";
    }
  }	
?>
</body>
</center>
</html>