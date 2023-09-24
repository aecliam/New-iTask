<!-- Add -->
<?php

    include 'conn.php';
    include 'index-new.php';

	if(isset($_POST['add'])){
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
		    $school = $_POST['school'];
		    $gradelvl = $_POST['gradelvl'];
        $photo = $_POST['photo'];
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

		$sql = "INSERT INTO scholars_jhs (Scholar_ID, First_Name, Middle_Name, Last_Name, Birthdate, Gender, Contact, Address, School, Grade_Level, photo, registration, report_card, valid_id, bgy_cert, payslip) 
    VALUES ('$scholar_id', '$firstname', '$middlename', '$lastname', '$birthdate', '$gender', '$contact', '$address', '$school', '$gradelvl', '$photo', '$reg', '$card', '$valid_id', '$bgy_cert', '$payslip')";
		if($conn->query($sql)){
			echo '<script> alert("Student Added Successfully") </script>';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
?>

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
        <h4><b>Add Student</b></h4>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST">
                <!-- First Name -->
          		<div>
                  	<label>Firstname</label>
                  	<div>
                    	<input type="text" name="firstname" required>
                  	</div>
                </div>
                <!-- Middle Initial -->
                <div>
                  	<label>Middle Name</label>

                  	<div>
                    	<input type="text" name="middlename" required>
                  	</div>
                </div>
                <!-- Last Name -->
                <div>
                  	<label>Lastname</label>
                  	<div>
                    	<input type="text" name="lastname" required>
                  	</div>
                </div>
                <!-- Address -->
                <div>
                  	<label>Home Address</label> 
                  	<div> 
                      <textarea name="address"></textarea>
                  	</div>

                </div>
                <!-- Birth Date -->
                <div>
                  	<label>Birthdate</label>
                  	<div> 
                      <div>
                        <input type="text" name="birthdate">
                      </div>
                  	</div>
                </div>
                <!-- Contact Info -->
                <div>
                    <label>Contact Info</label>
                    <div>
                      <input type="text" name="contact">
                    </div>
                </div>
                <!-- Gender -->
                <div>
                    <label>Gender</label>
                    <div> 
                      <select name="gender" placeholder="- Select -" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
                <!-- School Attended -->
                <div>
                  	<label>School Attended</label>
                  	<div>
                      <input type="text" name="school">
                  	</div>
                </div>
                <!-- Grade Level -->
                <div>
                    <label>Grade Level</label>
                    <div> 
                      <select name="gradelvl" placeholder="- Select -" required>
                        <option value="Grade 7">Grade 7</option>
                        <option value="Grade 8">Grade 8</option>
                        <option value="Grade 9">Grade 9</option>
                        <option value="Grade 10">Grade 10</option>
                      </select>
                    </div>
                </div>  
                
                <!-- Photo -->
                <div>
                  	<label>Photo(2x2)</label>
                  	<div>
                    <input type="file" id="file" name="photo">
                  	</div>
                </div>
                <!-- Proof of Current Enrollment/Certificate of Registration -->
                <div>
                  	<label>Certificate of Registration</label>
                  	<div>
                      <input type="file" id="file" name="cert_regs">
                  	</div>
                </div>
                <!-- Latest Report Card/Grades Slip -->
                <div>
                  	<label>Latest Report Card or Grades Slip</label>
                  	<div>
                    <input type="file" id="file" name="rep_card">
                  	</div>
                </div>
                <!-- Valid ID or School ID -->
                <div>
                  	<label>Valid ID or School ID</label>
                  	<div>
                    <input type="file" id="file" name="valid_id">
                  	</div>
                </div>
                <!-- Barangay Certificate -->
                <div>
                  	<label>Barangay Certificate</label>
                  	<div>
                    <input type="file" id="file" name="bgy_cert">
                  	</div>
                </div>
                <!-- Parent's Pay Slip/Social Case Study/Certificate of Eligibility issued by the MSWDO -->
                <div>
                  	<label>Parent's Pay Slip/Social Case Study/Certificate of Eligibility issued by the MSWDO</label>
                  	<div>
                    <input type="file" id="file" name="payslip">
                  	</div>
                </div>
                <!-- Buttons -->
          	<div>
            	<button type="button" onclick="history.back()">Back</button>
            	<button type="submit" onclick="scholars_jhs.php" name="add">Save</button>
            </div>
            	</form>

        </div>
    </div>
</div>
</body>
</html>