<?php require_once('../partials/connection.php');   ?>
<?php session_start();   ?>


<?php include('../partials/crad-head.php'); ?>


<!-- ======= Header ======= -->
<title>CRAD</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->

<main id="main" class="main">

  <!-- MAIN CONTENT -->

  <div class="pagetitle">
    <h1>Dashboard</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">
        Dashboard
      </li>
    </ol>
  </nav>

  <!-- this is dashboard -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Logbook Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Logbook <span>| Students</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-book"></i>
                  </div>
                  <div class="ps-3">
                    <h6 class="col">
                      <?php
                      // Prepare a query to count the number of rows in the table
                      $stmt = $pdo->prepare('SELECT COUNT(*) FROM crad_logbook_table');

                      // Execute the query and fetch the result
                      $stmt->execute();
                      $count = $stmt->fetchColumn();

                      // Display the number of rows
                      echo "$count";
                      ?>
                    </h6>
                    <p class="text-muted">Total Logs</p>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End logbook Card -->

          <!-- Submission Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Submission <span>| Research</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-file-earmark-arrow-up"></i>
                  </div>
                  <div class="ps-3">
                    <h6 class="col">
                      <?php
                      // Prepare a query to count the number of rows in the table
                      $stmt = $pdo->prepare('SELECT COUNT(*) FROM crad_library');

                      // Execute the query and fetch the result
                      $stmt->execute();
                      $count = $stmt->fetchColumn();

                      // Display the number of rows
                      echo "$count";
                      ?>
                    </h6>
                    <p class="text-muted">Total Documents</p>



                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Submission Card -->

          <!-- Visitor Card -->
          <div class="col-xxl-4 col-md-4">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Visitor <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6 class="col">
                      0
                    </h6>
                    <p class="text-muted">Total Visitors</p>
                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Visitor Card -->

        </div>

        <!-- Defense Panel -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Defense Panel </h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Major</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Sample</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM crad_panel_committee ORDER BY comID DESC";
                  $stmt = $pdo->prepare($sql);
                  $stmt->execute();

                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch()) {


                  ?>
                      <tr>
                        <th scope="row"><?php echo $row['last_name'] ?>, <?php echo $row['first_name'] ?></th>
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
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End -->


      </div>
    </div><!-- End Left side columns -->



  </section>











</main><!-- End #main -->

<!-- ======= Footer ======= -->

<!-- <?php include('../partials/footer.php'); ?> -->

<!-- End Footer -->


</html>