<?php

 header("Content-type:text/plain");

 /* Name: Paula Stutzman
 Date: 02/03/2017
 File Name: proj1a.php Purpose: To assign values to a few variables, make a few
 calculations on these numbers, and output these
 results to standard output.
 */
 ?>

 Paula Stutzman - Project #1 part a

 <?php
 //Here, I'll assign a few variables
 $x = -4;
 $y = 22.2;
 $z = pi();

 //In PHP, you need to decide which type of quotes to user_error
 //for strings, single ' or double "
 print 'Variables contents: $x = ' . $x . ', $y = '. $y;
 print ", and \$z = $z \n\n";

 //Perform some calculations
 $sum = $x + $y + $z;
 $product = $x * $y * $z;
 $xcube = pow($x,3);
 $average = $sum/3;

 ?>


 <!-- add a space to the end of each line below -->


 Sum is: <?= $sum . "\n"; ?>
 Product is: <?= $product . "\n"; ?>
 Cube of x: <?= $xcube . "\n"; ?>
 Average is: <?= $average . "\n"; ?>
