<?php

require_once('../partials/connection.php');

// panel committee insert to database
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$exp = $_POST['exp'];
$qualification_one = $_POST['qualification_one'];
$qualification_two = $_POST['qualification_two'];

if (isset($_POST['submit_committee'])) {
    $sql = "INSERT INTO crad_panel_committee (last_name, first_name, middle_name, exp, qualification_one, qualification_two)
    VALUES (?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($last_name, $first_name, $middle_name, $exp, $qualification_one, $qualification_two));

    header("Location: ../crad/panelEvalCommittee.php");
}
