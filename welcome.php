<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/2a904356e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
     <section id="main">

            <nav>
                <a href="#"class="logo"><img src="./images/logo1-modified.png" alt=""></a>

                <input type="checkbox" class="menu-btn" id="menu-btn">
                <label class="menu-icon"for="menu-btn">
                <span class="nav-icon"></span>
                </label>
                <ul class="menu">
                        <li><a href="#main">Home</a></li>
                        <li><a href="#skill">Skills</a></li>
                        <li><a href="#project">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            
            <div class="content">
                
                <div class="model">
                
                <img src="./images/123.jpg" alt="">

                </div>

                <div class="main-text">
                    <h1>Hej, une jom <br> <spam style="color:#36b7b5;">Lorik Sylejmani!</spam></h1>
                    <p>Dhe kjo eshte portfolio ime.</p>
                </div>
            </div>
     </section>

     <section id="skill">
            <div class="skill-text">
                <div class="skill-heading">
                    <h3 style="color:#36b7b5;">Njohurit : </h3>
                </div>

                <div class="s-box-container">
                        <div class="skill-box">
                                <div class="s-box-icon">
                                <i class="fab fa-html5"></i>
                                </div>
                                    <div class="s-box-text">
                                    <h2>HTML</h2>
                                        <p>Njohuri profesionale te fituara gjate 2 vitet si Web Developer </p>
                                    </div>
                                
                        </div>  
                        
                        <div class="skill-box">
                                <div class="s-box-icon">
                                <i class="fab fa-css3-alt"></i>
                                </div>
                                    <div class="s-box-text">
                                    <h2>CSS</h2>
                                        <p>Njohuri profesionale te fituara gjate 2 vitet si Web Developer.</p>
                                    </div>
                                
                        </div>

                        <div class="skill-box">
                                <div class="s-box-icon">
                                <i class="fab fa-php"></i>
                                </div>
                                    <div class="s-box-text">
                                    <h2>PHP</h2>
                                        <p>Njohuri te mira te fituara gjate 2 vitet si Web Developer.</p>
                                    </div>
                                
                        </div>

                        <div class="skill-box">
                                <div class="s-box-icon">
                                <i class="fab fa-php"></i>
                                </div>
                                    <div class="s-box-text">
                                    <h2>Laravel</h2>
                                        <p>Njohuri te mira per arkitekturen MVC.</p>
                                    </div>
                                
                        </div>

                        <div class="skill-box">
                                <div class="s-box-icon">
                                <i class="fas fa-database"></i>
                                </div>
                                    <div class="s-box-text">
                                        <h2>SQL</h2>
                                        <p>Njohuri profesionale te fituara  si Intern Backend Developer.</p>
                                    </div>
                                
                        </div>
                </div>

            </div>

            <div class="skill-img">
                    <img src="./images/12345.jpg" alt="">
            </div>
     </section>
    <section id="project">
                <div class="project-heading">
                   <h1><span>Projektet</span> </h1>
                    <br>
                    <h3></h3>
                </div>

                <div class="project-box-container">
                    <div class="project-box">
                        <img src="./images/planner.webp" alt="">
                        <p> <strong>SchoolPlanner</strong><br> Nje projekt i realizuar me .NET5 bazuar ne MVC</p>
                        <a href="https://github.com/Lorik3/SchoolPlanner"target=_blank>Shiko Projektin</a>
                    </div>

                    <div class="project-box">
                        <img src="./images/blog.jpg" alt="">
                        <p><strong>Project-Blog</strong> <br> Nje projekt i realizuar me Laravel (CRUD)</p>
                        <a href="https://github.com/Lorik3/Project-Blog"target=_blank>Shiko Projektin</a>
                    </div>

                    <div class="project-box">
                        <img src="./images/fast.jpg" alt="">
                        <p><strong>FastFood</strong> <br>Nje projekt i realizuar me PHP (Admin Panel , CRUD) </p>
                        <a href="https://github.com/Lorik3/FastFood"target=_blank>Shiko Projektin</a>
                    </div>

                    <div class="project-box">
                        <img src="./images/libra.jpg" alt="">
                        <p><strong>Libraria</strong> <br>Nje projekt i realizuar me Java (GUI) </p>
                        <a href="https://github.com/Lorik3/labCourse-UBT"target=_blank>Shiko Projektin</a>
                    </div>

                    <div class="project-box">
                        <img src="./images/SkenderBoi.png" alt="">
                        <p><strong>Skender-Boi</strong> <br> Nje projekt i realizuar me Unity </p>
                        <a href="#"target=_blank>Shiko Projektin</a>
                    </div>
                   

                </div>
    </section>

        



 <?php
        include 'conctact.php';
 ?>



    






    <footer>
        <p> Lorik Sylejmani</p>
        <p>Copyright © 2022  </p>
    </footer>
</body>
</html>