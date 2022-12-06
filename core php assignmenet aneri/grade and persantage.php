<?php
// PHP Script to Calculate Total Marks of Student and Display Grade

// These are the marks of five subjects
$Physics = 95;
$Chemistry = 85;
$Biology = 74;
$Mathematics = 64;
$Computer = 53;

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

// It will calculate total, average, percentage, and grade
$total = $Physics + $Chemistry + $Biology + $Mathematics + $Computer;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

// It will print the final output
//echo "The Total marks   = " . $total . "/500\n";
//echo "The Average marks = " . $average . "\n";
echo "The Percentage    = " . $percentage . "%\n";
echo "The Grade         = '" . $grade . "'\n";

?>