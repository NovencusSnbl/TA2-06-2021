<?php
session_start();
if (!isset($_SESSION["masuk"])) {
  header("Location: login.php");
  exit;
}
 require'function/RSA/upload.php';


 if(isset($_POST["submit"])) {

 //cek apakah data berhasil dikirm atau tidak
 if(tambahdata($_POST)>0) {
  echo "
  <script>
  alert('Data Berhasil ditambahkan');
  document.location.href = 'baak.php'
  </script>
  ";
 }
 else{
  echo "
  <script>
  alert('Data Gagal ditambahkan');
  document.location.href = 'upload.php'
  </script>
  ";
 }
 }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Delsave - Upload</title>
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
    .buton-upload{
      background: #376293;
      border-radius: 50px;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      float: right;
      color: white;
    }

    .buton-upload:hover{
      background: #fff;
      transition-duration: 0.2s;
      color: #376293;
      border-color: #376293;
    }

    form{
      color: #376293;
    }

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background-color: #376293">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">DelSave</a></h1>

      <?php include_once('lib/navbar.php'); ?>
      
  </header>
  

  <main id="main">
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <br>
        <br>
        <div class="section-title">
          <h2>Form Dokumen</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="email">
                <i class="bi bi-geo-alt"></i>
                <h4>Institusi:</h4>
                <p>Institut Teknologi Del</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div class="info">
              <form action="" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="name">BAAK Account</label>
              </div>    
                <div class="container">
                    
                    <label><b>Jenis Dokumen</b></label><br>
                      <select name="jenis_dokumen" class="form-control">
                          <option value="1">Ijazah</option>
                          <option value="2">Transkrip Nilai</option>
                      </select><br>

                    <label><b>NIM</b></label><br>
                    <input type="text" placeholder="masukkan sesuai nim mahasiswa" name="mahasiswa_id" class="form-control" required>
                    <br><br>
                    <label><b>Attacth File Here!</b></label><br><br>
                    <input type="file" name="gambar" required">
                       
                </div>
              <br>
              <button type="submit" name="submit" class="buton-upload" style="">Upload data</button>
            </form>
            </div>
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