<?php

if(isset(($_GET["id"]))) {
    $mm = $_GET['id'];

    $qry = "SELECT * FROM scholars_clg WHERE id='$mm'";
    $rslt = mysqli_query($conn, $qry);
    $row = mysqli_fetch_array($rslt);

    $scholar_id = $row['scholar_id'];
    $lastname = $row['lastname'];
    $firstname = $row['firstname'];
    $middlename = $row['middlename'];
    $suffix = $row['suffix'];
    $bdate = $row['bdate'];
    $gender = $row['gender'];
    $contact = $row['contact'];
    $address = $row['address'];
    $email = $row['email'];
    $school = $row['school'];
    $gradelvl = $row['gradelvl'];
    $pgname = $row['pgname'];
    $pgcontact = $row['pgcontact'];
    $avatar = $row['avatar'];
    $registration = $row['registration'];
    $report_card = $row['report_card'];
    $valid_id = $row['valid_id'];
    $bgy_cert = $row['bgy_cert'];
    $payslip = $row['payslip'];
}
$id = $_GET['id'];
if(isset($_POST['edit'])){

	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$suffix = $_POST['suffix'];
	$birthdate = $_POST['bdate'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$school = $_POST['school'];
	$gradelvl = $_POST['gradelvl'];
	$pgname = $_POST['pgname'];
	$pgcontact = $_POST['pgcontact'];
	$avatar = $_POST['avatar'];
	$reg = $_POST['cert_regs'];
	$card = $_POST['rep_card'];
	$valid_id = $_POST['valid_id'];
	$bgy_cert = $_POST['bgy_cert'];
	$payslip = $_POST['payslip'];

    $sql = "UPDATE scholars_clg SET firstname = '$firstname', middlename ='$middlename', lastname = '$lastname', suffix = '$suffix', bdate = '$birthdate', gender = '$gender', contact = '$contact', address = '$address', email = '$email', school = '$school', gradelvl = '$gradelvl', pgname = '$pgname', pgcontact = '$pgcontact', avatar = '$avatar' 
    WHERE id = '$id'";
    if($conn->query($sql)){
	  echo '<script> alert("Student Updated Successfully") </script>';
  }
  else{
	  $_SESSION['error'] = $conn->error;
  }
  }
?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form method="POST">
				<div class="row">
					<div class="col-md-6 border-right">
                    <label for="" class="control-label"><h4>PERSONAL DETAILS</h4></label>
					<hr>
						<div class="form-group">
							<label for="" class="control-label">Photo (2x2)</label>
							<div class="form-group d-flex justify-content-center align-items-center">
							<img src="<?php echo isset($avatar) ? 'assets/uploads/'.$avatar :'' ?>" alt="Avatar" id="cimg" class="img-fluid img-thumbnail ">
						</div>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="avatar" onchange="displayImg(this,$(this))">
		                      <label class="custom-file-label" for="customFile">Choose file</label>
		                    </div>
						</div>
						<div class="form-group">
							<label for="" class="control-label">First Name</label>
							<input type="text" name="firstname" class="form-control form-control-sm" placeholder="<?php echo $firstname; ?>">
                            
						</div>
						<div class="form-group">
							<label for="" class="control-label">Middle Name</label>
							<input type="text" name="middlename" class="form-control form-control-sm" placeholder="<?php echo $middlename; ?>">
						</div>
                        <div class="form-group">
							<label for="" class="control-label">Last Name</label>
							<input type="text" name="lastname" class="form-control form-control-sm" placeholder="<?php echo $lastname; ?>">
						</div>
                        <div class="form-group">
							<label for="" class="control-label">Suffix</label>
							<input type="text" name="suffix" class="form-control form-control-sm" placeholder="<?php echo $suffix; ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Gender</label>
							<select name="gender" class="custom-select custom-select-sm" placeholder="<?php echo $gender; ?>">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
                        <div class="form-group">
              				<label for="" class="control-label">Birth Date</label>
              				<input type="date" class="form-control form-control-sm" autocomplete="on" name="bdate">
            			</div>
                        <div class="form-group">
							<label for="" class="control-label">Home Address</label>
							<input type="text" name="address" class="form-control form-control-sm" placeholder="<?php echo $address ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Email Address</label>
							<input type="text" name="email" class="form-control form-control-sm" placeholder="<?php echo $email ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="contact" class="form-control form-control-sm" placeholder="<?php echo $contact ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">School</label>
							<input type="text" name="school" class="form-control form-control-sm" placeholder="<?php echo $school ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Grade Level</label>
							<select name="gradelvl" class="custom-select custom-select-sm" placeholder="<?php echo $gradelvl ?>">
								<option value="Grade 7">Grade 7</option>
								<option value="Grade 8">Grade 8"</option>
								<option value="Grade 9">Grade 9</option>
								<option value="Grade 10">Grade 10</option>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Parent/Guardian's Name</label>
							<input type="text" name="pgname" class="form-control form-control-sm" placeholder="<?php echo $pgname ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Parent/Guardian's Contact Number</label>
							<input type="text" name="pgcontact" class="form-control form-control-sm" placeholder="<?php echo $pgcontact ?>">
						</div>
					</div>
					<div class="col-md-6">	
					<label for="" class="control-label"><h4>FILE REQUIREMENTS</h4></label><hr>		
						<div class="form-group">
							<label class="label control-label">Certificate of Registration</label>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="cert_regs">
		                      <label class="custom-file-label" for="customFile">Choose file</label>
		                    </div>
						</div>
						<div class="form-group">
							<label class="label control-label">Report Card/Grades Slip</label>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="rep_card">
		                      <label class="custom-file-label" for="customFile">Choose file</label>
		                    </div>
						</div>
						<div class="form-group">
							<label class="label control-label">Valid ID or School ID</label>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="valid_id">
		                      <label class="custom-file-label" for="customFile">Choose file</label>
		                    </div>
						</div>
						<div class="form-group">
							<label class="label control-label">Barangay Certificate</label>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="bgy_cert">
		                      <label class="custom-file-label" for="customFile">Choose file</label>
		                    </div>
						</div>
						<div class="form-group">
							<label class="label control-label">Parent's Pay Slip/Social Case Study/Certificate of Eligibility issued by the MSWDO</label>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="payslip">
		                      <label class="custom-file-label" for="customFile">Choose file</label>
		                    </div>
						</div>
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2" name="edit">Update</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=scholar_list_(CLG)'">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
</script>