<?php
require_once('../partials/connection.php');
?>
<title>Defense Schedule</title>
<?php include('../partials/crad-head.php'); ?>

<!-- ======= Header ======= -->

<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->

<main id="main" class="main">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scheduling</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
  <script src="./js/jquery-3.6.0.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./fullcalendar/lib/main.min.js"></script>
  <style>
    :root {
      --bs-success-rgb: 71, 222, 152 !important;
    }

    html,
    body {
      height: 100%;
      width: 100%;
      font-family: Apple Chancery, cursive;
    }

    .btn-info.text-light:hover,
    .btn-info.text-light:focus {
      background: #000;
    }

    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
      border-color: #ededed !important;
      border-style: solid;
      border-width: 1px !important;
    }
  </style>

  <!-- MAIN CONTENT -->

  <div class="pagetitle">
    <h1>Defense Schedule</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="panelEvalCommittee.php">Committee</a>
      </li>
      <li class="breadcrumb-item">
        <a href="panelEvalForm.php">Form</a>
      </li>
      <li class="breadcrumb-item active">
        Defense Schedule
      </li>
    </ol>
  </nav>

  <body class="bg-light">
    <div class="container py-5" id="page-container">
      <div class="row">
        <div class="col-md-9">
          <div id="calendar"></div>
        </div>
        <div class="col-md-3">
          <div class="cardt rounded-0 shadow">
            <div class="card-header bg-gradient bg-primary text-light">
              <h5 class="card-title">Schedule Form</h5>
            </div>
            <div class="card-body">
              <div class="container-fluid">
                <form action="save_schedule.php" method="post" id="schedule-form">
                  <input type="hidden" name="id" value="">
                  <div class="form-group mb-2">
                    <label for="title" class="control-label">Title</label>
                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                  </div>
                  <div class="form-group mb-2">
                    <label for="description" class="control-label">Description</label>
                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                  </div>
                  <div class="form-group mb-2">
                    <label for="start_datetime" class="control-label">Start</label>
                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                  </div>
                  <div class="form-group mb-2">
                    <label for="end_datetime" class="control-label">End</label>
                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-center">
                <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
          <div class="modal-header rounded-0">
            <h5 class="modal-title">Schedule Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body rounded-0">
            <div class="container-fluid">
              <dl>
                <dt class="text-muted">Title</dt>
                <dd id="title" class="fw-bold fs-4"></dd>
                <dt class="text-muted">Description</dt>
                <dd id="description" class=""></dd>
                <dt class="text-muted">Start</dt>
                <dd id="start" class=""></dd>
                <dt class="text-muted">End</dt>
                <dd id="end" class=""></dd>
              </dl>
            </div>
          </div>
          <div class="modal-footer rounded-0">
            <div class="text-end">
              <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
              <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
              <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Event Details Modal -->

    <?php
    $stmt = $pdo->query("SELECT * FROM `schedule_list`");
    $sched_res = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $row['sdate'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
      $row['edate'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
      $sched_res[$row['id']] = $row;
    }

    ?>
    <?php
    if (isset($pdo)) {
      $pdo = null;
    }
    ?>
  </body>
  <script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
  </script>
  <script src="../def_schedule/js/script.js"></script>















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