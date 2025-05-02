<nav class="navbar navbar-expand-lg fixed-top header" id = "main-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">
		<img width = "130" height = "auto" src = "images/logos/logo.svg" alt = "company-logo"/>
	</a>
	<div class="icon-three navbar-toggler border-0 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" 
	aria-expanded="false" aria-label="Toggle navigation">
	  <div class="hamburger hamburger-three"></div>
	</div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link c-link" href="index.php#whyInvest">Ways to Invest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link c-link" href="index.php#easysaving">Easy Savings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link c-link" href="index.php#faqs">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link c-link" href="index.php#cfund">Compare Funds</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link <?php if($currentPage =='about-us'){echo 'active';}?>" href="about.php">About</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link <?php if($currentPage =='contact-us'){echo 'active';}?>" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage =='register'){echo 'active';}?>" href="register.php">Register</a>
        </li>
      </ul>
	  <a href = "" class = "btn btn-primary-red">
		<!-- <img class = "me-2" src = "images/icons/user.svg" alt = 'icon'/> -->Client Portal 
	  </a>
    </div>
  </div>
</nav>