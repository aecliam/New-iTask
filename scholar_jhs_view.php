<?php

include "conn.php";

if(isset($_GET['id'])){
	$qry = $conn->query("SELECT *,concat(First_Name,' ',Last_Name) as name FROM users where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
}

/*
if(isset(($_GET["id"]))) {
    $mm = $_GET['id'];

    $qry = "SELECT First_Name FROM scholars_jhs WHERE id='$mm'";
    $rslt = mysqli_query($conn, $qry);
    $row = mysqli_fetch_array($rslt);

    $scholar_id = $row['Scholar_ID'];
    $lastname = $row['Last_Name'];
    $firstname = $row['First_Name'];
    $middlename = $row['Middle_Name'];
    $bdate = $row['Birthdate'];
    $gender = $row['Gender'];
    $contact = $row['Contact'];
    $address = $row['Address'];
    $school = $row['School'];
    $gradelvl = $row['Grade_Level'];
    $photo = $row['photo'];
    $registration = $row['registration'];
    $report_card = $row['report_card'];
    $valid_id = $row['valid_id'];
    $bgy_cert = $row['bgy_cert'];
    $payslip = $row['payslip'];
}
*/
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTC-8">
    </head>
<body>
        <h3 class="widget-user-username"><?php echo ucwords($name) ?></h3>
</body>
</html>
