<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

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

            /* Register Section */

            .mainRegister{
                padding: 45px  10px;
            }

            /* Academics */
            .title{
                padding:40px;
                border-bottom:solid black 1px;
                margin-bottom:30px;
            }

            /* Sports */
            .displayImgs{
                width:290px;
                height:300px;
            }

            /* Gallery  */
            #gimgs{
            width:300px;
            height:200px;
            margin:20px;
            }


            /* Footer Section */

            .footer-navbar{
                background-color:black;
                display:flex;
                justify-content:center;
                align-items:center;
                padding:10px 0;
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

<!-- Javascript Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>