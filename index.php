<?php
session_start();
include('includes/config.php');


$sql = "SELECT * from admin;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bitcoin Miner - Home</title>
  <meta content="Best App To Earn Bitcion, Start making Bitcoin Now" name="descriptison">
  <meta content="Bitcoin Miner" name="keywords">
 

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Bitcoin Miner</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#faq">F.A.Q</a></li>
          <li><a href="#contact">Contact Us</a></li>

          <li class="get-started"><a href="<?php echo htmlentities($result->app_url);?>">Downlaod App</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Earn Bitcoin Now</h1>
            <h2>Best App To Make Bitcoin From Your Phone, Take the opportunity and start earning Bitcoin</h2>
            <a href="<?php echo htmlentities($result->app_url);?>" class="download-btn"><i class="bx bxl-play-store"></i>Download Store</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/main-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>In order to help you more understand the app work and the most frequently asked questions. If you have other questions, please do not hesitate to contact us via our email</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">How do I earn bitcoin from the app?</a> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  It is really easy, just download the app, create a new account, and then start earning Bitcoin. Then you can earn points by simple.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">How can I withdraw my money? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  You can withdraw your money through Coinbase.com Wallet. Your money will be sent within one to two working days.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">What is a Points? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                <p>
                  We convert this Points to Bitcoins when you Withdraw.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">App related issue?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                <p>
                 Do not hesitate to contact us to solve any problem.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>You can contact us about anything you want, and we will get back to you as soon as possible.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p><?php echo htmlentities($result->email);?><br></p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
              </div>
            </div>
          </div>

        

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Info</h3>
            <p>
                Money Rewards, Inc <br>
              <strong>Email:</strong> <?php echo htmlentities($result->email);?><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy_policy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
           <h4>Visitors</h4>
         <a href="https://info.flagcounter.com/vsHW"><img src="https://s01.flagcounter.com/count/vsHW/bg_FFFFFF/txt_000000/border_CCCCCC/columns_3/maxflags_20/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Bitcoin Miner</span></strong> 2021. All Rights Reserved
      </div>
      <div class="credits">
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>