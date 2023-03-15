<?php

?>
<title>Defense Monitoring</title>
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
        <h1>Defense Monitoring</h1>
    </div>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">
                Monitoring
            </li>
            <li class="breadcrumb-item">
                <a href="gallery.php">Gallery</a>
            </li>
        </ol>
    </nav>

    <section class="container">
        <div class="text-center">
            <video id="video" width="640" height="480" autoplay></video>
            <canvas id="canvas" width="640" height="480"></canvas>
            <button id="capture">Capture</button>
        </div>
    </section>

    <script>
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const captureButton = document.getElementById('capture');

        // access the user's webcam and stream the video
        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then((stream) => {
                video.srcObject = stream;
            })
            .catch((error) => {
                console.error('Error accessing the webcam', error);
            });

        // capture a frame from the video stream and display it on the canvas
        captureButton.addEventListener('click', () => {
            const image = canvas.toDataURL(); // encode the image as a data URL
            window.location.href = `gallery.php?image=${encodeURIComponent(image)}`; // send the image to gallery.php
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