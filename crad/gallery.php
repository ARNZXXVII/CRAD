<?php

?>
<title>Gallery</title>
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
        <h1>Defense Gallery</h1>
    </div>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="monitoring.php">Monitoring</a>
            </li>
            <li class="breadcrumb-item active">
                Gallery
            </li>
        </ol>
    </nav>
</main><!-- End #main -->


<?php
if (isset($_GET['image'])) {
    $image = $_GET['image'];
    echo '<img src="' . $image . '">';
} else {
    echo 'No image data found.';
}
?>



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