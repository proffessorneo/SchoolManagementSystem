
<?php

$title = "Contact Details";
include('Includes/header.php');

?>

    <main>
        <div class="container">
        <div class="row p-4">
            <div class="title text-center">
                    <h1 class="fw-bold" style="color:rgb(30, 149, 229);">CONTACT DETAILS</h1>
            </div>

                
                <div id="contact-div" class="row">
                
                    <div class="col-6 p-4 ">
                        <h5>Physical Address:</h5>
                        <p class="m-0">918 Moletsane street</p>
                        <p class="m-0">Arcadia</p>
                        <p class="m-0">Moletsane</p>
                        <p class="m-0">0085</p>

                    </div>
                    <div class="col-6 p-4 ">
                        <h5>Telephone:</h5>
                        <p >+27 12 378 7789</p>
                        <p ><b>Email: contact@prudens.co.za</b></p>
                        <p ><b>Email: info@prudens.co.za</b></p>
                    
                    </div>
                </div>

            <div id="formmessage" class="container">
                <h1>Contact Us</h1>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="text" class="form-control" id="number" placeholder="">
                </div>
                <div class="mb-3">
                <label for="number" class="form-label">Grade/s Interested in:</label>
                <input type="text" class="form-control" id="number" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Your Message:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="button" id="button" class="btn text-light   btn-lg" style="background-color:rgba(30, 149, 229,0.9);" disabled>Send Message</button>
            </div>
        </div>
    </main>

    <?php include('Includes/footer.php'); ?>