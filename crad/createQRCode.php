<?php

?>
<title>Create QR Code</title>
<?php include('../partials/crad-head.php'); ?>

<!-- ======= Header ======= -->

<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->

<style>
  input,
  button,
  select {
    width: 70%;
    height: 50px;
    outline: none;
    border-radius: 5px;
  }

  input,
  select {
    border: 1px solid #8b8a8a;
    padding-left: 10px;
    margin-bottom: 15px;
    font-size: 15px;
  }

  .qr-code {
    padding: 25px 0;
    border: 1px solid #ccc;
    margin-top: 10px;
    height: 40vh;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
    opacity: 0;
    pointer-events: none;
    transition: .5s;
  }

  .container {
    background-color: #fff;
    width: 100%;
    border-radius: 7px;
    padding: 20px;
    transition: .1s;
  }

  /* .container.active {
    height: 60vh;
  } */

  .container.active .qr-code {
    opacity: 1;
    pointer-events: auto;
    height: 40vh;
  }
</style>

<main id="main" class="main">


  <!-- MAIN CONTENT -->

  <div class="pagetitle">
    <h1>Create QR Code</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item">
        Digital Logbook
      </li>
      <li class="breadcrumb-item active">
        QR Code
      </li>
    </ol>
  </nav>

  <section class="text-center">
    <div class="container card">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="card-title">QR Code Generator</h1>

          <p class="blockquote-footer mb-3">Must follow the sample format below</p>

          <input type="text" class="qr-input" placeholder="Lastname, Firstname" required>
          <input type="number" class="qr-input2" placeholder="19010XXX" required>
          <select name="department" class="qr-input3 mb-3" required>
            <option selected>Department</option>
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
          <button class="generate-btn btn btn-primary btn-sm">Generate QR Code</button>
          <br>
          <a href="logbook.php" style="text-decoration: underline;">Logbook <span><i class="bi bi-arrow-right-circle-fill"></i></span></a>


        </div>

        <div class="col-lg-6">
          <h1 class="card-title">Your QR Code will appear here..</h1>
          <p class="blockquote-footer mb-3">Please take a picture for future Logbooks</p>

          <div class="qr-code">
            <img src="images/qrcode.png" class="qr-image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    var container = document.querySelector(".container");
    var generateBtn = document.querySelector(".generate-btn");
    var qrInput = document.querySelector(".qr-input");
    var qrInput2 = document.querySelector(".qr-input2");
    var qrInput3 = document.querySelector(".qr-input3");
    var qrImg = document.querySelector(".qr-image");

    generateBtn.onclick = function() {
      if (qrInput.value.length && qrInput2.value.length > 0) {
        generateBtn.innerText = "Generating QR Code..."
        qrImg.src = "https://api.qrserver.com/v1/create-qr-code/?size=170x170&data=" + qrInput.value + ' ' + qrInput2.value + ' ' + qrInput3.value;
        qrImg.onload = function() {
          container.classList.add("active");
          generateBtn.innerText = "Generate QR Code";
        }
      }
    }
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