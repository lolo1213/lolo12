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

                <li class="nav-item active"><a class="nav-link" href="<?= base_url('products'); ?>">Products</a></li>

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
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4></h4>
              <h2>Product Details</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div>
              <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4 col-xs-6">
                <div>
                  <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div>
                  <img src="assets/images/product-2-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div>
                  <img src="assets/images/product-3-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-xs-12">
            <form action="#" method="post" class="form">
              <h2>Death Of Junk food Shirt</h2>

              <br>

              <p class="lead">
                <small><del> $999.00</del></small><strong class="text-primary">MYR79.00</strong>
              </p>

              <br>

              <p class="lead">
                Street wear from heavens 
              </p>

              <br> 

              <div class="row">
                <div class="col-sm-4">
                  <label class="control-label">Extra 1</label>
                  <div class="form-group">
                    <select class="form-control">
                      <option value="0">18 gears</option>
                      <option value="1">21 gears</option>
                      <option value="2">27 gears</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label class="control-label">Quantity</label>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="1">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <a href="#" class="btn btn-primary btn-block">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Similar Products</h2>
              <a href="<?= base_url('products'); ?>">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>DOJ Shirt</h4></a>
                <h6><small><del>$999.00 </del></small> MYR79</h6>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-2-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>HellExist</h4></a>
                <h6><small><del>$99.00</del></small>  MYR95</h6>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="<?= base_url('product-details'); ?>"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="<?= base_url('product-details'); ?>"><h4>BILLIE ELLISH</h4></a>
                <h6><small><del>$1999.00</del></small>   MYR120</h6>
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
              <p>Copyright © 2020 Heavens web</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
