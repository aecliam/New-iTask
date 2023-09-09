<html lang="en" dir="ltr">
    <head>

        <meta charset="UTF-8">
        <!--<title>  </title>-->
        <link rel="stylesheet" type="text/css" href="css/sidebar.css"/>

        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="sidebar open">
            <div class="logo-details">
                <i class='bx bx-menu'></i>
                <span class="logo_name"> TAYTAY YOUTH </span>
            </div>

            <ul class="nav-links">
                <li>
                    <a href="index.php">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name"> Dashboard </span>
                    </a>

                    <hr>                    
                </li>

                <li>
                    <div class="iocn-link">
                        <a href="./index.php?page=project_list">
                            <i class='bx bx-collection'></i>
                            <span class="link_name" href="./index.php?page=project_list"> Projects </span>
                        </a>
                    </div>

                </li>

                <li>
                    <a href="./index.php?page=task_list">
                        <i class='bx bx-pin'></i>
                        <span class="link_name"> Tasks </span>
                    </a>

                </li>

                <li>
                    <a href="./index.php?page=scholars">
                        <i class='bx bx-spreadsheet'></i>
                        <span class="link_name" href="./index.php?page=scholars"> Scholars </span>
                    </a>

                </li>

                <li>
                    <a href="./index.php?page=calendar">
                        <i class='bx bx-calendar'></i>
                        <span class="link_name" href="./index.php?page=calendar"> Calendar </span>
                    </a>

                </li>

                <li>
                    <a href="./index.php?page=inbox">
                        <i class='bx bx-message'></i>
                        <span class="link_name">Inbox</span>
                    </a>

                </li>

                <!--li>
                    <a href="./index.php?page=conference">
                        <i class='bx bxs-video'></i>
                        <span class="link_name">Conference</span>
                    </a>
                        <ul class="sub-menu blank">
                        <li><a class="link_name" href="./index.php?page=conference">Conference</a></li>
                    </ul>
                </li-->
                
                <hr>
                    <li>
                        <div class="iocn-link">
                            <a href="./index.php?page=user_list">
                                <i class='bx bx-user'></i>
                                <span class="link_name" href="./index.php?page=user_list"> Users </span>
                            </a> 
                        </div>

                    </li>

                    <li>
                        <a href="./index.php?page=archive">
                            <i class='bx bx-archive'></i>
                                <span class="link_name">Archives</span>
                        </a>

                    </li>
                
                    <!-- logout-->
                    
                    <li>
                        <div class="logout">
                            <a href="login.php">
                                <i class='bx bx-log-out'></i>
                                <span class="link_name"> Logout </span>
                            </a>
                        </div>
                    </li>
                    

                </hr>
            </ul>
        </div>
                    
            
        </section>
        
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
