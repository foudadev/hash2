<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $filename = $_GET['file'];
     // download file  
     include 'config.php';
     $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
     $result = "SELECT filename FROM admin_panel WHERE project_name = '".$filename."' ";
    $run = mysqli_query($conn, $result);
    while ($row = mysqli_fetch_assoc($run)) {
        $fileName  = basename($row['filename']);
        $filePath  = "files/".$fileName;
    
        if (!empty($fileName) && file_exists($filePath)) {
            //define header
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$fileName");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");
            //read file
            readfile($filePath);
            exit;
        } else {
            echo "file not exit";
        }
    }
    
}
