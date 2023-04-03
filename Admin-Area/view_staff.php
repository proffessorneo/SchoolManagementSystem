<?php
    include("../Php-Config/dbconnection.php");
    
    $select= "select * from `staff`";
    $results= mysqli_query($dbconnect, $select);
    if(isset($_POST['remove'])){
    
        $delete_row="delete from `staff` where staff_id='$id'";
        $query=mysqli_query($dbconnect, $delete_row);
        if($query){
            echo "<script>alert('row deleted successfully')</script>";
            echo "<script>window.open('home.php?View-Staff', '_self')</script>";
        }

    }
    
?>

<div class="container-fluid">
    <h2 class="text-center">VIEW STAFF DETAILS</h2>
    <hr>

    <div class="container" id="viewStaffContainer">
    
    
    <table class="border border-1">
                <tr >
                    <th class="border border-1 text-center p-4">No.</th>
                    <th class="border border-1 text-center p-4">Name</th>
                    <th class="border border-1 text-center p-4">Surname</th>
                    <th class="border border-1 text-center p-4">Qualification</th>
                    <th class="border border-1 text-center p-4">Salary</th>            
                    <th class="border border-1 text-center p-4">Delete Staff</th>
                </tr>
                <?php 
                          
                      
                          while($row_fetch=mysqli_fetch_array($results)){
                              $id=$row_fetch['staff_id'];
                              $name=$row_fetch['name'];
                              $surname=$row_fetch['surname'];
                              $qualification=$row_fetch['qualification'];
                              $salary=$row_fetch['salary'];
                ?>
                               
                             
                                <td class='border border-1 text-center p-3 '><?php echo $id; ?></td>
                                <td class='border border-1 text-center p-3 '> <?php echo $name; ?></td>
                                <td class='border border-1 text-center p-3 '><?php echo $surname; ?></td>
                                <td class='border border-1 text-center p-3 '><?php echo $qualification; ?></td>
                                <td class='border border-1 text-center p-3 '>R<?php echo $salary; ?></td>
                                
                            
                                <td class='border border-1 text-center p-3 '>
                                    
                                       <form method="POST">
                                            <input type="hidden" name="id" value="<?php echo $id?>">
                                            <input type="submit" name="delete" class="btn btn-danger" value="delete">

                                       </form>

                                    
                                </td>
                            </tr>
                <?php } ?>
                   
                <?php
                        if(isset($_POST['delete'])){
                            $user_id=$_POST['id'];
                            $delete_query="delete from `staff` where staff_id='$user_id'";
                            $run_query= mysqli_query($dbconnect,$delete_query);
                            if($run_query){
                                echo"<script> alert('Successfully deleted')</script>";
                                echo"<script> window.open('home.php?View-Staff','_self')</script>";

                            }
                        }
                
                ?>    
                
    </table>
    </div>
</div>