<!-- <meta charset="UTF-8">
        <!--<title>  </title>-->
        <!-- <link rel="stylesheet" type="text/css" href="css/calendar.css"/>-->

        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <form action="add_event.php" method="post">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">
        <label for="event">Event:</label>
        <input type="text" id="event" name="event">
        <input type="submit" value="Add Event">
    </form>


    <?php
        $month = empty($_GET['month']) ? date('m') : $_GET['month'];
        $year = empty($_GET['year']) ? date('Y') : $_GET['year'];

        $nextMonth = $month == 12 ? 1 : $month + 1;
        $nextYear = $month == 12 ? $year + 1 : $year;

        $prevMonth = $month == 1 ? 12 : $month - 1;
        $prevYear = $month == 1 ? $year - 1 : $year;

        $daysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
        $firstDayOfMonth = date('N', mktime(0, 0, 0, $month, 1, $year));

        echo "<h1>" . date('F, Y', mktime(0, 0, 0, $month, 1, $year)) . "</h1>";
        echo "<a href='?month=$prevMonth&year=$prevYear'><i class='bx bxs-chevron-left'></i></a> 
              <a href='?month=".date('m')."&year=".date('Y')."'>Today</a>
              <a href='?month=$nextMonth&year=$nextYear'><i class='bx bxs-chevron-right'></i></a>";
              
        echo "<table>";
        echo "<tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
             </tr>";
        echo "<tr>";

        for ($i = 1; $i < $firstDayOfMonth; $i++) {
            echo "<td></td>";
        }

        for ($day = 1; $day <= $daysInMonth; $day++) {
            echo "<td>$day</td>";
            if ((($day + $firstDayOfMonth - 1) % 7 == 0) && ($day != $daysInMonth)) {
                echo "</tr><tr>";
            }
        }

        echo "</tr>";
        echo "</table>";

        $date = $_POST['date'];
        $event = $_POST['event'];

        // Here you would typically add the event to a database
        // For simplicity, we'll just print it out

        echo "Event '$event' added on $date";
    ?>





