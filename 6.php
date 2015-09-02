<?php
/**
 * Sum square difference
 * 
 * The sum of the squares of the first ten natural numbers is, 1^2 + 2^2 + ... + 10^2 = 385
 * The square of the sum of the first ten natural numbers is, (1 + 2 + ... + 10)^2 = 552 = 3025
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.
 * 
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */

$natural_max = 100;
$sum_of_naturals = 0;
$sum_of_squares = 0;
$square_sum = 0;

for ($i = 1; $i <= $natural_max; $i++) {
	$sum_of_squares += $i * $i;
	$sum_of_naturals += $i; 
}

$square_sum = $sum_of_naturals * $sum_of_naturals;

echo $square_sum - $sum_of_squares;