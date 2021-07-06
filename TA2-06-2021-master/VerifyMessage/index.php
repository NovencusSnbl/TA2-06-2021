<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Shawn Tabrizi">
  <link rel="icon" href="">

  <title>Delsave - Verifying Message</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../Delsave/assets/img/logo/logo.png" rel="icon">
  <link href="../Delsave/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../Delsave/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src='https://100dayscss.com/codepen/js/jquery.min.js'></script><script  src="uploadstyle/script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="uploadstyle/style.css">

  <!-- Vendor CSS Files -->
  <link href="../Delsave/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../Delsave/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src='https://100dayscss.com/codepen/js/jquery.min.js'></script><script  src="uploadstyle/script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../Delsave/uploadstyle/style.css">
  <!-- Template Main CSS File -->
  <link href="../Delsave/assets/css/style.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="custom.css" rel="stylesheet">
</head>

<body>
   <header id="header" class="fixed-top " style="background-color: #376293">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">DelSave</a></h1>

    </div>
  </header>
  <!-- Begin page content -->
  <br><br><br>
  
   <div class="section-title">
          <h2>Verifying Message</h2>
          <!-- p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
          <div class="checkbox">
            <label><input type="hidden" id="hash_check"> Institut Teknologi Del</label>
          </div>
        </div>

  <main role="main" class="container">
    <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              
              <div class="row">
                  <div>
                    <h3 class="section-title">Sign message Menggunakan Akun Ethereum </h3>
                      <div class="alert alert-info" id="metamask_warning" hidden>You will need
                        <a href="https://metamask.io/">MetaMask</a> to sign a message.
                      </div>
                      <div class="form-group">
                        <label for="message_sign">Message to sign:</label>
                        <textarea class="form-control" id="message_to_sign" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" id="sign_message_button">Sign Message</button>
                      </div>
                      <div class="form-group">
                        <label for="signature_output">Signature Output:</label>
                        <div class="alert alert-secondary code" id="signature_output"></div>
                      </div>
                  </div>
                  <hr><br>
                  <div>
                    <h3 class="section-title">Verifikasi message Melalui Akun Ethereum</h3>
                      <div class="form-group">
                        <label for="message_verify">Message to verify:</label>
                        <textarea class="form-control" id="message_to_verify" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="signature">Signature:</label>
                        <input class="form-control" type="text" id="signature">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" id="verify_message_button">Verify Message</button>
                      </div>
                      <div class="form-group">
                        <label for="signature_output">Signing Address:</label>
                        <div class="alert alert-secondary code" id="signing_address_output"></div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </main>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>

  <!-- Custom Javascript-->
  <script src="web3.min.js"></script>
  <script src="eth-sign-verify.js"></script>
</body>

</html>