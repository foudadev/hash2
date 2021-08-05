<?php

// 
   if (isset($_POST['submit'])) {
    // form varabile
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $email = $_SESSION['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2']; 

  /*  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_valadtion = "Invalid email format";
        echo "<script>alert($error_valadtion);</script>";

    } elseif ($password1 !== $password2) {
        $error_valadtion = "Please make sure that the first password matches the second";
        echo "<script>alert($error_valadtion);</script>";
        } else {*/
            // import database file
            if ($password1 !== $password2) {
                $error_valadtion = "Please make sure that the first password matches the second";
                echo $error_valadtion;
            }else{
                include 'config.php';
                $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT email FROM register where email='".$email."'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "email exist";
                    mysqli_close($conn);
                } else {
                    $sql = "INSERT INTO register (email, password1)
               VALUES ('$email', '$password1')";
                    // close connection
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $email = $_SESSION['email'];
                        // go to user profile page
                        header('location: http://localhost/hash2/account.php');
                    }
                }
            }
         }

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>z-cookies.com - Register</title>

   <link rel="shortcut icon" href="./img/cookies.svg">
   <!-- CSS Files -->
   <link rel="stylesheet" href="./vendor/font-awesome/css/font-awesome.css">
   <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" href="./css/bootstrap.css" id="bscss">
   <link rel="stylesheet" href="./css/app.css" id="maincss">
   <!-- CSS Files -->
</head>
<body>
   <div class="wrapper">
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark">
               <a href="index.php">
                  <img class="block-center rounded logo logoos" src="./img/z-cookies.svg" alt="Image">
               </a>
            </div>
            <div class="card-body">
               <p class="text-center py-2">SIGNUP TO GET INSTANT ACCESS.</p>
               <form class="mb-3" action="register.php" method="post">
                  <div class="form-group">
                     <label class="text-muted" for="signupInputEmail1">Email address <br><small style="color:red">Use the correct email for verification.</small></label>
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" type="email" placeholder="Enter email" autocomplete="off" name="email" id="email" required autofocus="focus">
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-envelope text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="text-muted" for="signupInputPassword1">Password</label>
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" type="password" placeholder="Password" autocomplete="off" name="password1" required>
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="text-muted" for="signupInputRePassword1">Retype Password</label>
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" type="password" placeholder="Retype Password" autocomplete="off" required name="password2">
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div> 
                   <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                  <button class="btn btn-block btn-primary mt-3" type="submit" name="submit" value="submit">Create account</button>
               </form>
               <p class="pt-3 text-center">Have an account?</p><a class="btn btn-block btn-secondary" href="index.php">Login Now</a>
            </div>
         </div>
         <!-- END card-->
         <div class="p-3 text-center">
            <span class="mr-2">&copy; 2021 z-cookies.COM - <a href="https://t.me/z-cookies">Telegram Channel</a></span>
         </div>
      </div>
   </div>
   <!-- JS Files -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
   <script src="./vendor/jquery/dist/jquery.js"></script>
   <script src="./vendor/bootstrap/dist/js/bootstrap.js"></script>
   <script src="./vendor/js-storage/js.storage.js"></script>
   <script src="./vendor/parsleyjs/dist/parsley.js"></script>
   <script src="./js/app.js"></script>
   <!-- JS Files -->
   </body>
</html>