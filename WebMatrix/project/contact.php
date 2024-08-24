<?php include ('./admin/form.php') ?>
 <!-- include ('./admin/edit.php') -->
   <!-- include ('./admin/delete.php') -->

   <?php include ('header.php') ?>

<section class="bg-dark bg-main bg-color first-section">
    <div class="container-fluid  contact-bg ">
        <div class="row text-lg-start">
            <h2 class="text-lg-start h-35 text-light fw-bolder">
                Contact
            </h2>
        </div>
    </div>
</section>

<div class="container mt-5 mb-3">
    <!-- section part start-->
    <div class="row mb-5">
        <div class="col-12">
            <div class=" container text-center fw-bolder">
                <h2 class="text-capitalize">Contact</h2>
                <hr class="w-25 mx-auto mb-5">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.2815055969063!2d72.98547747607931!3d26.284972686784258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418e7e0d255cf3%3A0x5ac5174a1431e729!2sLucky%20Institute%20of%20Professional%20Studies!5e0!3m2!1sen!2sin!4v1717408710164!5m2!1sen!2sin"
                            width="600" height="510" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="email">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">File </label>
                            <input type="file" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="file">
                        </div> -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone </label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Send</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('footer.php') ?>