<?php

    include("../Php-Config/dbconnection.php");

    

    if(isset($_POST['submit'])){

        $name=trim($_POST['name']);
    $surname=trim($_POST['surname']);
    $qualification=trim($_POST['qualification']);
    $salary=trim($_POST['salary']);
        $insert_query= "insert into `staff`(name, surname, qualification, salary) value('$name', '$surname','$qualification'
        , '$salary')";

        $results= mysqli_query($dbconnect,$insert_query);
        if($results){
            
            echo"<script>alert('Member added successfully')</script>";
            echo"<script>window.open('home.php?Staff','_self')</script>";
             
        }else{
            echo"<script>alert('Oops! Something went wrong please try again.')</script>";
        }

      
    }

?>

<div class="container-fluid">
    <h2 class="text-center">ADD STAFF DETAILS</h2>
    <hr>
    
    <div class="container" id="Staff-Form-Div">

        <h4 class="text-center my-3">Add Staff</h4>
        <form method="POST" action="staff.php"> 
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Staff Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Staff Surname</label>
                    <input type="text" name="surname" class="form-control" id="exampleInputEmail1" >
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Qualification</label>
                    <input type="text" name="qualification" class="form-control" id="exampleInputEmail1" >
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Salary</label>
                    <input type="text" name="salary" class="form-control" id="exampleInputEmail1" >
                   
                </div>
                <div class="justify-content-center container-fluid d-flex">
                <button type="submit" name="submit" class="btn btn-secondary px-4 fw-bold">Add Staff</button>
                </div>
        </form>
    </div>
</div>