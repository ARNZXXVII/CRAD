<?php
require_once('../partials/connection.php');
?>

<title>Submission of Research</title>
<?php include('../partials/crad-head.php'); ?>

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

    <div class="mb-3">
      <div class="btn-group col-lg-6 mb-2">
        <button onclick="showDiv('div1')" class="btn btn-sm btn-primary">First Sem Submission</button>
        <button onclick="showDiv('div2')" class="btn btn-sm btn-primary">Second Sem Submission</button>
      </div>

      <div id="div1" style="display: none;" class="col-lg-12">
        <!-- first sem submission -->

        <div class="card">
          <div class="card-body mt-2">

            <ul class="nav nav-tabs d-flex" id="myTabjustified2" role="tablist">
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="home-tab2" data-bs-toggle="tab" data-bs-target="#home-justified2" type="button" role="tab" aria-controls="home" aria-selected="true">Approval Sheet</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile-justified2" type="button" role="tab" aria-controls="profile" aria-selected="false">Chapter 123</button>
              </li>
            </ul>

            <div class="tab-content pt-2" id="myTabjustifiedContent2">

              <!-- Approval form -->
              <div class="tab-pane fade show active" id="home-justified2" role="tabpanel" aria-labelledby="home-tab2">
                <div class="card container col-10">
                  <h1 class="card-title">Submit <span class="text-muted">| Approval Sheet</span></h1>
                  <form>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="input1" placeholder="Input 1">
                      <label for="input1">Input 1</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="input2" placeholder="Input 2">
                      <label for="input2">Input 2</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="dropdown" aria-label="Dropdown">
                        <option selected>Open this dropdown</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                      </select>
                      <label for="dropdown">Dropdown</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

              </div>
              <!-- End Approval form -->

              <!-- Chap123 form -->
              <div class="tab-pane fade" id="profile-justified2" role="tabpanel" aria-labelledby="profile-tab2">
                <div class="card container col-10">
                  <h1 class="card-title">Submit <span class="text-muted">| Chapter 123</span></h1>
                  <form>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="input3" placeholder="Input 3">
                      <label for="input3">Input 3</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="input4" placeholder="Input 4">
                      <label for="input4">Input 4</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="dropdown2" aria-label="Dropdown2">
                        <option selected>Open this dropdown</option>
                        <option value="option4">Option 4</option>
                        <option value="option5">Option 5</option>
                        <option value="option6">Option 6</option>
                      </select>
                      <label for="dropdown2">Dropdown 2</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

              </div>
              <!-- End Chap123 form -->
            </div>

          </div>
        </div>
      </div>

      <div id="div2" style="display: none;" class="col-lg-12">
        <!-- second sem submission -->

        <div class="card">
          <div class="card-body mt-2">

            <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Bookbind</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Video</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">CD</button>
              </li>
            </ul>

            <div class="tab-content pt-2" id="myTabjustifiedContent">
              <!-- Bookbind form -->
              <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                <div class="container card col-10">
                  <h1 class="card-title">Submit <span class="text-muted">| Bookbind</span></h1>
                  <form>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="name" placeholder="Your name">
                      <label for="name">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
                      <label for="email">Email address:</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Your phone number">
                      <label for="phone">Phone Number</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="position" name="position" placeholder="Position you're applying for">
                      <label for="position">Position Applied For</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Enter your cover letter here" id="cover-letter"></textarea>
                      <label for="cover-letter">Cover Letter</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

              </div>
              <!-- End Bookbind form -->

              <!-- Research Festival form -->
              <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container card col-10">
                  <h1 class="card-title">Submit your video entry <span class="text-muted">| Research Festival</span></h1>
                  <form>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="name" placeholder="Name">
                      <label for="name">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="youtube-link" name="youtube-link" placeholder="Enter YouTube video link...">
                      <label for="youtube-link">YouTube video link:</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="dropdown" aria-label="Select option">
                        <option selected>Select option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                      <label for="dropdown">Dropdown</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Enter your message here" id="message"></textarea>
                      <label for="message">Message</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              <!-- End Research Festival form -->

              <!-- CD form -->
              <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container card col-10">
                  <h1 class="card-title">Submit <span class="text-muted">| CD</span></h1>
                  <form>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="entry-title" placeholder="Entry Title">
                      <label for="entry-title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="entry-video-link" name="entry-video-link" placeholder="Enter YouTube video link...">
                      <label for="entry-video-link">Video Link:</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="entry-category" aria-label="Select category">
                        <option selected>Select category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                      </select>
                      <label for="entry-category">Category</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Enter your description here" id="entry-description"></textarea>
                      <label for="entry-description">Description</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

              </div>
              <!-- End CD form -->
            </div>

          </div>
        </div>
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
        <h5 class="card-title">Fill in the form <span class="text-muted">| Chapter 1 - 5 submission</span></h5>


        <form class="row g-3" action="../partials/process.php" method="POST" enctype="multipart/form-data">

          <div class="col-12">
            <label for="inputNanme4" class="form-label">Research Title</label>
            <!-- <input type="text" name="title" class="form-control" id="inputNanme4" required> -->
            <textarea name="title" class="form-control" id="inputNanme4" cols="30" rows="5" required></textarea>
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
                <option selected value="">Select</option>
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