<?php
if(isset($_POST['login'])) {     
    $email    = $_POST["email"]; 
    $password1 = $_POST["password"]; 

                // import database file
                include 'config.php';
                // data base connection
                $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
                // my query
                $sql = "SELECT email, password1 FROM register WHERE email = '".$email."' AND  password1 = '".$password1."'";
               // excute query
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                // start session 
                session_start();
                $_SESSION['email'] = $email;
                mysqli_close($conn);
                header('location: http://localhost/hash2/account.php');

                } else{
                   echo $email . $password1 ;
                  $error_valadtion = "Please make sure email and password are correct";
                  //echo "<script>alert($error_valadtion);</script>";
                  echo $error_valadtion ;
                }

      }
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>z-cookies.com - Login</title>
   
   <link rel="shortcut icon" href="./img/cookies.svg">
   <!-- CSS Files -->
   <link rel="stylesheet" href="./vendor/font-awesome/css/font-awesome.css">
   <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" href="./css/bootstrap.css" id="bscss">
   <link rel="stylesheet" href="./css/app.css" id="maincss">
   <style type="text/css">.text-address {color: #4e5254 !important;}</style>
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
            
               <p class="text-center py-2">
                    
                    <span class="input-group-text text-address bg-transparent"><i class="fa fa-lock" aria-hidden="true" style="color:green;">&nbsp;https://</i>z-cookies.com</span></span>
                   
               </p>
               <p class="text-center py-2">Welcome Back !</p>
               <form class="mb-3" id="loginForm" action="index.php" method="POST" novalidate>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputEmail1" name="email" type="email" placeholder="Enter email" autocomplete="off" required autofocus="focus">
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-envelope text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputPassword1" name="password" type="password" placeholder="Password" required >
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <div class="float-right"><a class="text-muted" href="reset-password.php">Forgot your password?</a>
                     </div>
                  </div>
                  <button class="btn btn-block btn-primary mt-3" name="login" type="submit">Login</button>
               </form>
              
               <p class="pt-3 text-center">Need to Signup?</p><a class="btn btn-block btn-secondary" href="register.php">Register Now</a>
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