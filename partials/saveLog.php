<?php

require_once('../partials/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    save_to_database($pdo, $_POST['student_name'], $_POST['student_id'],  $_POST['department'], $_POST['datetime']);
    return True;
}

function save_to_database($pdo, $student_name, $student_id, $department, $datetime)
{
    echo '<script>console.log(' . $datetime . ')</script>';
    $sql = "INSERT INTO logbook_table (student_name, student_id, department, log_datetime)
            VALUES (?,?,?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($student_name, $student_id, $department, $datetime));
}
