There are 3 types of array in PHP.

  1)  Indexed Array:Arrays with a numeric index
   2) Associative Array:Arrays with named keys
    3) Multidimensional Array: Arrays containing one or more arrays
   
    Declare an array:
    1)     $season=array("summer","winter","spring","autumn");
    or 
    $season[0]="summer";
    $season[1]="winter";
    $season[2]="spring";
    $season[3]="autumn";

    2) $salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");
    or
    $salary["Sonoo"]="350000";
    $salary["John"]="450000";
    $salary["Kartik"]="200000";

    3)    $emp = array
    (
    array(1,"sonoo",400000),
    array(2,"john",500000),
    array(3,"rahul",300000)
    );

<?php
  // JSON string
  $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  print_r($someArray);        // Dump all data of the Array
  echo $someArray[0]["name"]; // Access Array data

  // Convert JSON string to Object
  //$someObject = json_decode($someJSON);
 // print_r($someObject);      Dump all data of the Object
  //echo $someObject[0]->name;  Access Object data
?>