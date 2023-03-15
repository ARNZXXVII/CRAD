<?php

?>
<title>Admin Audit</title>
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
    <h1>Activity History</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">
        Activity History
      </li>
    </ol>
  </nav>

  <section class="container card">

    <table class="datatable">
      <thead>
        <tr>
          <th>Date & Time</th>
          <th>User</th>
          <th>Activity</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2023/02/20</td>
          <td>Admin</td>
          <td>Submit Document</td>
          <td>Activity Description</td>
        </tr>
        <tr>
          <td>2023/02/24</td>
          <td>User</td>
          <td>Open Document</td>
          <td>Activity Description</td>
        </tr>
      </tbody>
    </table>
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