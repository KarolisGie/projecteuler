<?php
/**
 * Smallest multiple
 * 
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 */

$largest_factor = 20;
$smallest = 0;

while (1) {
	$smallest++;

	for ($i = 1; $i <= $largest_factor; $i++) {
		if ($smallest % $i != 0) {
			continue 2;
		}
	}

	echo $smallest;

	break;
}