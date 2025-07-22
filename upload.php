<?php
echo phpinfo();
error_reporting(E_ALL);
ini_set("display_errors",1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["myfile"])) {
        $file = $_FILES["myfile"];

        $filename = $file["name"];
        $tmp_path = $file["tmp_name"];
        $error = $file["error"];
        $upload_dir = "uploads/";

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); 
        }

        if ($error === 0) {
            move_uploaded_file($tmp_path, $upload_dir . $filename);
            echo "File uploaded successfully!";
        } else {
            echo " Error uploading file!";
        }
    } else {
        echo " No file received!";
    }
} else {
    echo " Only POST requests are allowed!";
}
?>
