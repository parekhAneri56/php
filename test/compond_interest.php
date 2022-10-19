<?php 
if(isset($_POST["sub"]))
{
    $p=$_POST["pnm"];
    $n=$_POST["ynm"];
    $r=$_POST["rnm"];
    // $si=$p*$y*$r/100;
    // ci=P(1+r/n)nt)
    // $ci=$p*pow((1+$r/100),$n);

    $ci=$p*pow((1+$r/100),$n);
    echo "<h1 align='center'>The rate of compound interest is : $ci</h1>";


}
?>
<html>
    <body>
        <center>
        <form method="post">
         Enter your princile ammount :<input type="text" name="pnm" placeholder="Enter your Principle ammount *">
         <br><br>
         Enter your number of years :<input type="text" name="ynm" placeholder="Enter your years *">
         <br><br>
         
         Enter your ROI  :<input type="text" name="rnm" placeholder="Enter your ROI *">
         <br><br>
         <input type="submit" name="sub" value="Submit">
         
</form>
</center>
    </body>
</html> 