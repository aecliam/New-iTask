<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$type_arr = array('',"Admin","Project Manager","Employee");
	$qry = $conn->query("SELECT *,concat(firstname,' ',middlename,' ',lastname,' ',suffix) as name FROM scholars_clg where id = ".$_GET['id'])->fetch_array();
	
foreach($qry as $k => $v){
	$$k = $v;
}
}
?>
<div class="container-fluid">
	<div class="card card-widget widget-user shadow">
      <div class="widget-user-header bg-dark">
        <h3 class="widget-user-username"><?php echo ucwords($name) ?></h3>
        <h5 class="widget-user-desc"><?php echo $scholar_id ?></h5>
      </div>
      <div class="widget-user-image">
      	<?php if(empty($avatar) || (!empty($avatar) && !is_file('assets/uploads/'.$avatar))): ?>
      	<span class="brand-image img-circle elevation-2 d-flex justify-content-center align-items-center bg-primary text-white font-weight-500" style="width: 90px;height:90px"><h4><?php echo strtoupper(substr($firstname, 0,1).substr($lastname, 0,1)) ?></h4></span>
      	<?php else: ?>
        <img class="img-circle elevation-2" src="assets/uploads/<?php echo $avatar ?>" alt="User Avatar"  style="width: 90px;height:90px;object-fit: cover">
      	<?php endif ?>
      </div>
      <div class="card-footer">
        <div class="container-fluid">
        	<dl>
        		<dt>Birth Date</dt>
        		<dd><?php echo $bdate ?></dd>
				<dt>Gender</dt>
        		<dd><?php echo $gender ?></dd>
				<dt>Contact Number</dt>
        		<dd><?php echo $contact ?></dd>
				<dt>Home Address</dt>
        		<dd><?php echo $address ?></dd>
				<dt>School</dt>
        		<dd><?php echo $school ?></dd>
				<dt>Grade Level</dt>
        		<dd><?php echo $gradelvl ?></dd>
				<dt>Parent/Guardian Name</dt>
        		<dd><?php echo $pgname ?></dd>
				<dt>Parent/Guardian Contact Number</dt>
        		<dd><?php echo $pgcontact ?></dd>
				<dt>Certificate of Registration</dt>
        		<dd><?php echo $registration ?></dd>
				<dt>Report Card or Grades Slip</dt>
        		<dd><?php echo $report_card ?></dd>
				<dt>Valid ID or School ID</dt>
        		<dd><?php echo $valid_id ?></dd>
				<dt>Barangay Certificate</dt>
        		<dd><?php echo $bgy_cert ?></dd>
				<dt>Parent's Pay Slip or Social Case Study or Certificate of Eligibility(Issued by the MSWDO)</dt>
        		<dd><?php echo $payslip ?></dd>

        	</dl>
        </div>
    </div>
	</div>
</div>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
</style>