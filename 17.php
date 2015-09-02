<?php
/**
 * Number letter counts
 * 
 * If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
 * 
 * If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
 * 
 * NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen) contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.
 */

$number_to = 1000;
$all_numbers = '';

$nf = new NumberFormatter( 'en_GB', NumberFormatter::SPELLOUT );
for ( $i = 1; $i <= $number_to; $i++ ) {
	$number = $nf->format($i);

	$words_arr = explode(' ', $number);

	if ( strpos( $number, 'hundred' ) !== 0 && array_pop( $words_arr ) != 'hundred' ) {
		$number = str_replace('hundred', 'hundred and', $number);
	}

	$all_numbers .= $number;
}

echo strlen( str_replace( array(' ', '-'), '', $all_numbers) );