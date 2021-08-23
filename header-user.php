<?php if(!isset($Translation)){ @header('Location: index.php'); exit; } ?>
<?php @include("{$currDir}/hooks/links-home.php"); ?>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<?php include("magic/magic.php"); ?>
<?php check(); ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Morgue Management System</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/styles.min.css">
    <link rel="stylesheet" href="lib/css/chartist.min.css">

    <script type="text/javascript" src="lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/js/tether.min.js"></script>
    <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="lib/js/chartist.min.js"></script>
    <script type="text/javascript" src="assets/js/app.min.js"></script>
    
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span>
                <i class="fa fa-code-fork"></i>
            </span>
        </button>

        <button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
            <span>
               <i class="fa fa-align-justify"></i>
            </span>
        </button>

        <a class="navbar-brand logo" href="index.php" style="color: white">
           <h4><strong>MorgueManagement</strong></h4>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="sidebar-toggle btn btn-flat" id="toggle-sidebar-desktop">
                <span>
                    <i class="fa fa-align-justify"></i>
                </span>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <li>
               <?php if(getLoggedAdmin()){ ?>
               <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm visible-xs btn-sm"><i class="fa fa-cog"></i> <strong><?php echo $Translation['admin area']; ?></strong></a>
               <?php } ?>
               <?php if(!$_GET['signIn'] && !$_GET['loginFailed']){ ?>
               <?php if(getLoggedMemberID() == $adminConfig['anonymousMember']){ ?>
               <p class="navbar-text navbar-right">&nbsp;</p>
               <a href="<?php echo PREPEND_PATH; ?>index.php?signIn=1" class="btn btn-success navbar-btn btn-sm navbar-right"><strong><?php echo $Translation['sign in']; ?></strong></a>
               <p class="navbar-text navbar-right">
                <?php echo $Translation['not signed in']; ?>
              </p>
              <?php }else{ ?>
              <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
              </ul>
              <ul class="nav navbar-nav visible-xs">
              </ul>
              <?php } ?>
              <?php } ?>
            </li>
            <!--login/logout area ends-->
            <li class="divider"></li>
            <li><a class="btn navbar-btn btn-warning" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="fa fa-power-off"></i> <strong style="color:black"><?php echo $Translation['sign out']; ?></strong> </a></li>
          </ul>
        </li>
          </ul>
                        </li>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /NAVBAR -->

    <div class="page-container">
        <div class="page-content">
            <!-- inject:SIDEBAR -->

            <div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">
            <li class="navigation-header">
                <span>Main</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>

            <li class="navigation-header">
                <span>Menu</span>
                <i class="icon-menu"></i>
            </li>
            <li>
                <a href="incoming_deceased_view.php"><i class="fa fa-ambulance"></i> <span>Incoming Deceased</span></a>
            </li>
            <li>
                <a href="outgoing_deceased_view.php"><i class="fa fa-cab"></i> <span>Outgoing Deceased</span></a>
            </li>
             <li>
                <a href="relatives_info_view.php"><i class="fa fa-users"></i> <span>Relatives</span></a>
            </li>
             <li>
                <a href="rooms_view.php"><i class="fa fa-building"></i> <span>Rooms</span></a>
            </li>
             <li>
                <a href="beds_view.php"><i class="fa fa-hotel"></i> <span>Beds</span></a>
            </li>
             <li>
                <a href="invoices_view.php"><i class="fa fa-money"></i> <span>Invoices</span></a>
            </li>
             <li>
                <a href="bill_view.php"><i class="fa fa-dollar"></i> <span>Bills</span></a>
            </li>
            </li>
        </ul>
    </div>
</div>

            <!-- inject:/SIDEBAR -->
            <?php include("main.php");?>

            
        </div>
    </div>
</body>

</html>