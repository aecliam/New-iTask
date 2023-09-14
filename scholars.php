<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title>  </title>-->
        <link rel="stylesheet" type="text/css" href="css/index-new.css"/>

        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <table class="table">
            <thead>
                <tr>
                <th> Scholar ID </th>
                <th> Full Name </th>
                <th> Action </th>
                </tr>
            </thead>
        <tbody> 

        <?php /*

        $servername = "localhost"

        //Connection
        $conn = mysqli_connect("localhost", "root", "", "itask_db");

        if ($connection->connect_error){
            die("Connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT * FROM scholars";
        $result = $conn->query($sql); 
        
        if ($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
            echo "<tr>"; // whats the problem here?
                "<th> . $row["SID"] . </th>";
                "<td> . $row["LN"] . $row["FN"] . $row["MI"] . </td>";
                "<td> ";
                    <a href='update'> View </a>
                "</td> "
            "</tr>";
            }
            echo "</table>;"
        }
        else {
            echo "0 result";
        }

        if ($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<th>" . $row["SID"] . "</th>";
                echo "<td>" . $row["LN"] . $row["FN"] . $row["MI"] . "</td>";
                echo "<td>";
                echo "<a href='update'> View </a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }

        $conn-> close(); */

        ?>
        </tbody>
        </table>    

</html>