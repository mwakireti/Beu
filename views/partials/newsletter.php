<!-- Newsletter Start -->
<div class="container-fluid bg-primary newsletter p-0">
    <div class="container p-0">
        <div class="row g-0 align-items-center">
            <div class="col-md-5 ps-lg-0 text-start wow fadeIn" data-wow-delay="0.2s">
                <img class="img-fluid w-100" src="img/newsletter.jpg" alt="">
            </div>
            <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                <form id="subscription" method="POST">
                    <div class="p-5">
                        <h1 class="mb-5">Subscribe the <span
                                class="text-uppercase text-primary bg-white px-2">Newsletter</span></h1>
                        <div class="position-relative w-100 mb-2">
                            <input type="hidden" name="access_key" value="2c31e241-2407-4d2c-bf23-f0d5a5d08334">
                            <input type="hidden" name="subject" value="New Subscription for newsletter">
                            <input type="checkbox" name="botcheck" id="" style="display: none;">
                            <input class="form-control border-0 w-100 ps-4 pe-5" type="email"
                                placeholder="Enter Your Email" style="height: 60px;" name="email">
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                        <p class="mb-0" id="result1" ></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->