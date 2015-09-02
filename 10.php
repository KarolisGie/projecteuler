<?php
/**
 * Summation of primes
 * 
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 * Find the sum of all the primes below two million.
 */

$primes_below = 2000000;
$primes_sum = 0;
$i = 0;

while ($i < $primes_below) {
	$i = gmp_intval(gmp_nextprime($i));

	if ($i < $primes_below) {
		$primes_sum += $i;
	}
}

echo $primes_sum;