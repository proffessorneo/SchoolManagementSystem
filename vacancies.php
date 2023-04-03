
<?php

$title = "Vacancies";
include('./Includes/header.php');

?>
    <main>
            <div class="container">
            <div>
            <div class="title text-center">
                    <h1 class="fw-bold" style="color:rgb(30, 149, 229);">VACANCIES</h1>
            </div>
        
        <div class="my-3 container p-4">
                <h3>Foundation to Senior Phase teacher (GR 8-12).</h3>
        </div>
        <div class=" container p-4">
                <p>At Prudens we are always looking for Qualified and Energetic Teachers. You are more than welcome to send us your CV and any  questions you <br> might have.</p>
               <br> <p>The Prudens Management Team.</p>
        </div>
        
            
        

        <div id="formmessage" class="container">
            <h3>Apply Now</h3>
        <form action="" class="my-4" enctype="multipart/form-data"> 
            <div class="my-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
            <label for="number" class="form-label">Which Position are you applying for?</label>
            <input type="text" class="form-control" id="number" placeholder="">
            </div>
            <div class="mb-3">
            <label for="file" class="form-label">Please Upload your Cv</label>
            <input type="file" class="form-control" id="file" placeholder="">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Your Message (Optional)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="button" id="button" class="btn fw-bold text-light"  style="background-color:rgba(30, 149, 229,0.9);">Submit</button>
        </form>
         </div>

         
       </div>
            </div>
    </main>

    <?php include('./Includes/footer.php'); ?>