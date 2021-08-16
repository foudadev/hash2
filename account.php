<?php
session_start();
if(!isset($_SESSION['email'])){
  header( "refresh:1;url=index.php" );
 die();
}

  // server data conection
  $email = $_SESSION['email'];

      // Create connection
      include 'config.php';
      $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);

      // excute query
      $sql = "SELECT id FROM register WHERE email = '".$email."'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $_SESSION['id']  = $row['id'] ;
        }
      }
      mysqli_close($conn);

      if(isset($_POST['submit'])){
         $pass_old   = $_POST['password_old'];
         $pass_new   = $_POST['password_new'];
         $pass_ver   = $_POST['password_ver'];

         if($pass_new !== $pass_ver){
          echo '<script>alert(" new password and confirm password not matched!");</script>';
          header( "refresh:1;url=account.php" );
          exit ;
         }

      $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
      $query = "UPDATE register SET password1	  = '".$pass_new."' WHERE email = '".$_SESSION['email']."' AND password1 = '".$pass_old."'";
      $result = mysqli_query($conn,$query);
      if($result){
        echo '<script>alert("Added Done Succesfully!");</script>';
        header( "refresh:1;url=account.php" );
      }else{
        echo '<script>alert("please check old password!");</script>';
        header( "refresh:1;url=account.php" );
      }
  }
      
?>

<?PHP
// Domain crud 
$domain_name = $_POST['domain'];
if(isset($domain_name)){
  $file_name = $_GET['file'];
  // filter input 
  //$domain_name  = preg_replace($bad_pattern='/[\/:*?"<>|]/',"",$domain);
  // update query
  include 'config.php';
  $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
  $query = "UPDATE orders SET domain  = '".$domain_name."' WHERE client_id = '".$_SESSION['id']."' AND product_name = '".$file_name."'";
  $result = mysqli_query($conn,$query);
  if($result){
    echo '<script>alert("Added Done Succesfully!");</script>';
    header( "refresh:1;url=account.php" );

    //header('location: http://localhost/hash2/account.php');
   }
  }



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>z-cookies.com - Account Settings</title>
  <link rel="shortcut icon" href="./img/cookies.svg">
  <!-- CSS Files -->
  <link rel="stylesheet" href="./vendor/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="./css/bootstrap.css" id="bscss">
  <link rel="stylesheet" href="./css/apps.css" id="maincss">
  <link rel="stylesheet" href="./css/animate.css">
  <link rel="stylesheet" href="./vendor/whirl/dist/whirl.css">
  <link rel="stylesheet" href="./vendor/sweetalert/dist/sweetalert.css">
  <link rel="stylesheet" href="./css/theme-e.css" id="maincss">
  <link rel="stylesheet" href="./css/z-loader.css">
  <!-- CSS Files -->
</head>

