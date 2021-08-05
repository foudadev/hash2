<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>z-cookies.com - Forgot Password</title>

   <link rel="shortcut icon" href="img/cookies.svg">
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
               <p class="text-center py-2">Forgot Password.</p>
               <form class="mb-3" id="loginForm" action="./actions/reset-password.php" method="POST" novalidate>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputEmail1" name="email" type="email" placeholder="Enter email" autocomplete="off" required  autofocus="focus">
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-envelope text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <button class="btn btn-block btn-danger mt-3" type="submit">Reset Password</button>
               </form>
               <p class="pt-3 text-center">Login Now ?</p><a class="btn btn-block btn-secondary" href="index.php">Login</a>
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