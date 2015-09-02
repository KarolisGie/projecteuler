<?php
/**
 * Counting Sundays
 * 
 * You are given the following information, but you may prefer to do some research for yourself.
 * 1 Jan 1900 was a Monday.
 * Thirty days has September, April, June and November.
 * All the rest have thirty-one, Saving February alone, Which has twenty-eight, rain or shine.
 * And on leap years, twenty-nine.
 * 
 * A leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.
 * 
 * How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?
 */

$given_date = '1 Jan 1900';
$weekday = 2;
$sundays = 0;

$months = array(
	1 => 31,
	2 => 28,
	3 => 31,
	4 => 30,
	5 => 31,
	6 => 30,
	7 => 31,
	8 => 31,
	9 => 30,
	10 => 31,
	11 => 30,
	12 => 31
);

$date_arr = explode( ' ', $given_date );
$day = $date_arr[0];
$month = date('n', strtotime( $date_arr[1] ) );
$year = $date_arr[2];

for ($y = $year + 1; $y < 2001; $y++) {
	for ($i = $month; $i < 13; $i++) {
		$days = $months[$i];

		if ($i == 2 && is_leap_year( $y ) ) {
			$days++;
		}

		for ($d = 1; $d <= $days; $d++) {
			if ($weekday == 7 && $d == 1) {
				$sundays++;
			}

			if ($weekday == 7) {
				$weekday = 0;
			}

			$weekday++;
		}
	}

	$month = 1;
}

echo $sundays;

function is_leap_year($year) {
	if ( ( $year % 4 == 0 && $year % 100 != 0 ) || ( $year % 400 == 0 && $year % 100 == 0 ) ) {
		return true;
	}

	return false;
}

