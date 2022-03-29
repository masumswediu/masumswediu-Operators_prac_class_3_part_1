<?php

$num1= 20;
$num2= 50;

// echo $nam1 + $num2;


// echo gettype($num1 + $num2);
echo "<br>";


/* 

multipale line comment
user buy two product and every product price is 20

*/

$productQty = 25;
$productPrice = 50;

echo $productQty * $productPrice;

echo "<br>";

/* 
total product price is 80 and product qty is 20
*/
 $totalPrice = 80;
 $totalQnty = 20;

 echo $totalPrice / $totalQnty;

 echo "<br>";
/* 
exponentiation
*/
$a = 2;

echo $a**4;

echo "<br>";


/**
 *modulas 
 */
 $price_num = 22;
 $devided_by = 3;

 echo  $price_num % $devided_by;

 echo "<br>";

 //Point of sell POS


 echo "<br>";


 //assignment  Operator
 $name = "Masum";
 echo $name;
 echo "<br>";


// += commone variable j kono somoy change kora jete pare

$number01 = 20;
$number02 = 30;
$number01 = $number01 + $number02;

echo $number01; 

echo "<br>";

//we have 5 product and product price are 10,20,30,40,50.... calculate the all prices

$prices = [10, 20, 30, 40, 50];

$total_price = 0;

// foreach ($prices as $my_price ) {
//     $total_price = $total_price + $my_price;
// }
// echo "<br>";
// echo $total_price;

// foreach ($prices as $my_price ) {
//     $total_price += $my_price;
// }
// echo "<br>";
// echo $total_price;

// echo "<br>";
foreach ($prices as $my_price ) {
    $total_price += $my_price;
}
echo "<br>";
echo $total_price;

echo "<br>";





























?>