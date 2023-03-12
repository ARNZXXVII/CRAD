<?php

?>
<title>User Profile</title>
<?php include('../partials/head.php'); ?>

<!-- ======= Header ======= -->

<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->

<main id="main" class="main">

  <!-- MAIN CONTENT -->

  <div class="pagetitle">
    <h1>Users Profile</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item">
        Profile
      </li>
    </ol>
  </nav>

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <div>
              <img src="../assets/img/admin.jpg" alt="Profile" class="rounded-circle">
            </div>
            <h2>Mengullo, Arnold</h2>
            <h3>Admin</h3>
            <div class="social-links mt-2">
              <a href="https://github.com/ARNZXXVII" class="github"><i class="bi bi-github"></i></a>
              <a href="https://www.facebook.com/ARNZZXXVII/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/arnz_m20/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8 card container">

        <div class="tab-pane fade show active profile-overview" id="profile-overview">

          <h5 class="card-title">Profile Details</h5>

          <div class="row">
            <div class="col-lg-3 col-md-4 label ">Full Name</div>
            <div class="col-lg-9 col-md-8">Arnold Mengullo</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Email</div>
            <div class="col-lg-9 col-md-8">admin@gmail.com</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Username</div>
            <div class="col-lg-9 col-md-8">Admin_Username</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Password</div>
            <div class="col-lg-9 col-md-8">Admin.123</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Contact</div>
            <div class="col-lg-9 col-md-8">2147483647</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Role</div>
            <div class="col-lg-9 col-md-8">Admin</div>
          </div>

        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<?php include('../partials/footer.php'); ?>

<!-- End Footer -->

<script>
  var x = document.getElementById('mod2')
  x.className = "active";

  var y = document.getElementById('sas')
  y.className = "nav-link ";

  var h = document.getElementById('components-nav')
  h.className = "nav-content collapse show";
</script>

</html>