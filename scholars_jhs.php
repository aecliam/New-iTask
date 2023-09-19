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
    <?php //include 'navbar.php'; ?>
    <?php include 'conn.php'; ?>
    <div class="box-header with-border">
    <a href="scholar_jhs_add.php"><button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['ID']; ?>"> Add New Student </button></a>
    </div>
        <table class="table">
            <thead>
                <tr>
                <th> Scholar ID </th>
                <th> Full Name </th>
                <th> School </th>
                <th> Grade Level </th>
                <th> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM scholars_jhs";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                ?>
                    <tr>
                    <td><?php echo $row['Scholar_ID']; ?></td>
                    <td><?php echo $row['Last_Name'].', '.$row['First_Name'].' '.$row['Middle_Name']; ?></td>
                    <td><?php echo $row['School'] ?></td>
                    <td><?php echo $row['Grade_Level'] ?></td>
                    <td><button class="btn btn-primary btn-sm"><a href="scholar_jhs_view.php" data-id="<?php echo $row['ID']; ?>"><i class="fas fa-folder"></i> View Profile </a></button></td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>    

</html>