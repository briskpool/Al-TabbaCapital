<?php 
	$currentPage = 'contact-us'; // current page name....
	include 'header.php'; ?>

<!-- Navbar -->

<?php include 'navbar.php'; ?>

<!-- /Navbar -->


<!-- Main Content -->

<section class="main-content">

    <section class="contact-banner banner-top">
        <div class="container">
            <div class="banner-content">
                <div class="row">
                    <div class="col-12">
                        <h2>For In-Person Discussion</h2>
                        <p>Schedule a meeting with our experts.</p>
                    </div>
                </div>
                <div class="row mt-4 mt-lg-5">
                    <div class="col-md-4 mb-3 mb-lg-0">
                        <div class="d-flex align-items-center">
                            <div class="img me-3">
                                <img src="images/icons/calling.svg" alt="calling" />
                            </div>
                            <div class="detail">
                                <p><strong>Give us a call</strong></p>
                                <p><b>UK -</b> 0203 807 1460 <br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-lg-0">
                        <div class="d-flex align-items-center">
                            <div class="img me-3">
                                <img src="images/icons/email.svg" alt="calling" />
                            </div>
                            <div class="detail">
                                <p><strong>Write to us</strong></p>
                                <p><a href="mailto:info@al-tabbaahackettcapital.com">info@al-tabbaahackettcapital.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-start">
                            <div class="img me-3">
                                <img src="images/icons/map.svg" alt="address" />
                            </div>
                            <div class="detail">
                                <p><strong>Address</strong></p>
                                <p>London - Dubai</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <h2 class="text-center text-md-start">For General Enquiries</h2>
                    <p class="text-center text-md-start">Connect with us by filling the form below.</p>
                    <div class="contact-form">
                        <form>
                            <div class="form-group form-floating">
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name" />
                                <label for="name">Name</label>
                            </div>
                            <div class="form-group form-floating">
                                <input type="text" class="form-control" placeholder="Email" id="email" name="email" />
                                <label for="email">Email</label>
                            </div>
                            <div class="form-group form-floating">
                                <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone" />
                                <label for="phone">Phone</label>
                            </div>
                            <div class="form-group form-floating">
                                <input type="text" class="form-control" placeholder="Subject" id="subject"
                                    name="subject" />
                                <label for="subject">Subject</label>
                            </div>
                            <div class="form-group form-floating">
                                <textarea type="text" class="form-control" name="message" placeholder="Your Message"
                                    rows="5" id="message"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <div class="form-group mb-3">
                                <div class="g-recaptcha" data-sitekey="6LfMHS8gAAAAAL0xAaVP8BXsR8IoFci996bBfUrF"></div>
                                <div class="text-danger captcha-error">

                                </div>
                            </div>
                            <div class="alert alert-success alert-dismissible fade show my-4 " id="success-msg"
                                role="alert">
                                <h4 class="alert-heading">Thank You!</h4>
                                <p class="mb-2 text-success">We have received your submission. Our Team will get back to
                                    you very soon.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>

                            </div>
                            <div class="alert alert-danger alert-dismissible fade show my-4 " id="fail-msg"
                                role="alert">
                                <h4 class="alert-heading">Sorry!</h4>
                                <p class="mb-2 text-danger">Something went wrong. Please try again.</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>

                            </div>
                            <div class="form-group">
                                <a href="#!" id="contact-form" class="btn btn-secondary-navy w-100">
                                    Send Message
                                    <span class="spinner-border spinner-border-sm ms-2"></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>

<!-- /Main Content -->


<!-- Footer -->

<?php include 'footer.php'; ?>

<!-- /Footer -->