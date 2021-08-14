<?php
    // Blockonmics API stuff
    $apikey = "Sn78p6yFjBwUxc8E4X0xeKetGz4NWbsipYIA2YMQFFw";
    $url = "https://www.blockonomics.co/api/";
    
    $options = array( 
        'http' => array(
            'header'  => 'Authorization: Bearer '.$apikey,
            'method'  => 'POST',
            'content' => '',
            'ignore_errors' => true
        )   
    );

    // Connection info
    $conn = mysqli_connect("localhost", "user", "Password123#@!", "hashing"); // enter your info
?>