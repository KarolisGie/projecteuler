<?php
/**
 * Power digit sum
 * 2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.
 * 
 * What is the sum of the digits of the number 2^1000?
 */

$pow = gmp_strval( gmp_pow( 2, 1000 ) );
$sum = 0;

while ($pow > 0) {
	$sum = $sum + gmp_strval( gmp_mod( $pow, 10 ) );
	$pow = gmp_strval( gmp_div_q ( $pow, 10 ) );
}

echo $sum;