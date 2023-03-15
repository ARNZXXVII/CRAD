 <?php

    require_once('../partials/connection.php');

    function do_upload($upload_folder, $file)
    {
        $filename = basename($file["upload_file"]["name"]);
        $target_file = $upload_folder . $filename;

        // Check if File Exists and increment filename accordingly
        $actual_name = pathinfo($target_file, PATHINFO_FILENAME);
        $original_name = $actual_name;
        $extension = pathinfo($target_file, PATHINFO_EXTENSION);
        $i = 2;
        while (file_exists('../uploads/' . $actual_name . "." . $extension)) {
            $actual_name = $original_name . " (" . $i . ")";
            $filename = $actual_name . "." . $extension;
            $i++;
        }
        $target_file = $upload_folder . $filename;

        move_uploaded_file($file["upload_file"]["tmp_name"], $target_file);

        return $filename;
    }

    function save_to_database($pdo, $title, $department, $filename)
    {
        $sql = "INSERT INTO crad_library (title, department, upload_file)
            VALUES (?,?,?)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($title, $department, $filename));
    }

    // ------------------------------------ to add data to databse ---------------------------------------
    if (isset($_POST['submit-library'])) {
        $target_dir = "../uploads/";

        $filename = do_upload($target_dir, $_FILES);
        save_to_database($pdo, $_POST['title'], $_POST['department'], $filename);

        header("Location: ../crad/library.php");
    }



    ?> 