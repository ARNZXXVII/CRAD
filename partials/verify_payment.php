<?php
include('../partials/connection.php');

// Retrieve the text inputs from a form
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$input3 = $_POST['input3'];
$input4 = $_POST['input4'];
$input5 = $_POST['input5'];

// Prepare the SQL statement
$stmt = $pdo->prepare("SELECT * FROM crad_sample_payment WHERE student_id = :input1 OR student_id = :input2 OR student_id = :input3 OR student_id = :input4 OR student_id = :input5");

// Bind the parameters to the SQL statement
$stmt->bindParam(':input1', $input1);
$stmt->bindParam(':input2', $input2);
$stmt->bindParam(':input3', $input3);
$stmt->bindParam(':input4', $input4);
$stmt->bindParam(':input5', $input5);

// Execute the SQL statement
$stmt->execute();

// Fetch the results as an associative array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Output the results
if ($results == $row) {
    echo $row['student_id'] . " | " . $row['student_id'] . " | " . $row['student_id'] . " | " . $row['student_id'] . " | " . $row['student_id'] . "<br>";

    header("Location: ../crad/paymentReports.php");
}

// Close the database connection
$conn = null;
