<?php
include('../partials/connection.php');
?>
<title>OR Checking</title>
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

  <section class="card container">
    <h1 class="card-title">Payment Details <span class="text-muted">| Research Defense</span></h1>
    <table class="table datatable" id="myTable">
      <thead>
        <tr>
          <th>Ref Number</th>
          <th>Student Name</th>
          <th>Student ID</th>
          <th>Payment for</th>
          <th>Amount</th>
          <th>Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM crad_sample_payment WHERE payment_for = 'research 1' OR payment_for = 'research 2' ORDER BY payment_date DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowcount() > 0) {
          while ($row = $stmt->fetch()) {

            // Check if amount is equal to 2000
            $status = ($row['amount'] == 2000) ? '<span class="badge rounded-pill bg-success"><i class="bi bi-check-circle"></i></span>' : '<span class="badge rounded-pill bg-danger"><i class="bi bi-x-circle"></i></span>';
        ?>
            <tr>
              <td><?php echo $row['reference_no']; ?></td>
              <td><?php echo $row['student_name'] ?></td>
              <td><?php echo $row['student_id']; ?></td>
              <td><?php echo $row['payment_for']; ?></td>
              <td><?php echo $row['amount']; ?></td>
              <td><?php echo $row['payment_date']; ?></td>
              <td><?php echo $status; ?></td>
              <td>
                <button class="btn btn-sm btn-primary copy-row">Copy</button>
              </td>
            </tr>
        <?php
          }
        }
        ?>
      </tbody>
    </table>
  </section>

  <section class="card container">
    <h1 class="card-title">Payment Report <span class="text-muted">| Research Defense</span></h1>
    <form action="paymentReports.php" method="POST">
      <div id="copiedRowsTable">
        <table class="table">
          <thead>
            <tr>
              <th>Ref Number</th>
              <th>Student Name</th>
              <th>Student ID</th>
              <th>Payment for</th>
              <th>Amount</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- You can add table rows dynamically using JavaScript -->
          </tbody>
        </table>
        <input type="submit" value="Submit" class="btn btn-sm btn-primary col-4">
      </div>
    </form>
  </section>


  <script>
    $(document).ready(function() {
      // Handle click on "Copy" button
      $('#myTable').on('click', '.copy-row', function() {
        // Get the row that the button belongs to
        var row = $(this).closest('tr');

        // Clone the row and its content
        var newRow = row.clone();

        // Remove the "Copy" button from the new row
        newRow.find('.copy-row').remove();

        // Append the new row to the copiedRowsTable
        $('#copiedRowsTable table tbody').append(newRow);
      });
    });
  </script>


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