<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Heavens</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?= base_url(' '); ?>"><h2>Online Store <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(' '); ?>">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="<?= base_url('products'); ?>">Products</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu active">
                      <a class="dropdown-item" href="<?= base_url('about-us'); ?>">About Us</a>
                      <a class="dropdown-item" href="<?= base_url('testimonials'); ?>">Testimonials</a>
                      <a class="dropdown-item active" href="<?= base_url('terms'); ?>">Terms</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="<?= base_url('checkout'); ?>">Checkout</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('contact '); ?>">Contact Us</a></li>
                <?php if (session()->get('isLoggedIn')) : ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?= $userName; ?></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
                    </div>
                  </li>
                <?php else : ?>
                  <li class="nav-item"><a class="nav-link" href="<?= base_url('signin'); ?>">Sign In</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= base_url('signup'); ?>">Sign Up</a></li>
                <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-5-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4></h4>
              <h2>Terms</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy customer</h2>
            </div>

            <h5>Unearthed Classics in Vintage Shirts & Carhartt Treasures</h5>

            <p>"Discover timeless elegance at VintageThreads Hub, where classic meets contemporary. Immerse yourself in a world of carefully curated vintage shirts and iconic Carhartt pieces. Our collection blends the nostalgia of yesteryear with the comfort and style you crave. Uncover unique, handpicked treasures that tell stories of craftsmanship and enduring fashion<br><br></p>

            <br>
            <br>

           <h5> Comfort and sophistication <h5>

            <p>"Embrace the allure of timeless fashion with VintageGarb – where each stitch tells a story. Explore our carefully curated collection of vintage shirts that transcend eras, meticulously selected for those who seek not just style, but a narrative woven into every fabric.</p>
        
            <br>
            <br>

           

          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
           
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

  </body>

</html>
