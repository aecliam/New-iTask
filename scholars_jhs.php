<?php include 'conn.php'; ?>
<?php include 'index-new.php'; ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title>  </title>-->
        <link rel="stylesheet" type="text/css" href="css/index-new.css"/>
        <link rel="stylesheet" type="text/css" href="css/scholar.css"/>

        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<div class="content-wrapper">
<section class="content-header">
    <h1>
        Scholar List (Junior Highschool)
    </h1>
</section>
<section class="content">
    <div class="box-header with-border">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
                <a href="scholar_jhs_add.php"><button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['ID']; ?>"> <b>+</b> Add New Student </button></a>
            </div>
        <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th> Scholar ID </th>
                <th> Full Name </th>
                <th> School </th>
                <th> Grade Level </th>
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
                    <td><a href="scholar_jhs_view.php" data-id="<?php echo $row['ID']; ?>"> <?php echo $row['Last_Name'].', '.$row['First_Name'].' '.$row['Middle_Name']; ?> </a> </td>
                    <td><?php echo $row['School'] ?></td>
                    <td><?php echo $row['Grade_Level'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>    
</body>
</html>