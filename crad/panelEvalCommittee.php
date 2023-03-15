<?php
require_once('../partials/connection.php');
?>
<title>Panel Evaluation Committee</title>
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

  <section class="container card">
    <h1 class="card-title">Defense Panel</h1>
    <table class="table datatable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Major</th>
          <th>Experience</th>
          <th>Sample</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM crad_panel_committee ORDER BY comID DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowcount() > 0) {
          while ($row = $stmt->fetch()) {


        ?>
            <tr>
              <td><?php echo $row['last_name'] ?>, <?php echo $row['first_name'] ?></td>
              <td><?php echo $row['qualification_two']; ?></td>
              <td><?php echo $row['exp']; ?></td>
              <td><?php echo $row['qualification_one']; ?></td>
              <td><?php
                  if ($row['qualification_one'] == 1) {
                    echo '<span class="badge bg-danger">' . "Not Qualified" . '</span>';
                  } else {
                    echo '<span class="badge bg-success">' . "Qualified" . '</span>';
                  }
                  ?>
              </td>
              <td>
                <button class="btn btn-primary">A</button>
                <button class="btn btn-primary">B</button>
              </td>
            </tr>
        <?php
          }
        }
        ?>
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