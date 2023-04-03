
<div class="container-fluid">
    <h2 class="text-center">STUDENTS & GRADES</h2>
    <hr>

     
  
            <div id="view" class="d-flex justify-content-center align-items-center flex-column">
                <table class="border border-1">  

                <?php
                    $select="select * from `grade8a`";
                    $run_gr8=mysqli_query($dbconnect,$select);
                    while($fetch_gr8=mysqli_fetch_array($run_gr8)){
                       

                       
                ?>
                <h4 class="text-center my-3">Grade 8s</h4>
               

                <tr >
                    <th class="border border-1 text-center p-4">No.</th>
                    <th class="border border-1 text-center p-4">Name</th>
                    <th class="border border-1 text-center p-4">Surname</th>
                    <th class="border border-1 text-center p-4">Gender</th>
                   
                    <th class="border border-1 text-center p-4">Delete Learner</th>
                </tr>

                <tr>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr8['student_id']; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr8['name']; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr8['surname']; ?> </td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr8['gender']; ?></td>
                   
                    <td class="border border-1 text-center p-3 ">
                        
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo  $fetch_gr8['student_id']?>">
                        <input type="submit" name="delete" class="btn btn-danger" value="delete">
                    </form>
                    </td>
                </tr>


                <?php
                                 }
                 
                
                ?>

                <?php
                        if(isset($_POST['delete'])){
                            $user_id=$_POST['id'];
                            $delete_query="delete from `grade8a` where student_id='$user_id'";
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
                    $select9="select * from `grade9a`";
                    $run_gr9=mysqli_query($dbconnect,$select9);
                    while($fetch_gr9=mysqli_fetch_array($run_gr9)){
                      


                ?>

                <h4 class="text-center my-3">Grade 9s</h4>

                <tr >
                    <th class="border border-1 text-center p-4">No.</th>
                    <th class="border border-1 text-center p-4">Name</th>
                    <th class="border border-1 text-center p-4">Surname</th>
                    <th class="border border-1 text-center p-4">Gender</th>
                    <th class="border border-1 text-center p-4">Guardian</th>
                   
                </tr>
             
                <tr>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr9['student_id']; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr9['name']; ?></td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr9['surname']; ?> </td>
                    <td class="border border-1 text-center p-3 "><?php echo $fetch_gr9['gender']; ?></td>
                   
                    <td class="border border-1 text-center p-3 ">
                        
                        <form method="POST">
                            <input type="hidden" name="id1" value="<?php echo  $fetch_gr9['student_id']?>">
                            <input type="submit" name="delete1" class="btn btn-danger" value="delete">
                        </form>
                    </td>
                </tr>

                <?php
                               
                    }
                
                ?>

                <?php
                        if(isset($_POST['delete1'])){
                            $user_id=$_POST['id1'];
                            $delete_query="delete from `grade9a` where student_id='$user_id'";
                            $run_query= mysqli_query($dbconnect,$delete_query);
                            if($run_query){
                                echo"<script> alert('Successfully deleted')</script>";
                                echo"<script> window.open('home.php?View-Students','_self')</script>";

                            }
                        }
                
                ?>

    </table>


 
    </div>


    <div class="justify-content-center container-fluid d-flex p-3 m-3">
                <button type="submit" class="btn btn-dark px-4 fw-bold"><a href="home.php?Student-Ex" class="text-decoration-none text-light">Next</a></button>
    </div>
    
</div>


