<?php
/**
 * Special Pythagorean triplet
 * 
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which, a^2 + b^2 = c^2
 * For example, 32 + 42 = 9 + 16 = 25 = 52.
 * 
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 * Find the product abc.
 */

for ($a = 0; $a < 1000; $a++) {
	for ($b = 0; $b < 1000; $b++) {
		for ($c = 0; $c < 1000; $c++) {
			if ( ( ( $a < $b ) && ( $b < $c ) ) && ( ( $a * $a ) + ( $b * $b ) == ( $c * $c ) ) && ( $a + $b + $c == 1000 ) ) {
				echo $a * $b * $c . PHP_EOL;
				echo $a . ' + ' . $b . ' + ' . $c . ' = 1000';

				break 3;
			}
		}
	}
}