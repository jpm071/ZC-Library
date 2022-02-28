<!DOCTYPE html>
<html>
   <head>
      <link rel="shortcut icon" href="../zc_seal.png"/>
      <title>Donate | ZC Library</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
      </script>
   </head>

   <body>
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #021631;">
  <div class="container-fluid">
    <a href="https://www.facebook.com/Zamboangacitylibrary" class="navbar-brand fw-bold">Zamboanga City Library</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navmenu"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="../heuristics.html" class="nav-link fw-bold">Home</a>
          </li>
          <li class="nav-item">
            <a href="../resources_collections/resources_collections.html" class="nav-link fw-bold">Resources/Collections</a>
          </li>
          <li class="nav-item">
            <a href="../services/services.html" class="nav-link fw-bold">Services</a>
            <li class="nav-item">
              <a href="../learning_space/learning_space.html" class="nav-link fw-bold">Learning Space</a>
            </li>
            <li class="nav-item">
              <a href="../activities_events/activities_events.html" class="nav-link fw-bold">Activities/Events</a>
            </li>
            <li class="nav-item">
              <a href="../volunteer/volunteer.html" class="nav-link fw-bold">Volunteer</a>
            </li>
            <li class="nav-item">
              <a href="../donate/donate.html" class="nav-link fw-bold">Donate</a>
            </li>
            <li class="nav-item">
              <a href="../login/login.php" class="nav-link fw-bold">Login</a>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form class="border shadow p-3 rounded" action="php/check-login.php" method="post" style="width: 450px;">
            <h1>LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
                </div>
            <?php } ?>
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <form>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-1">
                <label class="form-label">Select user type:</label>
            </div>
            <select class="form-select mb-3" name="role" aria-label="Default select example">
                <option selected value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>




   </body>




   <footer
        class="text-center text-lg-start text-black"
        style="background-color: #ffff;"
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 mb-4">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    FOLLOW US
                </h6>
                <a target="_blank" href="https://www.facebook.com/Zamboangacitylibrary" >
                    <img src="/images/facebooklogo.png" alt=Facebook Page width="40" height="40">
                </a>
                <a target="_blank" href="https://www.instagram.com/zambocitygovt/" >
                <img src="/images/instagramlogo.png" alt="Instagram Page" width="40" height="40">
                </a>
                </div>
                <!-- Grid column -->
                
                <hr class="w-100 clearfix d-md-none" />
    
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    <a class="text-black" href="https://docs.google.com/document/d/1SVprcKhYQyoQyMJEqFXQE_88NnhzYtF0/edit?fbclid=IwAR2M1sAhgZcYWQupnCL3GkGkPuSMqQow234tHkkCeJoQMkkTEegrrHmCngE">ABOUT US</a>
                </h6>
                <p>
                    Mission
                </p>
                <p>
                    Vision
                </p>
                <p>
                    Organizational Chart
                </p>
                </div>
    
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />
    
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">CONTACT/ADDRESS</h6>
                <p><i class="fas fa-home mr-3"></i> Justice R.T. Lim Boulevard 7000 Zamboanga City, Philippines</p>
                <p><i class="fas fa-envelope mr-3"></i> Example@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> +63 975 008 1932</p>
                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->
            </section>
            <!-- Section: Links -->
    
            <hr class="my-3">
    
            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                <!-- Copyright -->
                <div class="p-3">
                    Developed by: Chimera Tech Solutions
                </div>
                <!-- Copyright -->
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
            </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->

    </footer>

</html>