<!-- <meta charset="UTF-8">
        <!--<title>  </title>-->
        <!-- <link rel="stylesheet" type="text/css" href="css/calendar.css"/>-->

<?php 
    
    echo "</table>"; 

    $month = date('m');
    $year = date('Y');
    $daysInMonth = date('t');
    $firstDayOfMonth = date('N', mktime(0, 0, 0, $month, 1, $year));

    echo "<h1>" . date('F, Y') . "</h1>";
    echo "<table>";
    echo "<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>";
    echo "<tr>";

    // Print empty cells until we reach the first day of the month
    for ($i = 1; $i < $firstDayOfMonth; $i++) {
        echo "<td></td>";
    }

    // Print the days of the month
    for ($day = 1; $day <= $daysInMonth; $day++) {
        echo "<td>$day</td>";
        if ((($day + $firstDayOfMonth - 1) % 7 == 0) && ($day != $daysInMonth)) {
            echo "</tr><tr>";
        }
    }

    echo "</tr>";
    echo "</table>";

?>
