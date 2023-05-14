<?php

    $allowedTypes = ['image/jpeg', 'image/gif'];
    $uploadDir = 'uploads/'; // Directory to move the uploaded file

    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileType = $_FILES['file']['type'];

        if (in_array($fileType, $allowedTypes)) {
            $filename = $_FILES['file']['name'];
            
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $filename)) {
                echo "File uploaded and moved to: " . $uploadDir . $filename;
            } else {
                echo "Failed to move the uploaded file.";
            }
        } else {
            echo "Invalid file type. Only JPEG and GIF images are allowed.";
        }
    } else {
        echo "No file uploaded or an error occurred during upload.";
    }

?>

