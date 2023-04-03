<?php
     include("../Php-Config/dbconnection.php");
    // inserting data
    if(isset($_POST['add-class'])){
        $grade = $_POST['grade'];
        $section = $_POST['section'];

        $insert_query="insert into `class` (grade, section) value('$grade','$section')";
        $run_query= mysqli_query($dbconnect,$insert_query);
        if($run_query){
            echo "<script>alert('Class added successfully')</script>";
            echo "<script>window.open('home.php?Class', '_self')</script>";
        }
    }
      

    // Selecting data
     $select= "select * from `class`";
    $results= mysqli_query($dbconnect, $select);
  
?>

<div class="container-fluid">
<h2 class="text-center">SCHOOL CLASSES</h2>
<hr>
<div>
    <div id="Addclass" >
        <h4>Add Class Details</h4>
        <form method="POST">  

        <select name="grade" class="form-select form-select-sm my-3" aria-label=".form-select-sm example">
            <option selected>Select Grade</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <select name="section" class="form-select form-select-sm my-3" id="live_search" aria-label=".form-select-sm example">
            <option selected>Select Section</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            
        </select>

        <button type="submit" name="add-class" class="btn btn-secondary">Add Class</button>
        </form>
    </div>
    <hr>
    <div class="justify-content-center d-flex flex-column">
        <h4>Class Details</h4>
        <table class="border border-1">
            <tr >
                <th class="border border-1 text-center p-4">No.</th>
                <th class="border border-1 text-center p-4">Grade</th>
                <th class="border border-1 text-center p-4">Section</th>
                <th class="border border-1 text-center p-4">Delete Class</th>
            </tr>
            
        <?php 
        
        while($row_count=mysqli_fetch_array($results)){
            $id=$row_count['class_id'];
            $grade=$row_count['grade'];
            $section=$row_count['section'];
       
        
        ?> 
            <tr>
                <td class="border border-1 text-center p-4"><?php echo $id ?></td>
                <td class="border border-1 text-center p-4"><?php echo $grade ?></td>
                <td class="border border-1 text-center p-4"><?php echo $section ?></td>
                <td class="border border-1 text-center p-4">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <input type="submit" name="delete" class="btn btn-danger" value="delete">
                    </form>
               </td>
            </tr>
        <?php  } ?>


        </table>

        <?php
                        if(isset($_POST['delete'])){
                            $user_id=$_POST['id'];
                            $delete_query="delete from `class` where class_id='$user_id'";
                            $run_query= mysqli_query($dbconnect,$delete_query);
                            if($run_query){
                                echo"<script> alert('Successfully deleted')</script>";
                                echo"<script> window.open('home.php?Class','_self')</script>";

                            }
                        }
                
                ?>

    </div>
</div>
</div>

