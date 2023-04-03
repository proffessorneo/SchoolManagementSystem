<?php
    if(isset($_POST['setExam'])){
        $exam_name=$_POST['exam_name'];
        $session=$_POST['session'];
        $subject=$_POST['subject'];
        $term=$_POST['select_term'];
        $time=$_POST['starting_time'];
        $date=$_POST['exam_date'];

        $insert_data= "insert into `exam`(exam_name, session, subject, term, time, date) value('$exam_name','$session','$subject','$term','$time', '$date')";
        $run_query=mysqli_query($dbconnect,$insert_data);
        if($run_query){
            echo"<script> alert('Exam was set successfully') </script>";
            echo"<script> window.open('home.php?View-Exam','_self') </script>";
        }
    }

?>


<div class="container-fluid">
    <h2 class="text-center">SET EXAM</h2>
    <hr>
    
    <div class="container" id="SetExam-Form-Div">

        <h4 class="text-center my-3">Set Exam Time Table Details</h4>
        <form method="POST"> 
        <div class="row g-3 my-3">
            <div class="col-4 mb-4">
                <label for="exampleInputEmail1"  class="form-label">Grade</label>
                <input type="text" name="exam_name" class="form-control" id="exampleInputEmail1" aria-label="First name">
            </div>
            <div class="col-4 mb-4">
                <label for="exampleInputEmail1"  class="form-label">Session</label>
                <select class="form-select" name="session" id="exampleInputEmail1" aria-label="Default select example">
                    <option value="1Hr-30Min" selected>1Hr-30Min</option>
                    <option value="2Hr">2Hr</option>
                    <option value="2Hr:30Min">2Hr:30Min</option>
                    <option value="3Hrs">3Hrs</option>
                </select>
            </div>

            <div class="col-4 mb-4">
                    <label for="exampleInputEmail1"  class="form-label">Subject</label>
                    <select class="form-select" name="subject" id="exampleInputEmail1" aria-label="Default select example">
                        <option value="Geography" selected>Geography</option>
                        <option value="English FA">English FA</option>
                        <option value="Isizulu HL">Isizulu HL</option>
                        <option value="Mathematics">Mathematics</option>
                    </select>
                </div>
            <div class="col-4 mb-4">
          
                <label for="exampleInputEmail1" class="form-label">Select Term</label>
                <select class="form-select" name="select_term" id="exampleInputEmail1" aria-label="Default select example">
                    <option value="Term One" selected>Term One</option>
                    <option value="Term Two">Term Two</option>
                    <option value="Term Three">Term Three</option>
                    <option value="Term Four">Term Four</option>
                </select>
            </div>
            <div class="col-4 mb-4">
                <label for="exampleInputEmail1" class="form-label">Starting Time</label>
                <select class="form-select" name="starting_time" id="exampleInputEmail1" aria-label="Default select example">
                    <option value="8:30am" selected>8:30am</option>
                    <option value="9:00am">9:00am</option>
                    <option value="11:00am">11:00am</option>
                    <option value="14:00pm">14:00pm</option>
                </select>
            </div>
        
            <div class="col-4 mb-4">
                <label for="exampleInputEmail1" class="form-label">Exam Date</label>
                <input type="date" name="exam_date" class="form-control">
            </div>
        </div>
        <div class="justify-content-center container-fluid d-flex">
                <button type="submit" name="setExam" class="btn btn-dark px-4 fw-bold">Set Exam</button>
        </div>
        </form>
    </div>
</div>

