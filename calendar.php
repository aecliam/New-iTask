<!-- <meta charset="UTF-8">
        <!--<title>  </title>-->
        <!-- <link rel="stylesheet" type="text/css" href="css/calendar.css"/>-->

<?php
    $month = isset($_GET['month']) ? $_GET['month'] : date('m');
    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');

    $nextMonth = $month + 1;
    $prevMonth = $month - 1;
    $nextYear = $year;
    $prevYear = $year;

    if ($nextMonth > 12) {
        $nextMonth = 1;
        $nextYear++;
    }

    if ($prevMonth < 1) {
        $prevMonth = 12;
        $prevYear--;
    }

    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    $monthName = date('F', mktime(0, 0, 0, $month, 10)); // Get the month name

    echo " $monthName $year "; // Display the month name and year

    echo "<br>";

    echo "<a class='text' href='?month=$prevMonth&year=$prevYear'>Previous Month</a>";
    echo "<a class='text' href='?month=$nextMonth&year=$nextYear'>Next Month</a>";

    echo "<table class='text'>";
    echo "<tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
        </tr>";

    for ($day = 1; $day <= $daysInMonth; $day++) {
        $date = strtotime("$year-$month-$day");
        $dayOfWeek = date('w', $date);

        if ($day == 1) {
            echo "<tr>";
            if ($dayOfWeek > 0) {
                echo str_repeat("<td></td>", $dayOfWeek);
            }
        }

        echo "<td>$day</td>";

        if ($dayOfWeek == 6) {
            echo "</tr>";
        }

        if ($day == $daysInMonth && $dayOfWeek < 6) {
            echo str_repeat("<td></td>", 6 - $dayOfWeek);
            echo "</tr>";
        }
    }

    echo "</table>";
?>
