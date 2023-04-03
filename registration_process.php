<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- Bootstrap Css Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    

    <!-- Internal Css Link -->
    <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
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


            .navbar{
                position:relative;
                width:100%;
                /* background-color:rgba(0, 0, 0, 0.3); */
                
                z-index: 10000;
            }

            .navbar-nav .nav-link{
                color:black;
                font-weight:bold;
                font-size:14px;
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

            .section-context{
                display:flex;
                justify-content:center;
                align-items:center;
                flex-direction:column;
                padding:140px;
                top:40px;
                height:100vh;
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


            .title{
                padding:40px;
                border-bottom:solid black 1px;
            }

            .registerBtn{
                background-color:rgba(30, 149, 229,0.9);
                padding:10px 40px;
                margin:20px;

            }

            .context{
                margin:50px 0;
            }

            .main-content{
                margin-bottom:30px;
            }

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
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
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

                  
                   
                    </div>

                   
                </div>
            </nav>
        </div>
    </header>

    <main>
            <div class="container main-content">
                <div class="title text-center">
                    <h1 class="fw-bold" style="color:rgb(30, 149, 229);">REGISTRATION PROCESS</h1>
                </div>

                <h4 class="text-center fw-bold" style="margin-top:40px;">Apply for Admission to Prudens Secondary School – Registrations now Open</h4>

                <div class="container context ">
                    <p>We believe each individual can reach his or her full potential and we know each person can reach that potential at Pro-Ed. 
                     Our small classes and detailed attention to each  child allows us to shape each child into a beautiful diamond ready to shine in the world!
                    That said: We need to ensure learners are school ready, dedicated and willing so that they can achieve new heights at Prudens High. Thus,
                     learners are admitted through consideration of satisfactory scholastic performance at their current school or on the successful completion of
                      a based line test.</p>

                      <br>
                    <h6 class="fw-bold">The main requirements for entry are:</h6>

                    <ul>
                        <li>Evidence that the learner is able to perform on their grade level and keep up with the rigorous academic programme at Pro-Ed Private School.</li>
                        <li>Evidence that the learner will enrich the atmosphere at the school both in the class and on the playground.</li>
                        <li>Evidence that the ethos of mutual respect for all human dignity will be maintained by the presence of the learner.</li>
                        <li>The presence of a Parent or Guardian at the school office to complete an application form on site.</li>
                    </ul>

                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <button class="registerBtn"><a href="registration.php" class="text-white text-decoration-none fw-bold">click here to register</a></button>
                </div>
            </div>
    </main>

   
    <footer>
            <div class="footer">
            

                <div class="row" >
                    <div class="col-6 maps d-flex justify-content-center align-items-center" style="position:relative; ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.222785453535!2d27.841331814955964!3d-26.25443193341551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95a6badd5d2013%3A0x34bd75f24906ac9c!2sPrudence%20High%20School!5e0!3m2!1sen!2sza!4v1680091005668!5m2!1sen!2sza" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
                    </div>
                    <div class="col-6 emails " style="position:relative; overflow:hidden;">
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