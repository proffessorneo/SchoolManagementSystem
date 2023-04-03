<div class="container-fluid">
    <div id="view1"  class="d-flex justify-content-center align-items-center flex-column">
    
    <table class="border border-1">
    <h4 class="text-center my-3">Grade 10s</h4>
        <theader>

       


            <tr >
                <th class="border border-1 text-center p-4">No.</th>
                <th class="border border-1 text-center p-4">Name</th>
                <th class="border border-1 text-center p-4">Surname</th>
                <th class="border border-1 text-center p-4">Gender</th>
                
                <th class="border border-1 text-center p-4">Delete Learner</th>
            </tr>
        </theader>
             
                <?php
                    $select10="select * from `grade10s`";
                    $run_gr10=mysqli_query($dbconnect,$select10);
                    while($fetch_gr10=mysqli_fetch_array($run_gr10)){


                ?>
            
            
           <tbody>  
                
                <tr>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr10['student_id']; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr10['name']; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr10['surname']; ?> </td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr10['gender']; ?></td>
                   
                    <td class="border border-1 text-center p-3 ">
                        
                        <form method="POST">
                            <input type="hidden" name="id2" value="<?php echo  $fetch_gr10['student_id']?>">
                            <input type="submit" name="delete2" class="btn btn-danger" value="delete">
                        </form>
                    </td>               
                 </tr>

            </tbody>
                <?php
                    }
                
                ?>

                <?php
                        if(isset($_POST['delete2'])){
                            $user_id=$_POST['id2'];
                            $delete_query="delete from `grade10s` where student_id='$user_id'";
                            $run_query= mysqli_query($dbconnect,$delete_query);
                            if($run_query){
                                echo"<script> alert('Successfully deleted')</script>";
                                echo"<script> window.open('home.php?View-Students','_self')</script>";

                            }
                        }
                
                ?>
                
            </table>
    
    
    <table class="border border-1">
               
                <?php
                    $select11="select * from `grade11s`";
                    $run_gr11=mysqli_query($dbconnect,$select11);
                    while($fetch_gr11=mysqli_fetch_array($run_gr11)){


                ?>
                <h4 class="text-center my-3">Grade 11s</h4>

                 <tr >
                    <th class="border border-1 text-center p-4">No.</th>
                    <th class="border border-1 text-center p-4">Name</th>
                    <th class="border border-1 text-center p-4">Surname</th>
                    <th class="border border-1 text-center p-4">Gender</th>
                   
                    <th class="border border-1 text-center p-4">Delete Learner</th>
                </tr>

             
                <tr>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr11['student_id']; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr11['name']; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr11['surname']; ?> </td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr11['gender']; ?></td>
                   
                    <td class="border border-1 text-center p-3 ">
                        
                        <form method="POST">
                            <input type="hidden" name="id3" value="<?php echo  $fetch_gr11['student_id']?>">
                            <input type="submit" name="delete3" class="btn btn-danger" value="delete">
                        </form>
                    </td>                
                </tr>

                <?php
                    }
                
                ?>

                <?php
                        if(isset($_POST['delete3'])){
                            $user_id=$_POST['id3'];
                            $delete_query="delete from `grade11s` where student_id='$user_id'";
                            $run_query= mysqli_query($dbconnect,$delete_query);
                            if($run_query){
                                echo"<script> alert('Successfully deleted')</script>";
                                echo"<script> window.open('home.php?View-Students','_self')</script>";

                            }
                        }
                
                ?>
                

    </table>
    
    <div class="justify-content-center container-fluid d-flex p-3 m-3">
                <button type="submit" class="btn btn-dark px-4 fw-bold me-3"><a href="home.php?Student-Ex1 " class="text-decoration-none text-light">Next</a></button>
                <button type="submit" class="btn btn-dark px-4 fw-bold"><a href="home.php?View-Students" class="text-decoration-none text-light">previous</a></button>
    </div>
</div>