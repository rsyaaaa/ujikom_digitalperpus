
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <title>
   TAMBAH STATUS PEMINJAM
  </title>
  <!--     Fonts and icons     -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> -->
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>
</aside>
  </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">TAMBAH STATUS PEMINJAMAN</p>
                
              </div>
            </div>
            <?php
            include "../../koneksi.php";
                if (isset($_POST['tambahpinjam'])){
                  $user =$_POST['user'];
                  $buku =$_POST['buku'];
                  $tanggalpinjam=$_POST['tanggalpinjam'];
                  $status =$_POST['status'];
                  
                  
                  
                  $insert =mysqli_query($conn, "INSERT INTO peminjaman (id_user, id_buku, tanggal_peminjaman, status) VALUES ('$user', '$buku', '$tanggalpinjam', '$status')");
                  if($insert){
                    echo '<script>alert("Peminjaman telah berhasil dibuat"); location.href="../peminjaman.php";</script>';
                  }else{
                  echo'<script>alert("Peminjaman gagal dibuat!");</script>';
                }
              }
                ?>
            <form method="post">
            <div class="card-body">
              <!-- <p class="text-uppercase text-sm">User Information</p> -->
              <div class="row">
              <div class="col-md-6">
                
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">User</label>
                  <select name="user"  class="form-select" >
                  <?php 
            
            



            
            $sql_user ="SELECT * FROM user";
            $sql_buku ="SELECT * FROM buku";
            $query_user = mysqli_query($conn, $sql_user);
            $query_buku = mysqli_query($conn, $sql_buku);

             $tampilin_user =($query_user);
             $tampilinbuku =($query_buku);
             while ($tampilin_user = mysqli_fetch_assoc($query_user)) {



            ?>
                  <option value=<?php echo $tampilin_user['id_user']; ?> ><?php echo $tampilin_user['nama_lengkap'] ; ?></option>
                  <?php
             }
             ?>
                  
                </select>
                </div>
              </div>
              <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Buku</label>
                  <select name="buku"  class="form-select" >
                      <?php 
                      while ($tampilin_buku = mysqli_fetch_assoc($query_buku)) {
                      ?>
                    <option value=<?php echo $tampilin_buku['id_buku']; ?> ><?php echo $tampilin_buku['judul'] ; ?></option>
                    <?php
             }
             ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label" >Tanggal Peminjaman</label>
                    <input class="form-control" type="date" name="tanggalpinjam">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label" >Status Buku</label>
                   <select name="status" class="form-select">
                        <option value="DIPINJAM">DIPINJAM</option>
                        <option value="DIKEMBALIKAN">DIKEMBALIKAN</option>
                   </select>
                  </div>
                  
                
                

                  </div>
                </div>
                <div class="text-center">
                      <button type="submit" name='tambahpinjam' class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">TAMBAH STATUS PEMINJAMAN</button>
                    </div>
                    
              </div>
            </form>
              <hr class="horizontal dark">
              
             
        
            

              
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="?" class="font-weight-bold" target="_blank">Rsyaa</a>
                for a better web.
              </div>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </div>
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
  <script src="../../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>