<?php
if(isset($_POST['add'])){
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

  //Automated Scholar ID
  $letters = '';
  $numbers = '';
  foreach (range('A', 'Z') as $char) {
	  $letters .= $char;
  }
  for($i = 0; $i < 10; $i++){
	  $numbers .= $i;
  }
  $scholar_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);

  $sql = "INSERT INTO scholars_gs (scholar_id, firstname, middlename, lastname, suffix, bdate, gender, contact, address, email, school, gradelvl, pgname, pgcontact, avatar, registration, report_card, valid_id, bgy_cert, payslip) 
  VALUES ('$scholar_id', '$firstname', '$middlename', '$lastname', '$suffix', '$birthdate', '$gender', '$contact', '$address', '$email', '$school', '$gradelvl', '$pgname', '$pgcontact', '$avatar', '$reg', '$card', '$valid_id', '$bgy_cert', '$payslip')";
  if($conn->query($sql)){
	  echo '<script> alert("Student Added Successfully") </script>';
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
							<input type="text" name="firstname" class="form-control form-control-sm">
                            
						</div>
						<div class="form-group">
							<label for="" class="control-label">Middle Name</label>
							<input type="text" name="middlename" class="form-control form-control-sm">
						</div>
                        <div class="form-group">
							<label for="" class="control-label">Last Name</label>
							<input type="text" name="lastname" class="form-control form-control-sm">
						</div>
                        <div class="form-group">
							<label for="" class="control-label">Suffix</label>
							<input type="text" name="suffix" class="form-control form-control-sm">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Gender</label>
							<select name="gender" class="custom-select custom-select-sm">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
                        <div class="form-group">
              				<label for="" class="control-label">Birth Date</label>
              				<input type="date" class="form-control form-control-sm" autocomplete="off" name="bdate">
            			</div>
                        <div class="form-group">
							<label for="" class="control-label">Home Address</label>
							<input type="text" name="address" class="form-control form-control-sm">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Email Address</label>
							<input type="text" name="email" class="form-control form-control-sm">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="contact" class="form-control form-control-sm">
						</div>
						<div class="form-group">
							<label for="" class="control-label">School</label>
							<input type="text" name="school" class="form-control form-control-sm">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Gender</label>
							<select name="gender" class="custom-select custom-select-sm">
								<option value="Grade 7">Grade 7</option>
								<option value="Grade 8">Grade 8"</option>
								<option value="Grade 9">Grade 9</option>
								<option value="Grade 10">Grade 10</option>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Parent/Guardian's Name</label>
							<input type="text" name="pgname" class="form-control form-control-sm">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Parent/Guardian's Contact Number</label>
							<input type="text" name="pgcontact" class="form-control form-control-sm">
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
					<button class="btn btn-primary mr-2" name="add">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=scholar_list_(GS)'">Cancel</button>
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