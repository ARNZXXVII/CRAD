<?php

?>
<title>Module 3</title>
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
    <h1>Panel Evaluation Committee</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        Committee
      </li>
      <li class="breadcrumb-item">
        <a href="panelEvalForm.php">Form</a>
      </li>
      <li class="breadcrumb-item">
        <a href="defenseSchedule.php">Defense Schedule</a>
      </li>
    </ol>
  </nav>

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