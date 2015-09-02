<?php
/**
 * 10001st prime
 * 
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 * What is the 10 001st prime number?
 */

$prime = 10001;
$last_prime = 0;

for ($i = 0; $i < $prime; $i++) {
	$last_prime = gmp_strval(gmp_nextprime($last_prime));
}

echo $last_prime;