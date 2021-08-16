<?php
    $product_id   = $_GET['id'];
    $user_id      = $_GET['user_id'];
    $product_name = $_GET['product'];
    // insert order 
    include 'config.php';
    $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
    $sql  = "INSERT INTO orders (client_id,product_id,product_name) VALUES ('$user_id','$product_id','$product_name')";
    mysqli_query($conn,$sql);
     // download file  
     $result = "SELECT filename FROM products WHERE id = '".$product_id."' ";
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
