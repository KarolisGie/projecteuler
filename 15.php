<?php
/**
 * Lattice paths
 * 
 * Starting in the top left corner of a 2×2 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.
 * 
 * How many such routes are there through a 20×20 grid?
 */

$steps_left = 20;
$steps_down = 20;
$possible = 1;
$steps = $steps_left + $steps_down;

while ($steps > $steps_left) {
	$possible = $possible * $steps;
	$steps--;
}

$paths = $possible / gmp_strval( gmp_fact( $steps_down ) );

print_r($paths);