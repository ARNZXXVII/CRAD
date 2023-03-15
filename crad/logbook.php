<?php
include('../partials/connection.php');
?>
<title>Logbook</title>
<?php include('../partials/head.php'); ?>

<!-- ======= Header ======= -->

<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->

<main id="main" class="main">

  <!-- MAIN CONTENT -->
  <!-- Include the Instascan library -->
  <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

  <div class="pagetitle">
    <h1>Logbook</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">
        Scan
      </li>
      <li class="breadcrumb-item">
        <a href="logbookTable.php">Logbook Table</a>
      </li>
    </ol>
  </nav>

  <div class="row">
    <div class="card col-lg-6">
      <h1 class="card-title">Scan your QR Code here</h1>
      <a href="createQRCode.php" style="text-decoration: underline;">Create QR Code <span><i class="bi bi-arrow-right-circle-fill"></i></span></a>
      <video></video>
      <select class="form-select my-3"></select>
    </div>

    <div class="col-lg-6" style=" max-height: 500px; overflow: scroll;">
      <h1 class="card-title">Recent Logbook</h1>
      <table id="logTable" class="table table-hover table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Department</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM crad_logbook_table ORDER BY log_datetime DESC LIMIT 5";
          $stmt = $pdo->prepare($sql);
          $stmt->execute();

          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch()) {

          ?>
              <tr>
                <td><?php echo $row['student_name'] ?></td>
                <td><?php echo $row['student_id'] ?></td>
                <td><?php echo $row['department'] ?></td>
                <td><?php echo $row['log_datetime'] ?></td>
              </tr>
          <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div id="toastInform" class="toast position-fixed top-0 end-0 me-3 mt-3" style="z-index: 2000 " role=" alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Message</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Successfully scanned!
    </div>
  </div>

  <script>
    // Select the element from the HTML document
    let video = document.querySelector('video');
    let fileInput = document.querySelector('#file-input');

    // Create a new Instascan scanner object and pass in the video element
    let scanner = new Instascan.Scanner({
      video: video
    });

    // Add an event listener for when a QR code is scanned
    scanner.addListener('scan', function(content) {
      // Split the scanned content into two values using a comma as the delimiter
      console.log(content);
      let values = content.split(' ');

      // Set the value of the first input field to the first value and the second input field to the second value
      const student_name = values[0] + ' ' + values[1];
      const student_id = values[2];
      const department = values[3];

      const datetime = getFormattedDate();
      console.log(datetime)

      fetch("../partials/saveLog.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded"
          },
          body: `student_name=${student_name}&student_id=${student_id}&department=${department}&datetime=${datetime}`
        })
        .then(response => response.text())
        .then(result => {
          console.log(result);
          $('#logTable').prepend($(`
          <tr>
              <td>${student_name}</td>
              <td>${student_id}</td>
              <td>${department}</td>
              <td>${datetime}</td>
            </tr>
          `));
          // JavaScript code to show the toast
          const toastEl = document.querySelector('#toastInform');
          console.log(toastEl);
          const toast = new bootstrap.Toast(toastEl);
          console.log(toast);
          toast.show();

        })
        .catch(error => {
          console.error(error);
        });
    });

    function getFormattedDate() {
      const date = new Date();

      const year = date.getFullYear();
      const month = ("0" + (date.getMonth() + 1)).slice(-2);
      const day = ("0" + date.getDate()).slice(-2);

      const hours = ("0" + date.getHours()).slice(-2);
      const minutes = ("0" + date.getMinutes()).slice(-2);
      const seconds = ("0" + date.getSeconds()).slice(-2);

      const formattedDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

      return formattedDate;

    }

    // Use the Instascan.Camera.getCameras() method to get a list of cameras
    Instascan.Camera.getCameras().then(function(cameras) {
      // If there are no cameras, log an error message to the console
      if (cameras.length === 0) {
        console.error('No cameras found.');
      } else {
        // Create a dropdown menu to let the user select a camera
        let select = document.querySelector('select');
        cameras.forEach(function(camera) {
          let option = document.createElement('option');
          option.value = camera.id;
          option.text = camera.name;
          select.appendChild(option);
        });

        // Add an event listener to the dropdown menu to start the scanner with the selected camera
        select.addEventListener('change', function() {
          scanner.start(cameras[select.selectedIndex]);
        });

        // Start the scanner with the first camera in the list
        scanner.start(cameras[1]);
      }
    }).catch(function(error) {
      console.error(error);
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