<?php 
include 'conn.php';
?>
<?php
if(isset($_GET['ID'])){
	$qry = $conn->query("SELECT *,concat(First_Name,' ',Last_Name) as name FROM users where ID = ".$_GET['ID'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
}
?>

<html>
<i class='fa fa-id-card'></i> User Details
<div class="container-fluid">
	<div class="card card-widget widget-user shadow">
      <div class="widget-user-header bg-dark">
        <h3 class="widget-user-username"><?php echo ucwords($name) ?></h3>

</html>