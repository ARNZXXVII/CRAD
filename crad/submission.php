<?php
require_once('../partials/connection.php');
?>

<title>Submission of Research</title>
<?php include('../partials/head.php'); ?>

<!-- ======= Header ======= -->

<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->

<main id="main" class="main">

  <!-- MAIN CONTENT -->

  <section>
    <div class="pagetitle">
      <h1>Submission of Research</h1>
    </div>

    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
          Submission
        </li>
        <li class="breadcrumb-item">
          <a href="library.php">Library</a>
        </li>
      </ol>
    </nav>
  </section>


  <section>
    <div class="btn-group col-lg-6 mb-2">
      <button onclick="showDiv('div1')" class="btn btn-sm btn-primary">First Sem Submission</button>
      <button onclick="showDiv('div2')" class="btn btn-sm btn-primary">Second Sem Submission</button>
    </div>

    <div id="div1" style="display: none;" class="col-lg-6">
      <div class="btn-group">
        <button type="button" class="btn btn-sm btn-secondary">Approval Sheet</button>
        <button type="button" class="btn btn-sm btn-secondary">Chapter 123</button>
      </div>
    </div>

    <div id="div2" style="display: none;" class="col-lg-6">
      <div class="btn-group">
        <button type="button" class="btn btn-sm btn-secondary">Bookbind</button>
        <button type="button" class="btn btn-sm btn-secondary">Video</button>
        <button type="button" class="btn btn-sm btn-secondary">CD</button>
      </div>
    </div>

  </section>
  <script>
    var currentDiv = null;

    function showDiv(divId) {
      // Get the div element
      var divElement = document.getElementById(divId);

      // Hide the previously shown div if there is one
      if (currentDiv !== null) {
        currentDiv.style.display = 'none';
      }

      // Show the current div
      divElement.style.display = 'block';

      // Remember the current div
      currentDiv = divElement;
    }

    function showForm(divId) {

    }
  </script>

  <section>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Fill in the form</h5>


        <form class="row g-3" action="../partials/process.php" method="POST" enctype="multipart/form-data">

          <div class="col-12">
            <label for="inputNanme4" class="form-label">Research Title</label>
            <input type="text" name="title" class="form-control" id="inputNanme4" required>
          </div>

          <div class="col-12">
            <label for="inputEmail4" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="inputEmail4" required>
          </div>

          <div class="col-md-6">
            <label for="inputNumber" class="col-sm-6 col-form-label">File</label>
            <div class="col-sm-12">
              <input class="form-control" name="upload_file" type="file" id="formFile" accept=".pdf" required>
            </div>
          </div>

          <div class="col-md-6">
            <label class="col-sm-6 col-form-label">Department</label>
            <div class="col-sm-12">
              <select name="department" class="form-select" aria-label="Default select example" required>
                <option selected>Select</option>
                <option value="BSIT">BSIT</option>
                <option value="BSHM">BSHM</option>
                <option value="BSOA">BSOA</option>
                <option value="BSBA">BSBA</option>
                <option value="BSCRIM">BSCRIM</option>
                <option value="BEED">BEED</option>
                <option value="BSED">BSED</option>
                <option value="BSCpE">BSCpE</option>
                <option value="BLIS">BLIS</option>
                <option value="BSTM">BSTM</option>
                <option value="BSEntrep">BSEntrep</option>
                <option value="BSAIS">BSAIS</option>
                <option value="BSP">BSP</option>
              </select>
            </div>
          </div>

          <div>

            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#disablebackdrop">
              Submit
            </button>
            <div class="modal fade" id="disablebackdrop" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Are you sure you want to submit?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm" name="submit-library">Proceed</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
          </div>
        </form>

      </div>
    </div>
  </section>

  <!-- <form class="row g-3 needs-validation container card" id="form2" novalidate>
    <div class="col-md-4">
      <h1 class="card-title">
        Chapter 123
      </h1>
      <div class="form-floating">
        <input type="text" class="form-control" id="Last" placeholder="Last Name" required>
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
        <input type="text" class="form-control" id="First" placeholder="First Name" required>
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
        <input type="text" class="form-control" id="Middle" placeholder="Middle Name" required>
        <label for="Middle">Middle Name</label>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Enter Middle Name!
        </div>
      </div>
    </div>
    <div class="text-center mb-2">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form> -->


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