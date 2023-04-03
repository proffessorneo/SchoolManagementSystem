<?php

    include("./Php-Config/dbconnection.php");

    

    if(isset($_POST['submit-form'])){
        // Student Details

        $student_name= trim($_POST['student_name']);
        $student_surname= trim($_POST['student_surname']);
        $gender= trim($_POST['gender']);
        $date_of_birth= trim($_POST['date_of_birth']);
        $birth_certificate_no= trim($_POST['birth_certificate_no']);
        $former_school= trim($_POST['former_school']);
        $home_language= trim($_POST['home_language']);
        $address= trim($_POST['address']);
        $address2= trim($_POST['address2']);
        $city= trim($_POST['city']);
        $state= trim($_POST['state']);
        $zip= trim($_POST['zip']);
        $grade_interest= trim($_POST['grade']);

        // Guardian Details
        $guardian_name= trim($_POST['guardian_name']);
        $guardian_surname= trim($_POST['guardian_surname']);
        $guardian_date_of_birth= trim($_POST['date']);
        $identity_no= trim($_POST['identity_no']);
        $cell_no= trim($_POST['cell_no']);
        $alternate_no=trim( $_POST['alternate_no']);
        $guardian_address= trim($_POST['address']);
        $guardian_address2= trim($_POST['second_address']);
        $guardian_city= trim($_POST['city']);
        $guardian_state= trim($_POST['state']);
        $guardian_zip= trim($_POST['zip']);

        // Accessing Images
        $student_legal_doc = $_FILES['student_bc']['name'];
        $guardian_legal_doc = $_FILES['guardian_id']['name'];
        $report_card = $_FILES['report_card']['name'];

        // Accessing image temp name

        $tmp_student_legal_doc = $_FILES['student_bc']['tmp_name'];
        $tmp_guardian_legal_doc = $_FILES['guardian_id']['tmp_name'];
        $tmp_report_card = $_FILES['report_card']['tmp_name'];


    
       
        

        if( empty($student_name)){
            
            echo "<script>alert('Student name required!')</script>";

        }
        elseif(empty($student_surname)){
            echo "<script>alert('Student surname required!')</script>";
        }
        elseif(empty($gender)){
            echo "<script>alert('Gender required!')</script>";
        }
        elseif(empty($date_of_birth)){
            echo "<script>alert('Date of birth required!')</script>";
        }
        elseif(empty($birth_certificate_no)){
            echo "<script>alert('Birth certificate number required!')</script>";
        }
        elseif(empty($former_school)){
            echo "<script>alert('Former school required!')</script>";
        }
        elseif(empty($home_language)){
            echo "<script>alert('Home language required!')</script>";
        }
        elseif(empty($address)){
            echo "<script>alert('Address required!')</script>";
        }
        elseif(empty($address2)){
            echo "<script>alert('Second address required!')</script>";
        }
        elseif(empty($city)){
            echo "<script>alert('City required!')</script>";
        }
        elseif(empty($state)){
            echo "<script>alert('State required!')</script>";
        }
        elseif(empty($zip)){
            echo "<script>alert('Zip required!')</script>";
        }
        elseif(empty($grade_interest)){
            echo "<script>alert('Grade interest required!')</script>";
        }
        elseif(empty($guardian_name)){
            echo "<script>alert('Guardian name required!')</script>";
        }
        elseif(empty($guardian_surname)){
            echo "<script>alert('Guardian surname required!')</script>";
        }
        elseif(empty($guardian_date_of_birth)){
            echo "<script>alert('Guardian birth date required!')</script>";
        }
        elseif(empty($identity_no)){
            echo "<script>alert('Identity number required!')</script>";
        }
        elseif(empty($guardian_address)){
            echo "<script>alert('Guardian address required!')</script>";
        }
        elseif(empty($guardian_address2)){
            echo "<script>alert('Guardian second address required!')</script>";
        }
        elseif(empty($guardian_city)){
            echo "<script>alert('Guardian city required!')</script>";
        }
        elseif(empty($guardian_state)){
            echo "<script>alert('Guardian state required!')</script>";
        }
        elseif(empty($guardian_zip)){
            echo "<script>alert('Guardian zip required!')</script>";
        }
        elseif(empty($report_card)){
            echo "<script>alert('Report card required!')</script>";
        }
        elseif(empty($guardian_legal_doc)){
            echo "<script>alert('Guardian Identity copy required!')</script>";
        }
        elseif(empty($student_legal_doc)){
            echo "<script>alert('Student identity or birthcerticate copy required!')</script>";
        }
        elseif(empty($cell_no)){
            echo "<script>alert('Cell number required!')</script>";
        }
        elseif(empty($alternate_no)){
            echo "<script>alert('Alternative number required!')</script>";
        }
        elseif(strlen($cell_no) !== 10 && strlen($alternate_no) !== 10){
        
            echo "<script>alert('Incorrect cellphone number')</script>";
                 
        }
        elseif(strlen($identity_no) !== 13 && strlen($birth_certificate_no) !== 13){
            echo "<script> alert('Please enter valid identity number') </script>";
        }
        else{
            // move images in one folder
            move_uploaded_file($tmp_student_legal_doc, "./Php-Config/documents/$student_legal_doc");
            move_uploaded_file($tmp_guardian_legal_doc, "./Php-Config/documents/$guardian_legal_doc");
            move_uploaded_file($tmp_report_card, "./Php-Config/documents/$report_card");


            // inserting data into student table
            $student_insert= "insert into `student_registrations` (student_name, student_surname, gender, dob, bc_no, home_language, former_school, address,
            address2, city, state, zip, grade) value('$student_name','$student_surname', '$gender', '$date_of_birth', '$birth_certificate_no', '$former_school', 
            '$home_language', '$address', '$address2', '$city', '$state' , '$zip', '$grade_interest')";


            //  inserting data into guardian table
            $guardian_insert= "insert into `student_guardian` (guardian_name, guardian_surname, g_dob, identity_no, cell_no, alternative_no, guardian_address, second_address, 
            guardian_city, guardian_state, guardian_zip, student_bc, guardian_id, report_card)
             value('$guardian_name','$guardian_surname', '$guardian_date_of_birth', '$identity_no', '$cell_no', '$alternate_no', 
            '$guardian_address', '$guardian_address2', '$guardian_city', '$guardian_state', '$guardian_zip' , '$student_legal_doc', '$guardian_legal_doc', '$report_card')";

            $sql1= mysqli_query($dbconnect, $student_insert);
            $sql2= mysqli_query($dbconnect, $guardian_insert);


            $sql_selector = "select * `student_registrations` where student_name='$student_name' and student_surname='$student_surname' ";
            $val_query= mysqli_query($dbconnect, $sql_selector);
            if($sql1_row=mysqli_fetch_array($val_query)){
                $name = $sql1_row['student_name']; 
                $surname = $sql1_row['student_surname']; 
                $Gname = $sql1_row['guardian_name']; 
                $Gsurname = $sql1_row['guardian_surname']; 

                if($student_name == $name && $student_surname == $name){
                    echo "<script>alert('Form already exists')</script>";
                }
                
            }

            elseif($sql1 && $sql2){
                echo "<script>alert('Form succefully submitted')</script>";
                echo "<script>window.open('registration.php','_self')</script>";
                
                exit;
                
            }else{
                echo "<script>alert('Oops sorry something went wrong please try again.')</script>";
                
            }


        }
    }


