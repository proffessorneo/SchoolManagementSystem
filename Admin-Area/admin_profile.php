<div class="container-fluid">
    <h2 class="text-center">ADMIN DETAILS</h2>
    <hr>
    
    <div class="container" id="Staff-Form-Div">

    <?php

    $username=$_SESSION['user_name'];  
    $select_data= "select * from `admin` where name='$username'";
    $run_query=mysqli_query($dbconnect,$select_data);
    $rows=mysqli_num_rows($run_query);
    if($rows>0){
        while($fetch_rows=mysqli_fetch_array($run_query)){


    ?> 
        
        <div class="avatar">
            <img src="./Admin/<?php echo $fetch_rows['profile']?>" class="avatarImg" alt="">
            
        </div>
        <h5><b>Avatar</h5><br>

               
             <div class="d-flex justify-content-center align-items-center flex-column">
            <h5><b>Name</b> : <?php echo $fetch_rows['name'] ?></h5>
            <h5><b>Surname</b> : <?php echo $fetch_rows['surname'] ?></h5>
            <h5><b>Email</b> : <?php echo $fetch_rows['email'] ?></h5>
            </div>
            <?php       
                }
            }

        ?>
        

       
        <div class="d-flex justify-content-center my-4 align-items-center">
        <button class="btn btn-secondary px-4 fw-bold"><a href="home.php?Update" class="text-decoration-none text-light">Edit Profile</a></button>
        </div>
    </div>
</div>