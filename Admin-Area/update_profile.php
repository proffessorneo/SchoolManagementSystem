<?php

    if(isset($_POST['change'])){
        $username=$_SESSION['user_name'];
        $name=trim($_POST['name']);
        $surname=trim($_POST['surname']);
        $email=trim($_POST['email']);
        $password=trim($_POST['password']);
        $confirm_password=trim($_POST['conf_password']);

        $avatar=$_FILES['profileImage']['name'];
        $tmp_avatar=$_FILES['profileImage']['tmp_name'];


        if($password !== $confirm_password){
            echo"<script>alert('passwords do not match')</script>";
            echo"<script>window.open('home.php?Profile', '_self')</script>";

        }else{
            move_uploaded_file($tmp_avatar, "./Admin/$avatar");

            $update= "update `admin`set name='$name', surname='$surname', email='$email', password='$password', profile='$avatar' where name='$username' ";
            $run_update= mysqli_query($dbconnect, $update);
           
            if($run_update){

                echo"<script>alert('Succefully updated')</script>";
                echo"<script>window.open('index.php', '_self')</script>";


            }
        }
    }

?>


<div class="container-fluid">
    <h2 class="text-center"> ADMIN DETAILS</h2>
    <hr>
    
    <div class="container" id="Staff-Form-Div">

        <h4 class="text-center my-3">Change Admin Details</h4>
        <form enctype="multipart/form-data" method="POST"> 
        <?php
            $user_name=$_SESSION['user_name'];
            $select_data="select * from `admin` where name='$user_name'";
            $run_query=mysqli_query($dbconnect,$select_data);
            $rows=mysqli_num_rows($run_query);
            if($rows>0){
                while($fetch=mysqli_fetch_array($run_query)){


            ?>

            
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Change Avatar</label>
                    <input type="file" name="profileImage"  class="form-control" id="exampleInputEmail1" required>
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $fetch['name']  ?>" class="form-control" id="exampleInputEmail1" required>
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Surname</label>
                    <input type="text" name="surname" value="<?php echo $fetch['surname']  ?>" class="form-control" id="exampleInputEmail1" required>
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" name="email" value="<?php echo $fetch['email']  ?>" class="form-control" id="exampleInputEmail1" required>
                   
                </div>
               
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" >
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Confirm-Password</label>
                    <input type="password" name="conf_password" class="form-control" id="exampleInputEmail1" >
                   
                </div>
                <div class="justify-content-center container-fluid d-flex">
                <button type="submit" name="change" class="btn btn-secondary px-4 fw-bold">Change Settings</button>
                </div>

            <?php
                }
            }

        
        ?>


        </form>
    </div>
</div>