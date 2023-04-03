

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration form</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font awesome cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">    <!-- css link -->

    <!-- external css -->
    <link rel="stylesheet" href="./Css/style.css">

    <!-- internal css -->
    <style>
        .navbar{
                
                width:100%;
                background-color:rgba(0, 0, 0, 0.7);
                color:white;
            }

            .navbar-nav .nav-link{
                color:white;
            }

       #container{
        width:520px;
        padding:40px;
        display:flex;
        flex-direction:column;
        justify-content:center;
        background-color:rgba(0, 0, 0, 0.08);
        box-shadow:0 1px 1px 2px rgba(0, 0, 0, 0.3); ;
        height:740px;
       
        position:relative;

       }

       .box{
        height:920px;
        position:relative;
        overflow:hidden;
       }
       
  
        .footer-navbar{
                background-color:black;
                display:flex;
                justify-content:center;
                align-items:center;
        }

        .grade10-11Btn{
                border:white solid 1px;
                padding:10px 20px;
                background-color:transparent;
            }

            .headerbox{
                position:absolute;
                top:0;
                width:100%;
                left:0;
                border-bottom:1px solid rgba(0, 0, 0, 0.3);
            }

            .bg{
                width:100%;
                height:920px;
                object-fit:cover;
                position:absolute;
                z-index: -2000;
                opacity:0.7;
            }
    </style>
   
</head>
<body>

    <div>

    

    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <img src="../Media/Logo.svg" alt="" width="80" height="80" class="d-inline-block me-2 align-text-top">              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-6">
                            <li class="nav-item me-2">
                            <a class="nav-link text-light active" aria-current="page" href="./index.php">Welcome Admin</a>
                            </li>
                        
                            
                   
                        
                    
                        </ul>

                        <div class="title">
                            <h1>School Management System</h1>
                        </div>
                   
                    </div>
                </div>
            </nav>


        <!-- Main  -->
        <div class="box d-flex justify-content-center align-items-center">
            <img src="../Media/Bgsec.png" class="bg">
        <div class="container" id="container">
            <div class="headerbox">
            <h1 class="text-center p-4  fw-bold">ADMIN REGISTRATION</h1>
            </div>
        
            <form method="POST" class="mt-4 pt-4" enctype="multipart/form-data">
            
                <div class="mt-4">
                    <label for="exampleInputEmail1" class="form-label ">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" >
                
                </div>
                <div class="mt-4">
                    <label for="exampleInputEmail1" class="form-label ">Surname</label>
                    <input type="text" class="form-control" name="email" id="exampleInputEmail1" >
                
                </div>
                <div class="mt-4">
                    <label for="exampleInputEmail1" class="form-label ">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" >
                
                </div>
                <div class="mt-4">
                    <label for="exampleInputEmail1" class="form-label ">Image</label>
                    <input type="file" class="form-control" name="profile" id="exampleInputEmail1" >
                
                </div>
                <div class="mt-3">
                    <label for="exampleInputPassword1" class="form-label ">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="mt-3">
                    <label for="exampleInputPassword1" class="form-label ">Password</label>
                    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1">
                </div>
                <div class="d-flex justify-content-center align-items-center pt-4">
                <button type="submit" name="submit" class="btn btn-dark text-light btn-lg  ">Submit</button>
                </div>
                
            </form>
           

        </div>
        </div>

        <!-- Footer section -->
        <nav class="navbar sticky-bottom navbar-light footer-navbar">

                <p class="text-light">© Copyrights 2022 prudens.s.s | all rights reserved | Developed by Pro.N</p>

        </nav>
    </div>


        <!-- internal js -->
        

         <!-- bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>        

</html>