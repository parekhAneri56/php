    <?php
    $a = '1'; 
    $b = &$a; 
    $b = "2$b";
    echo $a.", ".$b 
    ?>

<!-- output of this code is syntax error : unexpected variable $b. -->