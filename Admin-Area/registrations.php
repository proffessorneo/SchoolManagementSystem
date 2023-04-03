<?php
    include("../Php-Config/dbconnection.php");

    $select = "select * from `student_registrations`";
    $run_select= mysqli_query($dbconnect, $select);
    
    $select_guardian = "select * from `student_guardian`";
    $run_select_guardian= mysqli_query($dbconnect, $select_guardian);

?>

<div class="container-fluid" >
    
    <h2 class="text-center">REGISTRATIONS</h2>
    <hr>

   
    <h4 class="text-center my-3">Students Form Details</h4>
    <div id="applications">
    <table class="border border-1">
                <tr >
                    <th class="border border-1 text-center p-4">No.</th>
                    <th class="border border-1 text-center p-4">Leaner's Name</th>
                    <th class="border border-1 text-center p-4">Leaner's Surname</th>
                    <th class="border border-1 text-center p-4">Gender</th>
                    <th class="border border-1 text-center p-4">Date Of Birth</th>
                    <th class="border border-1 text-center p-4">Birth Certifacate.n</th>
                    <th class="border border-1 text-center p-4">Former School</th>
                    <th class="border border-1 text-center p-4">Home Language</th>
                    <th class="border border-1 text-center p-4">Address</th>
                    <th class="border border-1 text-center p-4">Address 2</th>
                    <th class="border border-1 text-center p-4">City</th>
                    <th class="border border-1 text-center p-4">State</th>
                    <th class="border border-1 text-center p-4">Zip</th>
                    <th class="border border-1 text-center p-4">Select grade interested in</th>
                    
                    <th class="border border-1 text-center p-4">Accept Student</th>
                </tr>

                <?php while($row_fetch=mysqli_fetch_array($run_select)){
                    $student_id= $row_fetch['student_id'];
                    $name= $row_fetch['student_name'];
                    $surname= $row_fetch['student_surname'];
                    $gender= $row_fetch['gender'];
                    $date_of_birth= $row_fetch['dob'];
                    $birth_certificate_no= $row_fetch['bc_no'];
                    $former_school= $row_fetch['former_school'];
                    $home_language= $row_fetch['home_language'];
                    $home_address= $row_fetch['address'];
                    $home_address2= $row_fetch['address2'];
                    $city= $row_fetch['city'];
                    $state= $row_fetch['state'];
                    $zip= $row_fetch['zip'];
                    $grade_interest= $row_fetch['grade'];
                
                    
                ?>

                <tr>
                    <td class="border border-1 text-center p-3 "><?php echo  $student_id; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $name; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $surname; ?> </td>
                    <td class="border border-1 text-center p-3 "><?php echo  $gender; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $date_of_birth; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $birth_certificate_no; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $former_school; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $home_language; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $home_address; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $home_address2; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $city; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $state; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $zip; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $grade_interest; ?></td>
                    <td class="border border-1 text-center p-3 ">
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $student_id ?>">
                            <input type="submit" name="accept" value="Accept" class="btn btn-success">
                        </form>

                    </td>
                </tr>
            <?php }?>
    </table>

            <?php
            
                if(isset($_POST['accept'])){
                    $s_id=$_POST['id'];
                    $select_student= "select * from `student_registrations` where student_id='$s_id'";
                    $query_student=mysqli_query($dbconnect,$select_student);
                    $count=mysqli_num_rows($query_student);
                    if($count>0){
                        $fetch_row=mysqli_fetch_array($query_student);
                        $name=$fetch_row['student_name'];
                        $surname=$fetch_row['student_surname'];
                        $gender=$fetch_row['gender'];
                        $grade=$fetch_row['grade'];

                        if($grade==8){
                            $insert_gr8="insert into `grade8a` (name, surname, gender) value('$name','$surname','$gender')";
                            $execute_gr8=mysqli_query($dbconnect,$insert_gr8);
                            if($execute_gr8){
                                echo "<script>alert('Data succefully inserted')</script>";
                                echo "<script>window.open(home.php?Applications,'_self')</script>";
                            }else{
                                echo "<script>alert('Could not insert data please try again')</script>";
                                echo "<script>window.open(home.php?Applications,'_self')</script>";
                            }

                        }elseif($grade==9){
                            $insert_gr9="insert into `grade9a` (name, surname, gender) value('$name','$surname','$gender')";
                            $execute_gr9=mysqli_query($dbconnect,$insert_gr9);
                            if($execute_gr9){
                                echo "<script>alert('Data succefully inserted')</script>";
                                echo "<script>window.open(home.php?Applications,'_self')</script>";
                            }else{
                                echo "<script>alert('Could not insert data please try again')</script>";
                                echo "<script>window.open(home.php?Applications,'_self')</script>";
                            }
                        }elseif($grade==10){
                            $insert_gr10="insert into `grade10s` (name, surname, gender) value('$name','$surname','$gender')";
                            $execute_gr10=mysqli_query($dbconnect,$insert_gr10);
                            if($execute_gr10){
                                echo "<script>alert('Data succefully inserted')</script>";
                                echo "<script>window.open(home.php?Applications,'_self')</script>";
                            }else{
                                echo "<script>alert('Could not insert data please try again')</script>";
                                echo "<script>window.open(home.php?Applications,'_self')</script>";
                            }

                        }elseif($grade==11){
                            $insert_gr11="insert into `grade11s` (name, surname, gender) value('$name','$surname','$gender')";
                            $execute_gr11=mysqli_query($dbconnect,$insert_gr11);
                            if($execute_gr11){
                                echo "<script>alert('Data succefully inserted')</script>";
                                echo "<script>window.open(home.php?Applications,'_self')</script>";
                            }else{
                                echo "<script>alert('Could not insert data please try again')</script>";
                                echo "<script>window.open(home.php?Applications,'_self')</script>";
                            }
                        }else{
                            echo "<script>alert('Grade not found')</script>";

                        }

                        
                            
                        
                    }
                }

            ?>


    </div>
    <h4 class="text-center my-3">Guardian Form Details</h4>
    <div id="applications2">
    <table class="border border-1">
                <tr >
                    <th class="border border-1 text-center p-4">No.</th>
                    <th class="border border-1 text-center p-4">Guardian's Name</th>
                    <th class="border border-1 text-center p-4">Guardian's Surname</th>
                    <th class="border border-1 text-center p-4">Date Of Birth</th>
                    <th class="border border-1 text-center p-4">Identity.no</th>
                    <th class="border border-1 text-center p-4">Cell.no</th>
                    <th class="border border-1 text-center p-4">Alternate Cell.no</th>
                    <th class="border border-1 text-center p-4">Address</th>
                    <th class="border border-1 text-center p-4">Address 2</th>
                    <th class="border border-1 text-center p-4">City</th>
                    <th class="border border-1 text-center p-4">State</th>
                    <th class="border border-1 text-center p-4">Zip</th>
                    <th class="border border-1 text-center p-4">Student_Doc</th>
                    <th class="border border-1 text-center p-4">guradian Doc</th>
                    <th class="border border-1 text-center p-4">Report_Card</th>
    
                </tr>


                <?php while($row_fetch=mysqli_fetch_array($run_select_guardian)){
                    $guardian_id= $row_fetch['guardian_id'];
                    $name= $row_fetch['guardian_name'];
                    $surname= $row_fetch['guardian_surname'];
                    $date_of_birth= $row_fetch['g_dob'];
                    $identity_no= $row_fetch['identity_no'];
                    $cell_no= $row_fetch['cell_no'];
                    $alternative_no= $row_fetch['alternative_no'];
                    $home_address= $row_fetch['guardian_address'];
                    $home_address2= $row_fetch['second_address'];
                    $city= $row_fetch['guardian_city'];
                    $state= $row_fetch['guardian_state'];
                    $zip= $row_fetch['guardian_zip'];
                    $legal_docs= $row_fetch['student_bc'];
                    $parent_docs= $row_fetch['guardian_id'];
                    $report= $row_fetch['report_card'];
                
                    
                ?>

                <tr>
                    <td class="border border-1 text-center p-3 "><?php echo  $guardian_id;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $name;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $surname;?> </td>
                    <td class="border border-1 text-center p-3 "><?php echo  $date_of_birth;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $identity_no;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $cell_no;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $alternative_no;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $home_address;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $home_address2;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $city;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $state;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $zip;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $legal_docs;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $parent_docs;?></td>
                    <td class="border border-1 text-center p-3 "><?php echo  $report;?></td>
                   
                </tr>
                <?php }?>
    </table>
    </div>
</div>