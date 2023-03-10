<?php
require_once('../partials/connection.php');
?>
<title>Research Library</title>
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
    <h1>Research Library</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="submission.php">Submission</a>
      </li>
      <li class="breadcrumb-item active">
        Card View
      </li>
      <li class="breadcrumb-item">
        <a href="libraryTable.php">Table View</a>
      </li>
    </ol>
  </nav>



  <!-- -------------------------------Table for showing submission data from database---------------------------------- -->


  <section class="section">




    <div class="row">
      <?php
      $sql = "SELECT * FROM library order by ID desc";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {

      ?>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div>
                <img src="../assets/img/bcp-logo.jpg" class="card-img-top" alt="bcp logo">
              </div>

              <p class="text-center"> <?php echo $row['date']; ?> </p>

              <div class="card-body">
                <p class="text-small">#<?php echo $row['ID']; ?> | <?php echo $row['department']; ?> </p>

                <p class="d-inline-block text-truncate" style="max-width: 100%;"><?php echo $row['upload_file']; ?></p>

                <a href="../uploads/<?php echo $row['upload_file']; ?>" target="_blank" class="btn btn-primary btn-sm d-grid">Open</a>


                <div class="modal fade" id="disablebackdrop" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"><?php echo $row['upload_file']; ?></h5>
                      </div>
                      <div class="modal-footer">
                        <a href="../uploads/<?php echo $row['upload_file']; ?>" target="_blank" class="btn btn-primary btn-sm">Open</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
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