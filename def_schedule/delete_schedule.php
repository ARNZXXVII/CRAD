<?php
require_once('../partials/connection.php');

if (!isset($_GET['id'])) {
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
    $pdo = null;
    exit;
}


$sql = "DELETE FROM `schedule_list` WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
if ($stmt->execute()) {
    echo "<script> alert('Event has deleted successfully.'); location.replace('./') </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: " . $stmt->errorInfo()[2] . "<br>";
    echo "SQL: " . $sql . "<br>";
    echo "</pre>";
}
$pdo = null;
