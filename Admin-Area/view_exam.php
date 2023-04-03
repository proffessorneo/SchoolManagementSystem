<?php
    $select_data="select * from `exam`";
    $run_query=mysqli_query($dbconnect,$select_data);
    $row_count=mysqli_num_rows($run_query);

?>

<div class="container-fluid" >
    <h2 class="text-center">VIEW EXAM</h2>
    <hr>
    <br>
    <h4 class="text-center my-3">View Exam Time Table Details</h4>
    <div class="d-flex justify-content-center align-items-center flex-column">
    <table class="border border-1">
                <tr >
                    <th class="border border-1 text-center p-4">No.</th>
                    <th class="border border-1 text-center p-4">Grade</th>
                    <th class="border border-1 text-center p-4">Session</th>
                    <th class="border border-1 text-center p-4">subject</th>
                    <th class="border border-1 text-center p-4">Term</th>
                    <th class="border border-1 text-center p-4">Time</th>
                    <th class="border border-1 text-center p-4">Date</th>
                    <th class="border border-1 text-center p-4">Delete Exam</th>
                </tr>

                <?php
                
                    if($row_count>0){
                        while($row_fetch=mysqli_fetch_array($run_query)){

                    ?>
                    
                    <tr>
                        <td class="border border-1 text-center p-3 "><?php echo $row_fetch['exam_id'] ?></td>
                        <td class="border border-1 text-center p-3 "><?php echo $row_fetch['exam_name'] ?> </td>
                        <td class="border border-1 text-center p-3 "><?php echo $row_fetch['session'] ?> </td>
                        <td class="border border-1 text-center p-3 "><?php echo $row_fetch['subject'] ?></td>
                        <td class="border border-1 text-center p-3 "><?php echo $row_fetch['term'] ?></td>
                        <td class="border border-1 text-center p-3 "><?php echo $row_fetch['time'] ?></td>
                        <td class="border border-1 text-center p-3 "><?php echo $row_fetch['date'] ?></td>
                        <td class="border border-1 text-center p-3 ">
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $row_fetch['exam_id'] ?>">
                                <input type="submit" name="delete" class="btn btn-danger" value="delete">
                            </form>
                            
                        </td>
                    </tr>

                    <?php
                        }
                    }
                
                ?>

                <?php
                    if(isset($_POST['delete'])){
                        $row_id=$_POST['id'];
                        $delete_row= "delete from `exam` where exam_id='$row_id'";
                        $run_delete=mysqli_query($dbconnect,$delete_row);
                        if($run_delete){
                            echo"<script>alert('Successfully deleted')</script>";
                            echo"<script>window.open('home.php?View-Exam','_self')</script>";
                        }
                    }

                ?>

    </table>
    </div>
</div>