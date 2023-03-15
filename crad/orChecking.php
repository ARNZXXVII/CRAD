<?php
include('../partials/connection.php');
?>
<title>OR Checking</title>
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
    <h1>Payment Verification</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="paymentReports.php">Payment Reports</a>
      </li>
      <li class="breadcrumb-item active">
        Verification
      </li>
    </ol>
  </nav>




  <section class="card container col-md-6">
    <div>
      <h1 class="card-title">Input Student ID <span class="text-muted">| to verify payment</span></h1>
      <form action="../partials/verify_payment.php" method="POST" class="row g-2 needs-validation" novalidate>
        <div class="form-floating">
          <input type="number" name="input1" class="form-control" id="first" placeholder="Student ID" required>
          <label for="first">Student ID</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Enter Student ID!
          </div>
        </div>
        <div class="form-floating">
          <input type="number" name="input2" class="form-control" id="second" placeholder="Student ID" required>
          <label for="second">Student ID</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Enter Student ID!
          </div>
        </div>
        <div class="form-floating">
          <input type="number" name="input3" class="form-control" id="third" placeholder="Student ID" required>
          <label for="third">Student ID</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Enter Student ID!
          </div>
        </div>
        <div class="form-floating">
          <input type="number" name="input4" class="form-control" id="fourth" placeholder="Student ID" required>
          <label for="fourth">Student ID</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Enter Student ID!
          </div>
        </div>
        <div class="form-floating">
          <input type="number" name="input5" class="form-control" id="fifth" placeholder="Student ID" required>
          <label for="fifth">Student ID</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Enter Student ID!
          </div>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-sm btn-primary btn-block" name="verify_payment">Submit</button>
        </div>
      </form>
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