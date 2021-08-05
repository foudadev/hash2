<?php

function DataBase($sql,$fetch){
          // database connection
          $servername = "localhost";
          $username   = "user";
          $password   = "Password123#@!";
          $dbname     = "hashing";
          
          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          // excute query
          $result = mysqli_query($conn, $sql);
          if ($result) {
            $db_excute = true;
            session_start();
            // check if want to fetch data if fetch = true
            switch($fetch){
              case true : // check if their result
                if(mysqli_num_rows($result) > 0){
                  $_SESSION['fetch_data'] = true;
                }
                break;
              default:
                $_SESSION['fetch_data'] = false;
            }
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            // $db_excute = false ;
          }
          
}

