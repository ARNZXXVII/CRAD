<?php
include('../partials/connection.php');
?>
<title>Logbook Table</title>
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
        <h1>User's Logbook Table</h1>
    </div>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="createQRCode.php">Create QR Code</a>
            </li>
            <li class="breadcrumb-item">
                <a href="logbook.php">Scan</a>
            </li>
            <li class="breadcrumb-item active">
                Logbook Table
            </li>
        </ol>
    </nav>

    <section class="card container">
        <div class="col-lg-12" style=" max-height: 500px; overflow: scroll;">
            <h1 class="card-title">Logbook table</h1>
            <table id="logTable" class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Department</th>
                        <th>Date/Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM logbook_table ORDER BY log_datetime DESC";
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