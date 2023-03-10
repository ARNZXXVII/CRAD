<?php

?>
  <title>Module 4</title>
  <?php include('../partials/head.php'); ?>


  <!-- ======= Header ======= -->

  <?php include('../partials/header.php'); ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include('../partials/sidebar.php'); ?>

  <!-- End Sidebar-->

  <main id="main" class="main" >

	<!-- MAIN CONTENT -->
  <link href="../assets/css/qrCode.css" rel="stylesheet">
  
  <style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #reader {
        width: 600px;
    }
    #result {
        text-align: center;
        font-size: 1.5rem;
    }
</style>

<main>
    <div id="reader"></div>
    <div id="result"></div>
    <a href="qrCode.php">Create QR Code</a>
</main>
    

<script>

    const scanner = new Html5QrcodeScanner('reader', { 
        // Scanner will be initialized in DOM inside element with id of 'reader'
        qrbox: {
            width: 250,
            height: 250,
        },  // Sets dimensions of scanning box (set relative to reader element width)
        fps: 20, // Frames per second to attempt a scan
    });


    scanner.render(success, error);
    // Starts scanner

    function success(result) {

        document.getElementById('result').innerHTML = `
        <h2>Success!</h2>
        <p><a href="${result}">${result}</a></p>
        `;
        // Prints result as a link inside result element

        scanner.clear();
        // Clears scanning instance

        document.getElementById('reader').remove();
        // Removes reader element from DOM since no longer needed
    
    }

    function error(err) {
        console.error(err);
        // Prints any errors to the console
    }

</script>
 
  
 





  </main><!-- End #main -->

 

  <script>

  var x = document.getElementById('mod2')
  x.className = "active";

  var y = document.getElementById('sas')
  y.className = "nav-link ";

  var h = document.getElementById('components-nav')
  h.className = "nav-content collapse show";

  </script>

  </html>