<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Bootstrap Css Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    

    <!-- Internal Css Link -->
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
                
            }
            body
            {
                overflow-x:hidden;
            }

            header{
                height:100vh;
                background-color:black;
                position:relative;
                box-sizing:border-box;
                overflow:hidden;
            }

            .logo
            {
                background-color:rgba(0, 0 , 0, 0.8);
                box-shadow:1px 1px 1px 1px rgba(0, 0 , 0, 0.4);
            }
            .header-content{
                width:100%;
                height:auto;
                position:relative;
            }

            .bg-video{
                z-index:-10;
                opacity:0.3;
                
            }

            .navbar{
                position:absolute;
                width:100%;
                /* background-color:rgba(0, 0, 0, 0.3); */
                
                z-index: 10000;
            }

            .navbar-nav .nav-link{
                color:black;
                font-weight:bold;
                font-size:14px;
            }

            .text{
                top:35%;
                left:50%;
                transform:translate(-50%,-50%);
                position:absolute;
                
                padding:20px;
                color:white;
             
            }

          

            .regBtn{
                padding:5px 20px;
                position:absolute;
                left:48%;
                transform:translate(-50%);
                background-color:rgb(30, 149, 229);
               
                border-radius:5px;
                
            }

          

            .section{
                height:auto;
                padding:60px 85px;
                position:relative; 
                overflow:hidden;     
                display:flex;      
                justify-content:center;
                flex-direction:column;
                align-items:center;
            }

            .sContext
            {
                position:relative;
                overflow:hidden;
                width:40%;
            }
            .sContext2
            {
                position:relative;
                overflow:hidden;
                padding:0 60px;
                width:60%;
            }
           

            

          

            .section2{
                width:100%;
                height:auto;
                padding:130px 85px;
                background-color:rgba(0, 0, 0, 0.02);
                display:flex;      
                justify-content:center;
                align-items:center;
            }

            .s2main
            {
                
                display:flex;
                justify-content:center;
            }

         
            .s2Context
            {
                background-color:white;
                height:auto;
                position:relative;
                padding:60px 30px;
                width:47%;
                
            } 

     


   



         

            .footer{
              
                background-color:black;
                padding:60px;
                
            }



            .emailSubmitBtn{
                border:white 1px solid;
                padding:5px 30px;
                margin:10px 0;

            }

            .form{
                width:50%;
            }

            .form-control{
                width:100%;
            }

        
            .footer-navbar{
                background-color:black;
                display:flex;
                justify-content:center;
                align-items:center;
            }

            a:hover{
                border-bottom:rgba(30, 149, 229,0.9) solid 3px;
                font-size:17px;
                background-color:rgba(0, 0, 0, 0.4);
                color:green;
                transition:2s  ease; 
            }
            .nav-link .active{
                color:rgb(30, 149, 229);
                
            }

          

            #sec2img1{
                animation:rotate1 9s 1s ease infinite;
                opacity:0.7;
            }

            @keyframes rotate1 {
                0%{ transform:translate(-120px, 0)}
                50%{transform:translate(); 
                    transform:rotate(190deg);}

                100%{
                    transform:translate(0, -120px);
                    transform:rotate(-360deg)
                }
            }

            #vision{
                animation:anime2 11s 1s ease infinite;
                opacity:0.7;
            }

            @keyframes anime2 {
                0%{ transform:translate(-120px, 0)}
                50%{transform:translatex(-130px, 0); 
                    transform:rotate(-190deg);}

                100%{
                    transform:translate(70, 0);
                    transform:rotate(-360deg)
                }
            }

           
            .icons
            {
                position:absolute;
                right:2px;
            }


            .academics
            {
                padding:95px 95px;
            }

            .DropDown
            {
                border:1px solid rgba(0, 0 , 0, 0.3);
                margin-bottom:10px;
                padding:7px;
                box-shadow:1px 1px 1px 1px rgba(0, 0 , 0, 0.3);
            }

            /* maps and Email Section */
            .emails
            {
                padding:0 70px;
                margin:0 0px 0 40px;
            }

            .maps
            {
                padding:0 70px;
                margin:0 40px 0 0;
            }
           
            /* Media Keyword */
        


        </style>

