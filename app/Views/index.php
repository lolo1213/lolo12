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
          <a class="navbar-brand" href="<?= base_url(' '); ?>"><h2>HEAVENS <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(' '); ?>">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="<?= base_url('products'); ?>">Products</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?= base_url('about-us'); ?>">About Us</a>
                      <a class="dropdown-item" href="<?= base_url('testimonials'); ?>">Testimonials</a>
                      <a class="dropdown-item" href="<?= base_url('terms'); ?>">Terms</a>
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4></h4>
            <h2></h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4></h4>
            <h2></h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4></h4>
            <h2></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Products</h2>
              <a href="<?= base_url('products'); ?>">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>Death Of Junk food Shirt </h4></a>
                <h6><small><del></del></small> MYR 79</h6>
                <p>Suitable for street wear</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-2-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>HellExist</h4></a>
                <h6><small><del></del></small>  MYR95</h6>
                <p>These are typically worn by athletes and fans of sports teams. They can be found in a variety of styles, colors, and sizes</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>Billie Eilish 2022</h4></a>
                <h6><small><del></del></small>   MYR120</h6>
                <p>Billie Eilish 2022 Collection
Model Singer Vintage</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-4-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>Hundred percent HPFC Home Jersey Vol 2</h4></a>
                <h6><small><del></del></small> MYR120</h6>
                <p>Hundred Percent Football Club (HPFC) jersey</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-5-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>SODA</h4></a>
                <h6><small><del></del></small> MYR79</h6>
                <p>SODA Oversize t-shirt with stripe design</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>Carhartt WIP Madison </h4></a>
                <h6bout><small><del></del></small> MYR250</h6>
                <p>Carhartt WIP Madison L/S likely refers to a long-sleeve shirt from Carhartt Work In Progress (WIP) line. Carhartt WIP is a streetwear-focused adaptation of the original Carhartt brand, known for its durable workwear</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Entrepreneur
Thrift | Brand new | Preloved
Based in KL 🇲🇾
absolutely genuine., <a href="#"></a></p>
              <ul class="featured-list">
                <li><a href="#">TRUST</a></li>
                <li><a href="#">GENUINE</a></li>
                <li><a href="#">HYPE</a></li>
                <li><a href="#">RARE</a></li>
              </ul>
              <a href="<?= base_url('about-us'); ?>" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

              
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Raya 2023 Essential restock 1.0 !!</a></h4>

                <p style="margin: 0;"> All branded item drop this week abgku. make sure korang always be ready sebab setiap hari kita akan sajikan barang jahat on ig story untuk korang pakai raya this year 😮‍💨

by bathing ape , carhartt, nike fear of god, kith , polo ,dickies and banyak lagi coming soon 💯

so would you cop or pass ?</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Crossover x Hikari Riders X 333 club charity tees ➕</a></h4>

                <p style="margin: 0;"> A story behind this tees

Malaysia is currently facing one of the worst flooding in years, massively affecting many cities including our capital city, Kuala Lumpur in 2021

*Love Respect Unity* is a charity tee collaboration project by CROSSOVER with its close brand partners such as Carhartt WIP, Challenger, F-lagstuf-f, mo'des, Patta, FUCT, Hikari Riders and 333 Studio. It is a project solely aim to aid those affected by the recent massive floodings that hits Malaysia. 100% of proceeds from the tee purchase will go to *Global Peace Mission Malaysia*, in their efforts to help those affected by this natural disaster.

Due to the urgency nature of the event, would really appreciate their help to spread the info among the friends and followers. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">#carharttwip #nb #corduroyjacket</a></h4>

                <p style="margin: 0;"> keep follow us and stay tune next drop semua 🫶🏻
</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

              <a href="<?= base_url('testimonials'); ?>">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Akmal</h4>
                  <p class="n-m"><em>Love this shop </em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>dyla</h4>
                  <p class="n-m"><em>Rare and stylish</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Fairos</h4>
                  <p class="n-m"><em>Heavens the best</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jamal</h4>
                  <p class="n-m"><em>This online shop really give me lots of choice</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>Love it</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>Good</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>It is very important to take care of the patient, and the taste will be followed.</h4>
                 
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="<?= base_url('contact '); ?>" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p></a></p>
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