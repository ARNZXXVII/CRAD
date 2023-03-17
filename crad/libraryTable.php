<?php
require_once('../partials/connection.php');

?>
<title>Library Table</title>

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
        <h1>Research Library</h1>
    </div>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="submission.php">Submission</a>
            </li>
            <li class="breadcrumb-item">
                <a href="library.php">Card View</a>
            </li>
            <li class="breadcrumb-item active">
                Table View
            </li>
        </ol>
    </nav>

    <section>
        <div class="card container">
            <p class="card-title">Search any keyword <span>from Author or Research Title</span> </p>
            <div>
                <form action="libraryTable.php" method="GET" class="row">
                    <div class="col-lg-8">
                        <div class="input-group mb-3">
                            <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                        echo $_GET['search'];
                                                                    } ?>" class="form-control" placeholder="Search data">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="input-group mb-3">
                            <select name="department" id="departmentSelect" class="form-select" aria-label="Default select example">
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
                            <button type="submit" name="filter" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </form>
            </div>

            <div style="max-height: 500px; overflow: scroll;">
                <table class="table table-sm table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Department</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $searchKeyword = isset($_GET['search']) ? $_GET['search'] : '';
                        $departmentFilter = isset($_GET['department']) ? $_GET['department'] : null;
                        $query = "SELECT * FROM crad_library WHERE CONCAT(title) LIKE '%$searchKeyword%'";
                        if ($departmentFilter) {
                            $query = $query . 'AND department="' . $departmentFilter . '"';
                        }
                        $stmt = $pdo->prepare($query);
                        $stmt->execute();





                        if ($stmt->rowCount() > 0) {
                            foreach ($stmt as $items) {
                        ?>
                                <tr>
                                    <td><?= $items['ID']; ?></td>
                                    <td><?= $items['department']; ?></td>
                                    <td><?= $items['title']; ?></td>
                                    <td><?= $items['date']; ?></td>
                                    <td>
                                        <a href="../uploads/<?php echo $items['upload_file']; ?>" target="_blank" class="btn btn-primary btn-sm d-grid"><span><i class="bi bi-folder2-open"></i> Open</span></a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>

                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Update the selected department filter based on the previous selection -->
    <script type="text/javascript">
        const urlParams = new URLSearchParams(window.location.search);
        const depParam = urlParams.get('department');
        console.log(depParam);
        if (depParam) {
            const departmentSelect = document.getElementById('departmentSelect');
            console.log(departmentSelect);
            const selectedOption = departmentSelect.querySelector(`option[value="${depParam}"]`);
            console.log(selectedOption);
            if (selectedOption) {
                selectedOption.selected = true;
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