<body class="layout-boxed">
  <div class="wrapper">
    <header class="topnavbar-wrapper">
      <nav class="navbar topnavbar">
        <div class="navbar-header">
          <a class="navbar-brand" href="./dashboard.php">
            <div class="brand-logo"> <img class="img-fluid logo" src="./img/z-cookies.svg" alt="App Logo" style="margin-top: -10px;"> </div>
            <div class="brand-logo-collapsed"> <img class="img-fluid logo" src="./img/z-cookies.svg" alt="App Logo"> </div>
          </a>
        </div>
        <ul class="navbar-nav mr-auto flex-row">
          <li class="nav-item">
            <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed"> <em class="fa fa-navicon"></em> </a>
            <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true"> <em class="fa fa-navicon"></em> </a>
          </li>
        </ul>
        <ul class="navbar-nav flex-row">
          <li class="nav-item dropdown dropdown-list">
            <a class="nav-link" href="https://t.me/z-cookies" target="_blank" style="color: white;padding-right: 1px;">
              <i class="fa fa-paper-plane" aria-hidden="true"></i> Support </a>
          </li>
          <li class="nav-item active">
            <a class="nav-item nav-link" data-title="Add Balance" href="./add-balance.php" style="padding-right: 1px;">
              <div class="badge badge-info"><span id="buyer_balance">0.00$</span> <i class="fa fa-plus"></i> </div>
            </a>
          </li>
          <li class="nav-item d-none d-md-block"> </li>
          <li class="nav-item">
            <a class="nav-link" href="./logout.php" data-toggle-state="offsidebar-open" data-no-persist="true"> <em class="icon-logout"></em> </a>
          </li>
        </ul>
      </nav>
    </header>
    <aside class="aside-container">
      <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">
          <ul class="sidebar-nav">
            <li class="nav-heading "> <span data-localize="sidebar.heading.HEADER">Dashboard</span> </li>
            <li class="">
              <a href="./dashboard.php" title="Home"> <em class="icon-home"></em> <span data-localize="sidebar.nav.WIDGETS">Store</span> </a>
            </li>
            
            <li class=" ">
              <a href="./update.php" title="Developers"> <em class="icon-feed"></em> <span data-localize="sidebar.nav.WIDGETS">Updates & Help</span> </a>
            </li>
            <li class="nav-heading "> <span data-localize="sidebar.heading.HEADER">Settings</span> </li>
            <li class=" ">
              <a href="./account.php" title="Developers"> <em class="icon-user"></em> <span data-localize="sidebar.nav.WIDGETS">My Account</span> </a>
            </li>
            <li class=" ">
              <a href="./add-balance.php" title="Developers"> <em class="icon-credit-card"></em> <span data-localize="sidebar.nav.WIDGETS">Add Balance</span> </a>
            </li>
            <li class="nav-heading "> <span data-localize="sidebar.heading.COMPONENTS">Other</span> </li>
            <li class=" ">
              <a href="./logout.php" title="Logout"> <em class="icon-logout"></em> <span data-localize="sidebar.nav.WIDGETS">Logout</span> </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <section class="section-container">
      <div class="content-wrapper">
        <div class="content-heading">
          <div>My Account</div>
        </div>
        
        <div class="row">
        
               <div class="col-md-12">
                  <!-- START card-->
                  <div class="card card-default">
                     <div class="card-header">Settings</div>
                     <div class="card-body">
                        <form action="account.php" method="post">
                          <div class="form-group row">
                                 <label class="col-md-2 col-form-label">Email</label>
                                 <div class="col-md-10">
                                    <p class="form-control-plaintext"><?php echo $_SESSION['email']; ?></p>
                                 </div>
                              </div>
                              <hr>
                          <div class="form-group">
                              <label>Old Password</label>
                              <input class="form-control" type="password" name="password_old" placeholder="Password">
                           </div>
                           <hr>
                           <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" name="password_new" placeholder="Password">
                           </div>
                           <div class="form-group">
                              <label>Confirm New Password</label>
                              <input class="form-control" type="password" name="password_ver" placeholder="Password">
                           </div>
                           <button class="btn btn-sm btn-secondary" type="submit" name="submit" value="submit">Change Password</button>
                        </form>
                     </div>
                  </div>
                  <!-- END card-->
               </div>

 <div class="col-md-12" style="text-align: left!important;">
  <div class="card card-default">
    <div class="card-header">Pages Subscriptions</div>
    <div class="card-body">
      <div id="datatable2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer card-body-overflow"> 
        <table class="table table-striped table-hover w-100 text-left dataTable no-footer dtr-inline" id="datatable2" role="grid" aria-describedby="datatable2_info" style="width: 848px;">
          <thead>
            <tr class="text-left" role="row">
            <!--  <th class="sorting nowraping" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 204px;">Order ID</th> -->
              <th class="sorting_asc nowraping" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 213px;">Package Name</th>
              <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 198px;">Download</th>
              <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 169px;">DOMAIN</th>
            <!--  <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 169px;">STATUS</th>-->
            </tr>
          </thead>
          <tbody>

  <?php
   $user_id = $_SESSION['id'] ;
   //echo $user_id ;
   include "config.php";
   $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
   
       // excute query
       $sql = "SELECT product_name,domain FROM orders WHERE client_id = '".$user_id."'";
       $result = mysqli_query($conn, $sql);
       if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
        $product_name = $row['product_name'];
  ?>
            <tr class="odd">
           <!--   <td class="align-middle text-sm pl-1"> <span class="badge badge-sm bg-gradient-dark text-transform-none">64564qw</td>-->
              <td class="align-middle text-sm pl-1"> <span class="badge badge-sm bg-gradient-dark text-transform-none"><?php echo $product_name;?></span></td>
            <td class="align-middle text-sm pl-1">      
              <form action="download.php?file=<?php echo $product_name ; ?>" method="POST">
               <button class="btn" type="submit"><i class="fa fa-download"></i> Download</button>
               </form>
            </td>
              <td class="align-middle text-sm pl-1"> 
                <form action="account.php?file=<?php echo $product_name ; ?>" method="post">
                <span class="badge badge-sm bg-gradient-dark text-transform-none">
                <input class="form-control" type="text" name="domain" placeholder="Domain" value="<?php echo $row['domain'];?>">
                <button class="btn btn-sm btn-secondary" type="submit">Change Domain KEY</button>
                </span>
                  </form>
              </td>
            <!--  <td class="align-middle text-sm pl-1"> <span class="badge badge-sm bg-gradient-dark text-transform-none">ACTIVE</span></td>-->
            </tr>
            <?php
              }}?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
  </div>
  </div>
  </section>
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