<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
   <?php require 'partials/banner.php'; ?>
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Have Any Query? <span class="text-uppercase text-primary bg-light px-2">Contact
                        Us</span></h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <!-- <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working
                        contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                        and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form  method="POST" id="form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                         <input type="hidden" name="access_key" value="2c31e241-2407-4d2c-bf23-f0d5a5d08334">
                                         <input type="hidden" name="subject" value="New Submission from Beyou Website">
                                          <input type="checkbox" name="botcheck" id="" style="display: none;">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="full_name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            style="height: 150px" name="message" required></textarea>
                                        <label for="message">Message</label>
                                         <!-- <input type="hidden" name="redirect" value="https://web3forms.com/success"> -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                                <div id="result"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php require 'partials/newsletter.php'; ?>
<?php require 'partials/footer.php'; ?>