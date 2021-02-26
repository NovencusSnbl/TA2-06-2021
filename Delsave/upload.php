<?php
session_start();
if (!isset($_SESSION["masuk"])) {
   header("Location: login.php");
   exit;
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delsave</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src='https://100dayscss.com/codepen/js/jquery.min.js'></script><script  src="uploadstyle/script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="uploadstyle/style.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.0.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background-color: #376293">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">DelSave</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <?php include_once('lib/navbar.php'); ?>
      
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  

  <main id="main">

    <!-- ======= Cliens Section ======= -->
  

 
  
    

   

   

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Form Dokumen</h2>
          <!-- p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-envelope"></i>
                <h4>Institute Account:</h4>
                <p>   </p>
              </div>

              <div class="email">
                <i class="bi bi-geo-alt"></i>
                <h4>Institusi:</h4>
                <p>Institut Teknologi Del</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Account Hash</h4>
                <p>G&dk********</p>
              </div>

              
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group">
                <label for="name">Contact Address</label>
                <p>Novencus Sinambela</p>
              </div>  
              <div class="form-group">
                <label for="name">Learner Account</label>
                <p>Novencus Sinambela</p>
              </div>
              <div class="form-group">
                <label for="name">Jenis Dokumen</label>
                <select class="form-control" id="jenis">
                    <option>Ijazah</option>
                    <option>Transkip</option>
                  </select>
              </div>  
                <div class="form-group col-md-6">
                  <label for="name">NIM </label>
                  <input type="text" name="nim" class="form-control" id="nim" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">NIK</label>
                  <input type="text" class="form-control" name="nik" id="nik" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Lampiran</label>
              
                  <div class="title">
                    <h1>Drop file to upload</h1>
                  </div>
                  <br>
                  <center>
                  <div class="dropzone">
                    <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                    <input type="file" class="upload-input" />
                  </div>
                  </center>

                </div>
              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" style="float: right;">Upload</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>DelSave</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">Institut Teknologi Del</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>