</head>
<body>

    <header class="header">
        <div class="header-content">

           

            <!-- Navigation bar -->

            <nav class="navbar navbar-expand-lg bg-light py-2">
                <div class="container" style="position:relative;">
                    <div class="logo">
                        <img src="Media/Logo.svg" alt="" width="100" height="60" >
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-6">
                            <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        
                            
                            <li class="nav-item dropdown me-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Registration
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="registration_process.php">Registration Process</a></li>
                                    <li><a class="dropdown-item" href="registration.php">Register</a></li>
                                </ul>
                            </li>
                            <li class="nav-item me-2">
                            <a class="nav-link " href="academics.php">Academics</a>
                            </li>
                            
                            <li class="nav-item me-2">
                            <a class="nav-link active" aria-current="page" href="Gallery.php">Gallery</a>
                            </li>
                        
                            <li class="nav-item me-2">
                            <a class="nav-link" href="vacancies.php">Vacancies</a>
                            </li>

                            <li class="nav-item dropdown me-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Extra Murals
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="cultural_activities.php">Cultural Activities</a></li>
                                    <li><a class="dropdown-item" href="sports.php">Sports</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown me-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Contact Us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Facebook</a></li>
                                    <li><a class="dropdown-item" href="contact.php">Contact-Details</a></li>
                                </ul>
                            </li>
                        
                    
                    </ul>

                    <!-- <div class="icons" > -->
                        <i class="bi bi-facebook mx-3" style="font-size:30px"></i>
                        <i class="bi bi-twitter me-3" style="font-size:30px"></i>
                        <i class="bi bi-instagram" style="font-size:30px"></i>
                    <!-- </div> -->
                   
                    </div>

                    
                </div>
            </nav>

             <!-- Background Slides -->
             <video autoplay muted loop class="bg-video">
                    <source src="Media/New video.mp4" type="video/mp4">
                </video>

      

            <div class="text">
                <h5 class="context fw-bold my-2 text-center"><span class="letter">Welcome</span> <span class="letter">To</span> <span class="letter">Prudens</span> 
                <span class="letter">Secondary</span> <span class="letter">School</span>      </h5>
                <h1 class="context text-center fw-bold">Free <span style="color:rgb(30, 149, 229);">Online</span> Registration</h1>
                <p class="context text-center">register your child as quick as possible , you dont have to do walk-ins
                    or wait a long line you can just apply online and get your child a space
                    click below to register
                </p>

                <button class="regBtn mt-3 fw-bold"><a href="registration.php" style="text-decoration:none;  color:white;"> Register </a></button>
            </div>

        </div>
    </header>

    <main>

    <!-- Section 1 -->
    <div class="section">
    
            <h1 class="mb-5 fw-bold read" style="font-size:50px;  border-left:50px rgb(30, 149, 229) solid; border-bottom:3px rgb(30, 149, 229) solid;">Read About Us ?</h1>
            <div class="d-flex mt-3 ">
                <div class=" sContext">
                    <img src="Media/section-2.jpg" height="500"  alt="" >
                </div>
                <div class=" sContext2 ">
                    <h2 class="fw-bold text-center" style="color:rgb(30, 149, 229);">OUR HISTORY</h2> <br>
                    <p class="fw-light">Prudens High School was established in August, 1955 with Standard 7 and 8 classes forming a Secondary department
                         of the old Moletsane Central School in tladi Avenue.Mr.F.O Quirke was appointed Headmaster. <br><br> 
                         On 11 December, 1958,Mr.J.H. Sithole the then Administrator of the transvaal ,laid the foundation stone of a more
                         impressive permanent building, located to the south of moletsane Sports Grounds.After only four  classrooms had been completed the effect of the onset of the Great Depression led to delays in construction which resulted in
                        the official opening of the School in not taking place until April,1959. <br><br>
                        We are proud and honored to be able to reiterate that We're fortunate to be working with some of the best educators that we have had the privilege to work alongside. 
                        The team is aware of areas to develop, and through reflective practice, address these as individuals and as a whole staff approach. We view education as a life-long
                        process and continue to learn every year from our students, teachers, and parents at Prudens High. Most importantly, We believe that students are at the center of all school-related decisions.
                         Through the development of a warm and affirming atmosphere of learning, we here at Prudens High aim to develop in our children those qualities which will allow them to keep pace with the rapidly changing conditions of this world
                    </p>
                </div>

                
            </div>
        </div>

        <div class="section2">
            <div class="d-flex s2main">
                <div class=" d-flex justify-content center align-items center flex-column s2Context me-4" >
                    <h2 class="fw-bold text-center" style="color:rgb(30, 149, 229);">OUR MISSION</h2>

                    <ul class="fw-light">
                        <li>To create an environment wherein all our pupils can develop their full potential <br></li>
                        <li>To encourage our pupils to be creative and innovative in all areas</li>
                        <li>To foster an atmosphere of enlightment towards the development of a balanced perspective</li>
                        <li>To holistically educated learners who will contribute to the building of South Africans as a nation</li>
                    </ul>
                 
                </div>

                <div class=" d-flex justify-content center align-items center flex-column s2Context ms-4">
                    <h2 class="fw-bold text-center " style="color:rgb(30, 149, 229);">OUR VISION</h2>

                    <p class="fw-light">To educate our pupils in all spheres, academics,sports, art and culture so that they can go <br> out into the world and make a
                        meaningful contribution to the society as well as lead fulfilling lives. <br>

                        We aim to provide excellence in education through
                    </p>

                    <ul class="fw-light">
                        <li>The creation of a safe and happy learning environment</li>
                        <li>The fostering of the values of caring, sharing and mutual respect</li>
                        <li>The promotion of sound moral values</li>
                        <li>The hard work and dedication of highly qualified teachers; and The inculcation of a strong learning culture</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section3">
            <div class="row academics">
                    <div class="col-6">
                        <h2 style="color:rgb(30, 149, 229); font-size:35px;" class="mb-4 fw-medium">Learn</h2>

                        <p class="fw-medium">We offer the a wide variety of subjects according to the South African National Curriculum which is currently the CAPS syllabus.</p>
                
                        <button class="btn mt-4" style="background-color:rgb(30, 149, 229);"><a href="academics.php" class="text-decoration-none text-light">View All Programs</a></button>
                    </div>

                    <div class="col-6">
                        <div class="DropDown">
                            <h6 class="fw-bold">Isizulu&Sesotho</h6>
                            <p class="fw-light" style="font-size:12px; color:rgb(30, 149, 229);">Isizulu & Sesotho are Home-Languages and are compulsory. A student must choose one.</p>
                        </div>
                        <div class="DropDown">
                            <h6 class="fw-bold">Mathematics</h6>
                            <p class="fw-light" style="font-size:12px; color:rgb(30, 149, 229);">Mathematics from Grade 8-12</p>
                        </div>
                        <div class="DropDown">
                            <h6 class="fw-bold">Mathematics Literacy</h6>
                            <p class="fw-light" style="font-size:12px; color:rgb(30, 149, 229);">Maths Literacy is offered to Grade 9s to Grade 12s</p>
                        </div>
                        <div class="DropDown">
                            <h6 class="fw-bold">Science</h6>
                            <p class="fw-light" style="font-size:12px; color:rgb(30, 149, 229);">Our Science subjects include Natural Science, Social Science, Technology from grade 8 to 9</p>
                            <p class="fw-light" style="font-size:12px; color:rgb(30, 149, 229);">And include Physical Science and Life Science from grade 10 to 12</p>
                        </div>
                        <div class="DropDown">
                            <h6 class="fw-bold">Arts</h6>
                            <p class="fw-light" style="font-size:12px; color:rgb(30, 149, 229);">Creative Arts</p>
                        </div>
                        <div class="DropDown">
                            <h6 class="fw-bold">Computer Application Technology</h6>
                            <p class="fw-light" style="font-size:12px; color:rgb(30, 149, 229);">Computer Applications and Technology (CAT) is offered for Grade 10 to Grade 12</p>
                        </div>
                    </div>
                </div>
        </div>

      
    </main>

    
    <footer>
            <div class="footer">
            

                <div class="d-flex justify-content-center " id="contactsmaps">
                    <div class=" maps d-flex justify-content-center align-items-center" style="position:relative; ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.222785453535!2d27.841331814955964!3d-26.25443193341551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95a6badd5d2013%3A0x34bd75f24906ac9c!2sPrudence%20High%20School!5e0!3m2!1sen!2sza!4v1680091005668!5m2!1sen!2sza" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
                    </div>
                    <div class=" emails " style="position:relative; overflow:hidden;">
                          <h1 class="text-light">Send us an email</h1>

                        <form>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-light">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label text-light">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <button type="submit" class="emailSubmitBtn">Submit</button>
                            </div>
                     </form>
                    </div>
                
                </div>
             
            </div>
            <nav class="navbar navbar-light footer-navbar">

                <p class="text-light">© Copyrights 2022 prudens.s.s | all rights reserved | Developed by Pro.N</p>

            </nav>
    </footer>


   

    <!-- Javascript Link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>

