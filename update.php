<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>z-cookies.com - Update</title>
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
          <div>Updates & Help </div>
        </div>
       <div class="row">
    <div class="col-md-12">
    <div class="card card-default">
      <div class="card-header">List Articles</div>
      <div class="card-body">
        <div id="artikel_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
          
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-striped table-hover w-100 dataTable no-footer dtr-inline" id="artikel" role="grid" aria-describedby="artikel_info" style="width: 666px;">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="artikel" rowspan="1" colspan="1" style="width: 419px;" aria-label="Title: activate to sort column ascending">Title</th>
                    <th class="sorting_desc" tabindex="0" aria-controls="artikel" rowspan="1" colspan="1" style="width: 215px;" aria-sort="descending" aria-label="Last Posted: activate to sort column ascending">Last Posted</th>
                  </tr>
                </thead>
                <tbody>
                  <tr role="row" class="even">
                    <td tabindex="0"><a href="#">Privacy Policy - Terms &amp; Regulations</a></td>
                    <td class="sorting_1">2021-05-10 12:00:00</td>
                  </tr>
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