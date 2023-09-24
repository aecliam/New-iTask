<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title>  </title>-->
        <link rel="stylesheet" type="text/css" href="css/scholar-jhs-add.css"/>

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
                        <a href="project-list.php">
                            <i class='bx bx-collection'></i>
                            <span class="link-name"> Projects </span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="project-list.php"> Projects </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="task-list.php">
                            <i class='bx bx-pin'></i>
                            <span class="link-name"> Tasks </span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="task-list.php"> Tasks </span>
                        </ul>
                    </li>

                    <li>
                        <div class="iocn-link">
                            <a href="scholars.php">
                                <i class='bx bx-spreadsheet'></i>
                                <span class="link-name "> Scholars </span>
                            </a>
                            <i class='bx bxs-chevron-down arrow'></i>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="scholars_jhs.php"> Junior Highschool </a></li>
                            <li><a href="scholars_shs.php"> Senior Highschool </a></li>
                            <li><a href="scholars_clg.php"> College </a></li>
                            <li><a href="scholars_grad.php"> Graduate School </a></li>
                            <li><a href="scholars_als.php"> ALS </a></li>
                            <li><a href="scholars_ath.php"> Athlete </a></li>
                            <li><a href="scholars_art.php"> Artist </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.php">
                            <i class='bx bx-calendar'></i>
                            <span class="link-name"> Calendar </span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="calendar.php"> Calendar </span>
                        </ul>
                    </li>

                    <li>
                        <a href="chat.php">
                            <i class='bx bx-message'></i>
                            <span class="link-name"> Inbox </span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="chat.php"> Inbox </span>
                        </ul>
                    </li>

                    <!-- <li>
                        <a href="./index.php?page=conference">
                            <i class='bx bxs-video'></i>
                            <span class="link-name"> Conference </span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="./index-new.php?page=conference"> Conference </span>
                        </ul>
                    </li> -->
                </hr>
                
                <hr>
                    <li>
                        <a href="user_list.php">
                            <i class='bx bx-user'></i>
                            <span class="link-name"> Users </span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="user_list.php"> Users </span>
                        </ul>
                    </li>

                    <li>
                        <a href="archive.php">
                            <i class='bx bx-archive'></i>
                            <span class="link-name"> Archives </span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="archive.php"> Archives </span>
                        </ul>
                    </li>
                
                    <!-- logout-->
                    
                    <li>
                        <div class="logout">
                        <!--div class="log"-->
                            <a href="login.php">
                                <i class='bx bx-log-out'></i>
                                <span class="link-name"> Logout </span>
                            </a>
                            <ul class="sub-menu blank">
                                <li><a class="link_name" href="login.php"> Logout </span>
                            </ul>
                        </div>
                    </li>
                </hr>
            </ul>
        </div>

        <section class="home-section">

            <div class="text header text-align">
                <!-- <form method="POST" action="">
                    <input type="search" name="search" placeholder="Search here">
                    <input type="submit" name="submit" value="Search">
                </form> -->

                <a href="user-profile.php">
                    <i class='bx bx-user'></i>
                    <span class="link-name" href="user-profile.php"> User Account </span> <!-- change to user account, fetch from db -->
                </a>
            </div>
            
            <div class="wrapper">
                <div class="add">
                    <h1> Add Junior High School Student </h1>
                    <form method="$_POST">

                        <table border="1">
                            <tr>                         
                                <th colspan="5"> Personal Information
                            </tr>

                            <tr>
                                <td rowspan="4"> <input class="box-upload" type="file" id="previewImage" name="photo" accept=".jpg, .jpeg, .png" style="max-width: 200px; max-height: 200px;">
                                <td><input type="text" name="firstname" placeholder="First Name">
                                <td><input type="text" name="middletname" placeholder="Middle Name">
                                <td><input type="text" name="lastname" placeholder="Last Name">
                                <td><input type="text" name="suffix" placeholder="Suffix">
                            </tr>

                            <tr>
                                <th colspan="4"> Address </th>
                            </tr>

                            <tr>
                                <td><input type="text" name="lstreet" placeholder="Lot/Street">
                                <td><input type="text" name="brgy" placeholder="Baranggay">
                                <td><input type="text" name="city" placeholder="City">
                                <td><input type="text" name="zipcode" placeholder="Zip Code">
                            </tr>

                            <tr>
                                <th> Birthday </th>
                                <th> Sex </th>
                                <th> Contact Number </th>
                                <th> Email </th>
                            </tr>

                            <tr>
                                <td><label class="upload" for="file"> Upload File </label>
                                <td><input type="text" name="email" placeholder="Birthdate" required>
                                <td><select name="gender" placeholder="- Select -" required>
                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female </option>
                                    </select>
                                <td><input type="text" value="+63" maxlength="13" name="contact">
                                <td><input type="text" name="email" placeholder="Email" required>
                            </tr>
                            
                            <tr>                         
                                <th colspan="3"> Education Background
                                <th colspan="2"> Parent/Guardian
                            </tr>

                            <tr>
                                <th colspan="2"> School Attended </th>
                                <th> Grade Level </th>
                                <th> Name </th>
                                <th> Contact Number </th>
                            </tr>

                            <tr>
                                <td colspan="2"><input type="text" name="school" placeholder="School" required>
                                <td>
                                    <select name="gradelvl" placeholder="- Select -" required>
                                        <option value="Grade 7"> Grade 7 </option>
                                        <option value="Grade 8"> Grade 8 </option>
                                        <option value="Grade 9"> Grade 9 </option>
                                        <option value="Grade 10"> Grade 10 </option>
                                    </select>
                                <td><input type="text" name="pguardian">
                                <td><input type="text" value="+63" maxlength="13" name="pgcontact">
                            </tr>

                            <tr>                         
                                <th colspan="5"> Requirements
                            </tr>

                            <!-- Proof of Current Enrollment/Certificate of Registration -->
                            <tr>
                                <tr>
                                    <td colspan="3"><label> Certificate of Registration </label>
                                    <td colspan="2"><input type="file" id="file" name="cert_regs">
                                </tr>

                            <!-- Latest Report Card/Grades Slip -->
                                <tr>
                                    <td colspan="3"><label> Latest Report Card or Grades Slip </label>                  	        
                                    <td colspan="2"><input type="file" id="file" name="rep_card">
                                </tr>

                            <!-- Valid ID or School ID -->
                                <tr>
                                    <td colspan="3"><label> Valid ID or School ID </label>
                                    <td colspan="2"><input type="file" id="file" name="valid_id">

                                </tr>

                            <!-- Barangay Certificate -->
                                <tr>
                                    <td colspan="3"><label> Barangay Certificate </label>
                                    <td colspan="2"><input type="file" id="file" name="bgy_cert">
                                </tr>

                            <!-- Parent's Pay Slip/Social Case Study/Certificate of Eligibility issued by the MSWDO -->
                                <tr>
                                    <td colspan="3"><label> Parent's Pay Slip/Social Case Study/Certificate of Eligibility issued by the MSWDO </label>
                                    <td colspan="2"><input type="file" id="file" name="payslip">
                                </tr>

                            <!-- Buttons -->
                                <tr>
                                    <td colspan="5">
                                        <button type="button" onclick="history.back()"> Back </button>
                                        <button type="submit" onclick="scholars_jhs.php" name="add"> Save </button>
                                </tr>
                            </tr>
                        </form>
                </div>
            </div>
        </section>    
        
        <?php

        include 'conn.php';
        // include 'index-new.php';

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

          $sql = "INSERT INTO scholars_jhs (Scholar_ID, First_Name, Middle_Name, Last_Name, Birthdate, Gender, Contact, Address, School, Grade_Level, created_on) VALUES ('$scholar_id', '$firstname', '$middlename', '$lastname', '$birthdate', '$gender', '$contact', '$address', '$school', '$gradelvl', NOW())";
          if($conn->query($sql)){
            echo '<script> alert("Student Added Successfully") </script>';
          }
          else{
            $_SESSION['error'] = $conn->error;
          }
        }
        else{
              echo '<script> alert("Fill up add form first") </script>';
        }
      ?>

        <script>
            let arrow = document.querySelectorAll(".arrow");
            for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e)=>{
                let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
                    });
            }
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
            });

            // image preview

            const imageInput = document.getElementById('imageInput');
            const previewImage = document.getElementById('previewImage');
            function previewSelectedImage() {
                const file = imageInput.files[0];
                if (file) {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    }
                }
            }
      imageInput.addEventListener('change', previewSelectedImage);
        </script>
    </body>    
</html>


