<?php
/**
 * Names scores
 * 
 * Using names.txt (right click and 'Save Link/Target As...'), a 46K text file containing over five-thousand first names, begin by sorting it into alphabetical order. 
 * Then working out the alphabetical value for each name, multiply this value by its alphabetical position in the list to obtain a name score.
 * 
 * For example, when the list is sorted into alphabetical order, COLIN, which is worth 3 + 15 + 12 + 9 + 14 = 53, is the 938th name in the list. So, COLIN would obtain a score of 938 × 53 = 49714.
 * 
 * What is the total of all the name scores in the file?
 */

$names = fopen( '22_names.txt', 'r' );
$names_line = fgets( $names );

$names_arr = explode( ',', str_replace( '"', '', $names_line ) );

fclose( $names );

sort($names_arr);
$total = 0;

foreach ( $names_arr as $k => $name ) {
	$total += ( $k + 1 ) * alphabetical_value( strtolower( $name ) );
	$totals[$k+1] = $total;
}

echo $total;

function alphabetical_value( $name ) {
	$alphabet = 'abcdefghijklmnopqrstuvwxyz';
	$name_length = strlen( $name );
	$value = 0;

	for ( $i = 0; $i < $name_length; $i++ ) {
		$value += strpos( $alphabet, $name[$i] ) + 1;
	}

	return $value;
}