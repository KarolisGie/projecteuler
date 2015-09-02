<?php
/**
 * Largest prime factor
 * 
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */

$largest_of = 13195;//600851475143;
$largest_prime_factor = 0;
$i = 0;

while ($i < $largest_of) {
    $i = gmp_strval(gmp_nextprime($i));

    if ( fmod( $largest_of, $i ) == 0 ) {
        $largest_prime_factor = $i;
    }
}

echo $largest_prime_factor;