<?php
/**
 * Largest palindrome product
 * 
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

$largest_3digit_nr = 999;
$largest_3digit_nr_2nd = 999;
$palindromes = array();
$largest_palindrome = 0;

for ($i = $largest_3digit_nr; $i >= 100; $i--) {
	for ($y = $largest_3digit_nr_2nd; $y >= 100; $y--) {
		if (isPalindrome($i * $y)) {
			$palindromes[] = $i * $y;
		}
	}
}

$largest_palindrome = max($palindromes);

echo $largest_palindrome;

function isPalindrome($number) {
	$number_array = array();
	$number_length = strlen($number);

	if ($number_length < 2) {
		return true;
	} else {
		for ($i = 0; $i < $number_length; $i++) {
			$last_digit = $number % 10;
			$number = floor($number / 10);

			$number_array[] = $last_digit;
		}
	}

	return ($number_array === array_reverse($number_array));
}