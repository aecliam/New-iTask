<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title>  </title>-->
        <link rel="stylesheet" type="text/css" href="css/task-list.css"/>

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
				
				<button class="button" onclick="location.href='new-project.php'"> New Project </button>

					<table id="list">
		
							<tr>
								<th> Project </th>
								<th> Task </th>
								<th> Project Due Date </th>
								<th> Project Status </th>
								<th> Task Status </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td</td>
								<td>
									<p><b></b></p>
								</td>
								<td>
									<p><b></b></p>
									<p></p>
								</td>
								<td><b></b></td>
								<td><b></b></td>
								<td >
									
								</td>
								<td>
									
								</td>
								<td >
									<button type="button"> Action </button>
										<div>
										<a> Add Productivity </a>
										</div>
								</td>
							</tr>	
						
						</tbody>
					</table>
				</div>
			</div>
		
		<style>
			table p{
				margin: unset !important;
			}
			table td{
				vertical-align: middle !important
			}
		</style>

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
        </script>
    </body>
    
</html>

