
<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="upload.php">Upload</a></li>
          <li><a class="nav-link scrollto" href="encryph.php">Encryph</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">View</a></li>
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
                
                $connect = mysqli_connect("localhost", "root", "", "ta2");
                  $username = $_SESSION['username'];

                  $query = "SELECT * FROM admin WHERE username = '$username'";

                  $result = mysqli_query($connect, $query);



                 while ($row = mysqli_fetch_array($result))

                 {
                    echo "Hello ".$row["username"];
                 }

                   
                    
                  ?>
          </li>
          <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>