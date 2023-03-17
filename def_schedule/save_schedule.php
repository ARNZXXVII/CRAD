<?php 
require_once('../partials/connection.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $pdo = null;
    exit;
}

extract($_POST);
$allday = isset($allday);

if (empty($id)) {
    $sql = "INSERT INTO `schedule_list` (`title`,`description`,`start_datetime`,`end_datetime`) VALUES (:title, :description, :start_datetime, :end_datetime)";
} else {
    $sql = "UPDATE `schedule_list` SET `title` = :title, `description` = :description, `start_datetime` = :start_datetime, `end_datetime` = :end_datetime WHERE `id` = :id";
}
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':description', $description, PDO::PARAM_STR);
$stmt->bindParam(':start_datetime', $start_datetime, PDO::PARAM_STR);
$stmt->bindParam(':end_datetime', $end_datetime, PDO::PARAM_STR);
if (!empty($id)) {
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
}
if ($stmt->execute()) {
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: " . $stmt->errorInfo()[2] . "<br>";
    echo "SQL: " . $sql . "<br>";
    echo "</pre>";
}
$pdo = null;
