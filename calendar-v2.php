    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        //$pdo = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');

        $month = empty($_GET['month']) ? date('m') : $_GET['month'];
        $year = empty($_GET['year']) ? date('Y') : $_GET['year'];

        $nextMonth = $month == 12 ? 1 : $month + 1;
        $nextYear = $month == 12 ? $year + 1 : $year;

        $prevMonth = $month == 1 ? 12 : $month - 1;
        $prevYear = $month == 1 ? $year - 1 : $year;

        $daysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
        $firstDayOfMonth = date('N', mktime(0, 0, 0, $month, 1, $year));

        /* if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['add'])) {
                $stmt = $pdo->prepare('INSERT INTO events (date, event) VALUES (?, ?)');
                $stmt->execute([$_POST['date'], $_POST['event']]);
            } elseif (isset($_POST['edit'])) {
                $stmt = $pdo->prepare('UPDATE events SET event = ? WHERE id = ?');
                $stmt->execute([$_POST['event'], $_POST['id']]);
            } elseif (isset($_POST['delete'])) {
                $stmt = $pdo->prepare('DELETE FROM events WHERE id = ?');
                $stmt->execute([$_POST['id']]);
            }
        } 

        $stmt = $pdo->prepare('SELECT * FROM events WHERE MONTH(date) = ? AND YEAR(date) = ?');
        $stmt->execute([$month, $year]);
        $events = $stmt->fetchAll(); */

        echo "<h1>" . date('F Y', mktime(0, 0, 0, $month, 1, $year)) . "</h1>";
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

        /*for ($i = 1; $i < $firstDayOfMonth; $i++) {
            echo "<td></td>";
        }

         for ($day = 1; $day <= $daysInMonth; $day++) {
            $date = "$year-$month-$day";
             $event = array_filter($events, function ($e) use ($date) {
                return $e['date'] == $date;
            }); 

            $event = reset($event); 
            echo "<td>";
            echo $day;
            if ($event) {
                echo "<br>" . htmlspecialchars($event['event']);
                echo "<form method='POST'>";
                echo "<input type='hidden' name='id' value='" . $event['id'] . "'>";
                echo "<input type='text' name='event' value='" . htmlspecialchars($event['event']) . "'>";
                echo "<input type='submit' name='edit' value='Edit'>";
                echo "<input type='submit' name='delete' value='Delete'>";
                echo "</form>";
            } else {
                echo "<form method='POST'>";
                echo "<input type='hidden' name='date' value='$date'>";
                echo "<input type='text' name='event'>";
                echo "<input type='submit' name='add' value='Add'>";
                echo "</form>";
            }
            echo "</td>";
            if ((($day + $firstDayOfMonth - 1) % 7 == 0) && ($day != $daysInMonth)) {
                echo "</tr><tr>";
            }
        } */

        echo "</tr>";
        echo "</table>";
    ?>