?>

    <!--===== Header Section =======-->

    <?php

            $title = "Registration Form";
            include('Includes/header.php');
    
    ?>


    <!--===== Main Section  ===== -->

    
        <div class="container mainRegister">
            <form class="row g-3" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                <h1 class="text-center fw-bold p-3" style="color:rgb(30, 149, 229);">FILL IN THE FORM BELOW</h1>
                <p class="text-center ">Student must be a south african citizen. International students must bring their passport or proof of citizenship</p>

                <h3 class="text-center p-3">Student Details</h3>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Leaner's Name</label>
                    <input type="text" class="form-control" name="student_name" id="inputEmail4" value="<?php if(isset($_POST['student_name'])) echo $_POST['student_name'] ?>">

                    
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Leaner's Surname</label>
                    <input type="text" class="form-control" name="student_surname" id="inputPassword4"  value="<?php if(isset($_POST['student_surname'])) echo $_POST['student_surname'] ?>">
                </div>
                <div class="col-md-6 " id="datepicker">
                    <label for="inputPassword4" class="form-label">Birth Date</label>
                    <input type="date" name="date_of_birth" class="form-control" value="<?php if(isset($_POST['date_of_birth'])) echo $_POST['date_of_birth'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Birth Certifacate.no</label>
                    <input type="text" name="birth_certificate_no" class="form-control" id="inputPassword4" value="<?php if(isset($_POST['birth_certificate_no'])) echo $_POST['birth_certificate_no'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Former School</label>
                    <input type="text" name="former_school" class="form-control" id="inputPassword4" value="<?php if(isset($_POST['former_school'])) echo $_POST['former_school'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Home Language</label>
                    <input type="text" name="home_language" class="form-control" id="inputPassword4" value="<?php if(isset($_POST['home_language'])) echo $_POST['home_language'] ?>">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" value="<?php if(isset($_POST['address'])) echo $_POST['address'] ?>">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" name="address2" class="form-control" id="inputAddress2" value="<?php if(isset($_POST['address2'])) echo $_POST['address2'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" name="city" class="form-control" id="inputCity" value="<?php if(isset($_POST['city'])) echo $_POST['city'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" name="state" class="form-select" value="<?php if(isset($_POST['state'])) echo $_POST['state'] ?>">
                    <option value="South Africa" selected>South Africa</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Botswana">Botswana</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" name="zip" class="form-control" id="inputZip" value="<?php if(isset($_POST['zip'])) echo $_POST['zip'] ?>">
                </div>
                <select id="selection" name="grade" class="form-select" aria-label="Default select example" value="<?php if(isset($_POST['grade'])) echo $_POST['grade'] ?>">
                    <option selected>Select grade interested in:</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
            
                </select>
                <select id="selection" name="gender" class="form-select" aria-label="Default select example" value="<?php if(isset($_POST['gender'])) echo $_POST['gender'] ?>">
                    <option selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                
                </select>
                <hr>
                <h3 class="text-center p-3">Guardian Details</h3>
                <div class="col-md-6">
                    <label for="inputEmail4"  class="form-label">Guardian's Name</label>
                    <input type="text" name="guardian_name" class="form-control" id="inputEmail4" value="<?php if(isset($_POST['guardian_name'])) echo $_POST['guardian_name'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4"  class="form-label">Guardian's Surname</label>
                    <input type="text" name="guardian_surname" class="form-control" id="inputPassword4" value="<?php if(isset($_POST['guardian_surname'])) echo $_POST['guardian_surname'] ?>">
                </div>
                <div class="col-md-6 " id="datepicker">
                    <label for="inputPassword4" class="form-label">Date Of Birth</label>
                    <input type="date" name="date" class="form-control" value="<?php if(isset($_POST['date'])) echo $_POST['date'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Identity.no</label>
                    <input type="text" name="identity_no" class="form-control" id="inputPassword4" value="<?php if(isset($_POST['identity_no'])) echo $_POST['identity_no'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cell.no</label>
                    <input type="text" name="cell_no" class="form-control" id="inputPassword4" value="<?php if(isset($_POST['cell_no'])) echo $_POST['cell_no'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Alternative Cell.no</label>
                    <input type="text" name="alternate_no" class="form-control" id="inputPassword4" value="<?php if(isset($_POST['alternate_no'])) echo $_POST['alternate_no'] ?>">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" value="<?php if(isset($_POST['address'])) echo $_POST['address'] ?>">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" name="second_address" class="form-control" id="inputAddress2" value="<?php if(isset($_POST['second_address'])) echo $_POST['second_address'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" name="city" class="form-control" id="inputCity" value="<?php if(isset($_POST['city'])) echo $_POST['city'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" name="state" class="form-select" value="<?php if(isset($_POST['state'])) echo $_POST['state'] ?>">
                    <option value="South Africa" selected>South Africa</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Botswana">Botswana</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" name="zip" class="form-control" id="inputZip" value="<?php if(isset($_POST['zip'])) echo $_POST['zip'] ?>">
                </div>
                <h5>Attach all the following document below</h5>
                <div class="p-0">
                <ul>
                    <li>Student Certified Birth Certificate Copy</li>
                    <li>Guardian Certified Identity Copy </li>
                    <li>Student Report Card</li>
                </ul>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Student Birth-Certificate</label>
                    <input class="form-control" name="student_bc" type="file" id="formFile" value="<?php if(isset($_POST['student_bc'])) echo $_POST['student_bc'] ?>">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Guardian Identity</label>
                    <input class="form-control" name="guardian_id" type="file" id="formFile" value="<?php if(isset($_POST['guardian_id'])) echo $_POST['guardian_id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Student Report Card</label>
                    <input class="form-control" name="report_card" type="file" id="formFile" value="<?php if(isset($_POST['report_card'])) echo $_POST['report_card'] ?>">
                </div>
            
            
                <div class="col-12">
                    <button type="submit" name="submit-form" class="btn text-light " style="background-color:rgba(30, 149, 229,0.9);">Submit Form</button>
                </div>


            </form>
        </div>
    

<?php include('Includes/footer.php'); ?>



