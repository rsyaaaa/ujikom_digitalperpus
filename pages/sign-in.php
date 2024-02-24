<?php
session_start();
include "../koneksi.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Login
  </title>
  <!--     Fonts and icons     -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> -->
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your username and password to Continue</p>
                </div>
                <div class="card-body">
                <?php
                  if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = md5($_POST['password']); 

                    $data = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
                    $cek = mysqli_num_rows($data);
                    if ($cek > 0) {
                      $_SESSION['user'] = mysqli_fetch_array($data);
                      echo '<script>alert("Login Berhasil"); location.href="../index.php"; </script>';
                    } else {
                      echo '<script>alert("maaf, coba lagi")</script>';
                    }
                  }
                  ?>
                  <form role="form" method="post">
                    <div class="mb-3">
                      <input type="text" name='username' class="form-control form-control-lg" placeholder="Username" aria-label="username" >
                    </div>
                    <div class="mb-3">
                      <input type="password" name='password' class="form-control form-control-lg" placeholder="Password" aria-label="password">
                    </div>
                    
                    <div class="text-center">
                      <button type="submit" name='login' class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>
                    <div class="text-center">
                      <a type="button" class="btn btn-lg btn-warning btn-lg w-100 mt-4 mb-0" href="sign-up.php" >Sign up</a>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative  h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('../assets/img/perpustakaanbuku.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">Perpustakaan Digital</h4>
                <p class="text-white position-relative">They stand as repositories of knowledge, preserving the collective wisdom of generations and offering a gateway to diverse realms of understanding.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>