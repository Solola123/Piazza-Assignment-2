<?php

function correctDate($year, $month, $day) {
    $date = checkDate($month, $day, $year);
    if (!$date) {
        echo "Invalid, please try again!";
    }

    $daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    if ($month == 2 && ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0))) {
        $daysInMonth[1] = 29;
    }

    if ($day < 1 || $day > $daysInMonth[$month - 1]) {
        echo "Invalid, please try again!";
    }

    return true;
}


function getDayOfWeek($year, $month, $day) {
    if (!correctDate($year, $month, $day)) {
        echo "Invalid date, please try again!";
    }

    $timestamp = time(0, 0, 0, $month, $day, $year);
    $dayOfWeek = date('l', $timestamp);

    return $dayOfWeek;
}



echo "Enter a date (year, month, day): ";
$year = (int)trim(fgets(STDIN));
$month = (int)trim(fgets(STDIN));
$day = (int)trim(fgets(STDIN));

$dayOfWeek = getDayOfWeek($year, $month, $day);
echo "Day of the week: $dayOfWeek";

?>