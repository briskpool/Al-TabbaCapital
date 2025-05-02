<?php 
	$currentPage = 'register'; // current page name....
	include 'header.php'; ?>

<!-- Navbar -->

<?php include 'navbar.php'; ?>

<!-- /Navbar -->


<!-- Main Content -->

<section class="main-content">

    <section class="register-user bg-acent-red">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <h2>Register Now</h2>
                    <p>
                        It won't take long to get an account set up for you. All we need is your name, email, mobile
                        number and you'll be able to start saving.
                    </p>
                    <div class="register-form">
                        <form>
                            <div class="form-group form-floating">
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name"
                                    required />
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
                            <div class="form-group mb-2">
                                <div class="g-recaptcha" data-sitekey="6LfMHS8gAAAAAL0xAaVP8BXsR8IoFci996bBfUrF"></div>
                                <div class="text-danger captcha-error">

                                </div>
                            </div>

                            <div class="form-group">
                                <p>
                                    By registering you confirm that you're 18 years of age or older and agree
                                    to the <a href="terms-condition.php">Terms & Conditions</a> and <a href="privacy.php">Privacy Statement.</a>
                                </p>
                            </div>
                            <div class="alert alert-success alert-dismissible fade show my-4 " id="success-msg" role="alert">
                                <h4 class="alert-heading">Thank You!</h4>
                                <p class="mb-2 text-success">We have received your submission. Our Team will get back to you very soon.</p>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                            <div class="alert alert-danger alert-dismissible fade show my-4 " id="fail-msg" role="alert">
                                <h4 class="alert-heading">Sorry!</h4>
                                <p class="mb-2 text-danger">Something went wrong. Please try again.</p>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                            <div class="form-group">
                                <a href="#!" id="register-form" class="btn btn-secondary-navy w-100">
                                    Register
                                    <span class="spinner-border spinner-border-sm ms-2"></span>
                                </a>
                            </div>

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