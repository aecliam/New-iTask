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
        <div class="sidebar open">
            <div class="logo-details">
                <i class='bx bx-menu'></i>
                <a href="index-new.php">
                    <span class="logo-name" > TYDO </span>
                </a>
            </div>

            <ul class="nav-links">
                <li>
                    <a href="index-new.php">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link-name"> Dashboard </span>
                    </a>                   
                </li>

                <hr> 
                    <li>
                        <div class="iocn-link">
                            <a href="./index-new.php?page=project_list">
                                <i class='bx bx-collection'></i>
                                <span class="link-name" href="./index-new.php?page=project_list"> Projects </span>
                            </a>
                        </div>

                    </li>

                    <li>
                        <a href="./index-new.php?page=task_list">
                            <i class='bx bx-pin'></i>
                            <span class="link-name" href="./index-new.php?page=tasks"> Tasks </span>
                        </a>

                    </li>

                    <li>
                        <a href="./index-new.php?page=scholars">
                            <i class='bx bx-spreadsheet'></i>
                            <span class="link-name" href="./scholars.php?page=scholars"> Scholars </span>
                        </a>
                    </li>

                    <li>
                        <a href="./index-new.php?page=calendar">
                            <i class='bx bx-calendar'></i>
                            <span class="link-name" href="./index-new.php?page=calendar"> Calendar </span>
                        </a>
                    </li>

                    <li>
                        <a href="./index-new.php?page=inbox">
                            <i class='bx bx-message'></i>
                            <span class="link-name">Inbox</span>
                        </a>
                    </li>

                    <!--li>
                        <a href="./index.php?page=conference">
                            <i class='bx bxs-video'></i>
                            <span class="link_name">Conference</span>
                        </a>                        
                    </li-->
                </hr>
                
                <hr>
                    <li>
                        <div class="iocn-link">
                            <a href="./index.php?page=user_list">
                                <i class='bx bx-user'></i>
                                <span class="link-name" href="./index.php?page=user_list"> Users </span>
                            </a> 
                        </div>
                    </li>

                    <li>
                        <a href="./index.php?page=archive">
                            <i class='bx bx-archive'></i>
                            <span class="link-name"> Archives </span>
                        </a>

                    </li>
                
                    <!-- logout-->
                    
                    <li>
                        <div class="logout">
                            <a href="login.php">
                                <i class='bx bx-log-out'></i>
                                <span class="link-name"> Logout </span>
                            </a>
                        </div>
                    </li>
                </hr>
            </ul>
        </div>

        <section class="home-section">
                <div class="home-content">
                    <div class="text header text-align">
                        <a href="user-profile.php">
                            <i class='bx bx-user'></i>
                            <span class="link-name" href="user-profile.php"> User Account </span> <!-- change to user account, fetch from db -->
                        </a>
                    </div>
                </div>
            </section>


<table class="table">
  <thead>
    <tr>
      <th>Scholar ID</th>
      <th>Full Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    $servername = "localhost"

    <?php

    //Connection
    $conn = mysqli_connect("localhost", "root", "", "itask_db");

    if ($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "SELECT * FROM scholars";
    $result = $conn->query($sql);
    
    if ($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
        echo "<tr>
            <th> . $row["SID"] . </th>
            <td> . $row["LN"] . $row["FN"] . $row["MI"] . </td>
            <td> 
                <a href='update'> View </a>
            </td> 
        </tr>";
        }
        echo "</table>;"
    }
    else {
        echo "0 result";
    }

    $conn-> close();

    ?>
  </tbody>
</table>

</html>