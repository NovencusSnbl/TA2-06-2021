<?php 
require 'function/registrasi.php'; 
if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "
			<script>
				alert ('user baru berhasil ditambahkan!');
			</script>
		";
	}
	else {
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Delsave - Registrasi Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/logo.png" rel="icon">
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
  <style type="text/css">
    .button-regis{
      background: #376293;
      border-radius: 50px;
      padding-left: 40px;
      padding-right: 40px;
      padding-top: 10px;
      padding-bottom: 10px;
      color: white;
      float: right;
    }

    .button-regis:hover{
      background: #fff;
      transition-duration: 0.2s;
      color: #376293;
      border-color: #376293;
    }

  </style>
</head>

<body>
  <header id="header" class="fixed-top stylenavbar" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Delsave</a></h1>
    </div>
  </header>

  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <br><br>
          <p>Sign In If you have an account</p>
          <h2>Akun Admin</h2>
          <!-- p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">

            <div class="info">
            <br>
            <center>
              <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="logo/logo.png" class="img-fluid animated" alt="" >
              </div>
              <div class="col-lg-12 desclogo"  data-aos="zoom-in" data-aos-delay="200">
                <h4 class="img-fluid animated">Dokumen Digital Menggunakan Smart Contract</h4>
              </div>
            </center>
          <br>
          <br>
          
            </div>

          </div>
          
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div class="info">
            <div class="login-page">
              <form action="" method="post">
	              	<input type="text" name="username" class="form-control" placeholder="username" /><br>
	              	<input type="password" name="password" class="form-control" placeholder="password" /><br>
					<input type="password" name="password2" class="form-control" placeholder="re-entry password" /><br>
					<button type="submit" name="register" class="button-regis">Register</button>
				</form>
              </div>
            </div>
          </div>
            <!-- <form action="" method="POST"  class="php-email-form">

              <div class="row">

                <div class="form-group col-md-12">
                  <label for="name">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="username" />
                </div>

                <div class="form-group col-md-12">
                  <label for="name">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="password" />
                </div>

                <div class="form-group col-md-8">
                  
                </div>

                <div class="form-group col-md-4">
                  <a href="#">Forgot Password?</a>
                </div>
              <button type="submit" name="masuk">Masuk</button> 
            </form> -->

          </div>


      </div>
    </section><!-- End Contact Section -->

  </main>
  <!-- <div class="login-page">
    <div class="form">
      <form class="login-form" action="" method="POST">
        <input type="text" name="username" class="form-control" placeholder="username" />
        <input type="password" name="password" class="form-control" placeholder="password" />
        <button type="submit" name="masuk">Masuk</button>
      </form>
    </div>
  </div> -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Delsave</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://del.ac.id">Institut Teknologi Del</a>
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