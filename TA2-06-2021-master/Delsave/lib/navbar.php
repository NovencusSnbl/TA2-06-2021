
<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="baak.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Upload.php">Upload</a></li>
          <li><a class="nav-link  scrollto" href="download.php">View</a></li>
          <li><a class="nav-link  scrollto" href="../SigningMessage/index.php">Signing Message</a></li>
          <li><a class="nav-link  scrollto" href="../VerifyMessage/index.php">Verifikasi</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li style="color: white">&nbsp&nbsp&nbsp&nbsp&nbsp
            <?php 
                  $username = $_SESSION['username'];
                  echo "Hello ".$username;
            ?>
          </li>
          <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>