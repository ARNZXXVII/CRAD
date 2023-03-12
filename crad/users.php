<?php
require_once('../partials/connection.php');

?>
<title>Users</title>
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
    <h1>Users List</h1>
  </div>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item">
        Users
      </li>
    </ol>
  </nav>


  <section class="card container">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>First name</th>
          <th>Last name</th>
          <th>Email</th>
          <th>Username</th>
          <th>Contact</th>
          <th>Access</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM users";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
          while ($row = $stmt->fetch()) {


        ?>
            <tr>
              <td><?php echo $row['first_name']; ?></td>
              <td><?php echo $row['last_name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['contact']; ?></td>
              <td><?php echo $row['access']; ?></td>


            </tr>
      </tbody>
  <?php
          }
        }
  ?>
    </table>
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