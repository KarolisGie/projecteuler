<?php
/**
 * Highly divisible triangular number
 * 
 * The sequence of triangle numbers is generated by adding the natural numbers. So the 7th triangle number would be 1 + 2 + 3 + 4 + 5 + 6 + 7 = 28. The first ten terms would be: 
 * 1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...
 * 
 * Let us list the factors of the first seven triangle numbers:
 * 
 * 1: 1
 * 3: 1,3
 * 6: 1,2,3,6
 * 10: 1,2,5,10
 * 15: 1,3,5,15
 * 21: 1,3,7,21
 * 28: 1,2,4,7,14,28
 * 
 * We can see that 28 is the first triangle number to have over five divisors.
 * 
 * What is the value of the first triangle number to have over five hundred divisors?
 */

$divisors_needed = 500;
$number_found = false;
$triangle_number = 0;
$i = 1;

while ( ! $number_found ) {
	$triangle_number += $i;

	$current_number = $triangle_number;
	$prime = 2;
	$prime_count = 0;
	$divisors = 0;

	while ($prime <= $current_number) {
		if ( $current_number % $prime == 0 ) {
			$prime_count++;
			$current_number = $current_number / $prime;
		} else {
			if ($divisors != 0) {
				$divisors = $divisors * ( $prime_count + 1 ); 
			} else {
				$divisors = $prime_count + 1; 
			}

			if ($divisors * 2 > $divisors_needed) {
				$number_found = true;
			}

			$prime = gmp_strval(gmp_nextprime($prime));
			$prime_count = 0;
		}
	}

	$divisors = $divisors * 2;

	$i++;
}

echo $triangle_number . PHP_EOL;