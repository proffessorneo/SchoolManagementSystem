<?php
    include("../Php-Config/dbconnection.php");
    session_start();
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School management system</title>
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
 

     

        #navullinks{
            font-size: medium;
        }

        #profileImg{
            width: 90%;
            height:250px;
            border: solid gray 2px;
            object-fit: cover;
        }

        #headerdiv{
            width: 100%;
            height:70px;
        }

        #list--items{
            border-top:solid white 1px;
            padding:8px;
            list-style:none;
            cursor:pointer;
            
        }

        #main-div{
            display:flex;
            flex-direction:column;
            

            padding:10px;
            
        }

        #info-par{
            margin-top:20px;
        }

        #Addclass{
         
            display:flex;
            flex-direction:column;
            margin-top:10px;

        }
        #missionLi{
            list-style:none;
        }

        #Staff-Form-Div{
            width:100%;
            padding:20px;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            
        }

        #viewStaffContainer{
            width:50%;
            padding:20px;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }

        #SetExam-Form-Div{
            width:85%;
            padding:20px;
        }

        #applications{
            overflow:scroll;
        }
        #applications2{
            overflow:scroll;
        }

        #view, #view1 ,#view2 ,#view3{
            overflow-y:scroll;
        }

        .background{
            background-color:rgba(0, 0, 0, 0.7)
        }

        .avatar{
            width:auto;
            border-radius:5%;
          
        }

        .avatarImg{
            width:200px;
            height:150px;
            object-fit:cover;
            /* border-radius:; */
        }

       
    </style>
</head>

<body>
    <div class="header">

     

    <!-- Navbar section -->

    <nav class="navbar navbar-expand-lg ">
        
                <div class="container">
                    <img src="../Media/Logo.svg" alt="" width="80" height="80" class="d-inline-block me-2 align-text-top">              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <?php if(isset($_SESSION["user_name"])){ ?>

                         <ul class='navbar-nav me-auto  mb-lg-0 fs-6'>
                         <li class='nav-item me-2'>
                             <a class="nav-link text-light active" aria-current="page" href="#">Welcome <?php echo $_SESSION['user_name']?></a>
                         </li>
                     
                    
                            <li class="nav-item me-2">
                            <a class="nav-link text-info active" aria-current="page" href="./logout.php">Log out</a>
                            </li>
                        
                        <?php }?>    
                   
                        
                    
                        </ul>
                        <div class="title">
                            <h3>School Management System</h3>
                        </div>
                   
                    </div>
                </div>
            </nav>

        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark text-light p-3 mb-2 justify-content-center d-flex">
            <h3>ADMIN DASHBOARD</h3>
        </nav>
    

    
       

        <!-- Main section -->
        <div class="row container-fluid">
            <div class="col-3 p-0"  >
                <div class="container p-0 background text-center"> 
                    <div class="bg-dark text-light container m-0" id="headerdiv"><h3 class="p-3 text-center">Admin Profile</h3></div>
                        <?php
                            $user_name=$_SESSION['user_name'];
                            $select="select * from `admin` where name='$user_name'";
                            $query=mysqli_query($dbconnect,$select);
                            
                            while($row=mysqli_fetch_array($query)){
                               

                        ?>

                    <div class="p-2 m-0">
                        <img id="profileImg" src="./Admin/<?php echo $row['profile'] ?>" alt="">
                    </div>
                        <?php
                            }
                        ?>

                   
                    <h5 class="text-center">UserName</h5>
                    <div>
                    <ul class="text-center list-group-item p-3" style="">
                            
                        <li id="list--items"><a href="home.php?Profile" class="text-decoration-none text-light text-center">Profile</a></li>
                        <li id="list--items"><a href="home.php?Staff" class="text-decoration-none text-light text-center">Add Staff</a></li>
                        <li id="list--items"><a href="home.php?View-Staff" class="text-decoration-none text-light text-center">View staff</a></li>
                        
                        <li id="list--items"><a href="home.php?Class" class="text-decoration-none text-light text-center">Class</a></li>
                        <li id="list--items"><a href="home.php?Exam" class="text-decoration-none text-light text-center">Set Exams</a></li>
                        <li id="list--items"><a href="home.php?View-Exam" class="text-decoration-none text-light text-center">View Exams</a></li>
                        <li id="list--items"><a href="home.php?Applications" class="text-decoration-none text-light text-center">Registrations</a></li>
                        <li id="list--items"><a href="home.php?View-Students" class="text-decoration-none text-light text-center">View Students</a></li>
                        <li id="list--items"><a href="logout.php" class="text-decoration-none text-light text-center">Log out</a></li>
                        
                            
                            
                    </ul>
                    </div>
                </div>
                    
            </div>


            <div class="col-9 container-fluid" id="main-div">

                
            
            <?php
               
                if(isset($_GET['Class'])){
                include('class.php');
                }
               
                if(isset($_GET['Staff'])){
                include('staff.php');
                }
                if(isset($_GET['View-Staff'])){
                include('view_staff.php');
                }               

                if(isset($_GET['Exam'])){
                include('exam.php');
                }
                if(isset($_GET['Update'])){
                include('update_profile.php');
                }
                if(isset($_GET['View-Exam'])){
                include('view_exam.php');
                }
                if(isset($_GET['View-Students'])){
                include('all_students.php');
                }
                if(isset($_GET['Student-Ex'])){
                include('student_ex.php');
                }
                if(isset($_GET['Student-Ex1'])){
                include('student_ex2.php');
                }
                if(isset($_GET['Student-Ex2'])){
                include('student_ex3.php');
                }
                if(isset($_GET['Applications'])){
                include('registrations.php');
                }
                if(isset($_GET['Profile'])){
                include('admin_profile.php');

                
                }
                
                
            ?>

            </div>

        </div>

       

        <!-- Footer section -->
        <nav class="navbar navbar-light bg-light ">
        
            <div class="container-fluid bg-dark  p-3 justify-content-center">
            

                <p class="text-light">© Copyrights 2022 prudens.s.s | all rights reserved | Developed by Pro.N</p>
             </div>
        </nav>
    </div>



    
    <!-- bootstrap javascript link -->
    <script type="text/javascript">
        $(function(
            $('datepicker').datepicker()
            ));

    

    </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            </body>
     
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> 

</html>