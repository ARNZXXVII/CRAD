<?php
require_once('../partials/connection.php');

?>
<title>Panel Evaluation Form</title>
<?php include('../partials/crad-head.php'); ?>

<!-- ======= Header ======= -->

<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->

<main id="main" class="main">

  <!-- MAIN CONTENT -->

  <div class="pagetitle">
    <h1>Panel Evaluation Form</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="panelEvalCommittee.php">Committee</a>
      </li>
      <li class="breadcrumb-item active">
        Form
      </li>
      <li class="breadcrumb-item">
        <a href="defenseSchedule.php">Defense Schedule</a>
      </li>
    </ol>
  </nav>


  <section class="container card">
    <div>
      <h1 class="card-title">
        Panel evaluation form for Research Defense
      </h1>
      <form class="row g-3 needs-validation" action="../partials/addCommittee.php" method="POST" novalidate>
        <div class="col-md-4">
          <div class="form-floating">
            <input type="text" name="last_name" class="form-control" id="Last" placeholder="Last Name" required>
            <label for="Last">Last Name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Enter Last Name!
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating">
            <input type="text" name="first_name" class="form-control" id="First" placeholder="First Name" required>
            <label for="First">First Name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Enter First Name!
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating">
            <input type="text" name="middle_name" class="form-control" id="Middle" placeholder="Middle Name" required>
            <label for="Middle">Middle Name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Enter Middle Name!
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-floating mb-3">
            <select class="form-select" id="experience" name="exp" required>
              <option selected disabled value="">Select</option>
              <option>1 year below</option>
              <option>1 - 2 years</option>
              <option>2 - 3 years</option>
              <option>3 years above</option>
            </select>
            <label for="experience">Experience in IT</label>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-floating mb-3">
            <select class="form-select" id="masters" name="qualification_one" required>
              <option selected value="">select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            <label for="masters">Sample</label>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-floating mb-3">
            <select class="form-select" id="masters2" name="qualification_two" required>
              <option selected value="">select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            <label for="masters">major</label>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary" name="submit_committee">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
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