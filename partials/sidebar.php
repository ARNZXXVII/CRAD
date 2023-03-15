<?php

?>

<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-heading">HOME</li>

    <li class="nav-item">
      <a class="nav-link " href="index.php">
        <i class="ri-dashboard-fill"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav ------------------------------------------------------------------>

    <li class="nav-heading">MODULES</li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#library-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-collection"></i><span>Research Library</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="library-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="library.php">
            <i class="bi bi-circle"></i><span>Library</span>
          </a>
        </li>
        <li>
          <a href="submission.php">
            <i class="bi bi-circle"></i><span>Submission</span>
          </a>
        </li>
        <li>
          <a href="others.php">
            <i class="bi bi-circle"></i><span>Others</span>
          </a>
        </li>

      </ul>
    </li><!-- End Library Nav ------------------------------------------------------------------------->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#payment-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-credit-card"></i><span>Research Payment</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="payment-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="orChecking.php">
            <i class="bi bi-circle"></i><span>Payment Verification</span>
          </a>
        </li>
        <li>
          <a href="paymentReports.php">
            <i class="bi bi-circle"></i><span>Payment Reports</span>
          </a>
        </li>

      </ul>
    </li><!-- End payment Nav ------------------------------------------------------------------------>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#defense-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Research Defense</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="defense-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="panelEvalCommittee.php">
            <i class="bi bi-circle"></i><span>Panel Evaluation Committee</span>
          </a>
        </li>
        <li>
          <a href="panelEvalForm.php">
            <i class="bi bi-circle"></i><span>Panel Evaluation Form</span>
          </a>
        </li>
        <li>
          <a href="defenseSchedule.php">
            <i class="bi bi-circle"></i><span>Defense Schedule</span>
          </a>
        </li>
      </ul>
    </li><!-- End Defense Nav ------------------------------------------------------------------------->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#logbook-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-card-checklist"></i><span>Digital Logbook</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="logbook-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="logbook.php">
            <i class="bi bi-circle"></i><span>Logbook</span>
          </a>
        </li>
        <li>
          <a href="createQRCode.php">
            <i class="bi bi-circle"></i><span>Create QR Code</span>
          </a>
        </li>
        <li>
          <a href="logbookTable.php">
            <i class="bi bi-circle"></i><span>Logbook Table</span>
          </a>
        </li>
      </ul>
    </li><!-- End Logbook Nav --------------------------------------------------------------------------->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#monitoring-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-laptop"></i><span>Monitoring</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="monitoring-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="monitoring.php">
            <i class="bi bi-circle"></i><span>Defense Monitoring</span>
          </a>
        </li>
        <li>
          <a href="gallery.php">
            <i class="bi bi-circle"></i><span>Gallery</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>3</span>
          </a>
        </li>
      </ul>
    </li><!-- End Monitoring Nav --------------------------------------------------------------------------->

    <li class="nav-item">
      <a class="nav-link collapsed" href="AdminAudit.php">
        <i class="bi bi-stickies"></i>
        <span>Audit Trail</span>
      </a>
    </li><!-- End Audit trail Nav --------------------------------------------------------------------->





    <li class="nav-heading">OTHERS</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.php">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="users.php">
        <i class="bi bi-people"></i>
        <span>Users</span>
      </a>
    </li><!-- End Users Page Nav -->




  </ul>
</aside>