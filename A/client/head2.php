<?php
include_once "../inc/d.php";
session_start();

if (isset($_SESSION["id"])){
    $user_id = $_SESSION["id"];
    $userQuery = "SELECT * FROM customer WHERE userID = '$user_id'";
    $result = mysqli_query($con, $userQuery);
    $user = mysqli_fetch_assoc($result);
    $name=$user['fname']." ".$user['lname'];
    $uid=$user['userID'];
    $email=$user['email'];
    $phone=$user['phone'];
    $add=$user['address'];
    $dat=$user['created'];
    
    //Total Sales
    $qq=$con->query("SELECT count(userID) AS count, sum(amount) AS sum FROM subscription WHERE userID = '$user_id'");
    $rr=$qq->fetch_array();
    $sum= number_format($rr['sum']);
    
    $cust= number_format($rr['count']);
    
    //Total Property
    $qq3=$con->query("SELECT count(pID) AS count FROM project");
    $rr3=$qq3->fetch_array();
    $proj =$rr3['count'];
    
    //Total Payout
    $qy=$con->query("SELECT sum(tot_amount) AS sum FROM payout WHERE userID = '$user_id'");
    $ry=$qy->fetch_array();
    $payout= number_format($ry['sum']);
    
}else{
    header('Location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2015 16:03:55 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Home | OwnedTogether</title>
    <!-- Favicons-->
    <link rel="icon" href="../../own/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="../../own/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../own/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="../../own/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">    
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    <link href="../../own/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../../own/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../own/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../own/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    
  <link href="../../own/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="coll">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">
                      <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan hide-on-large-only"><i class="mdi-navigation-menu" ></i></a></li>
                      <li><h1 class="logo-wrapper"><a href="home.php" class="brand-logo darken-1"> <img src="../../img/core-img/logo2.png" alt=""/></a> </h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <form method="POST" action=""> 
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Search"/>
                        </form>
                    </div>
                    <ul class="right hide-on-med-and-down">                        
<!--                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                        </li>                        -->
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-cyan coll2" ><i class="mdi-social-notifications"></i></a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse coll2"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- HORIZONTL NAV START-->
             <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">                  
                  <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="home" class="cyan-text">
                            <i class="mdi-action-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="message" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Messaging</span>
                        </a>
                    </li>  
                   <!-- <li>
                        <a href="invest.php" class="cyan-text">
                            <i class="mdi-editor-attach-money"></i>
                            <span> Listings</span>
                        </a>
                    </li>-->
                    <li>
                        <a class="dropdown-menu cyan-text" href="" data-activates="listing">
                            <i class="mdi-editor-attach-money"></i>
                            <span>Listing<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="" data-activates="portfolio">
                            <i class="mdi-action-wallet-travel"></i>
                            <span>My Portfolio<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="" data-activates="Profiledropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>Profile<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                 <!-- Lisiting -->
                <ul id="listing" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="invest" class="cyan-text">Primary Offer</a></li>
                    <li><a href="transff"  class="cyan-text">Secondary Offer</a></li>
                </ul>
                     <!-- Portfolio -->
                <ul id="portfolio" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="sub" class="cyan-text">My Investments</a></li>
                    <li><a href="transfer"  class="cyan-text">Cashout</a></li>
                    <li><a href="transferd"  class="cyan-text">Transferred Investment</a></li>
                    <li><a href="transaction" class="cyan-text">My Transactions</a></li>
                </ul>
                    
                <!-- Profiledropdown -->
                <ul id="Profiledropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="profile"  class="cyan-text"><?php echo $name; ?> Profile</a></li>
                    <li><a href="../logout.php"  class="cyan-text">Logout</a></li>
                    <li><a href="password" class="cyan-text">Change Password</a></li>
                </ul>
            <!-- HORIZONTL NAV END-->

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav hide-on-large-only">
                <ul id="slide-out" class="side-nav leftside-navigation ">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                   <li class="bold active"><a href="home.php" class="waves-effect waves-cyan"><i class="mdi-action-home"></i> Home</a>
                    </li>
                    <li class="bold"><a href="message.php" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Message </a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-add-shopping-cart"></i>Property Listing</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="invest.php">Primary Offer</a>
                                        </li>                                        
                                        <li><a href="transff.php">Secondary Offer</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-wallet-travel"></i> My Portfolio</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="sub.php" class="cyan-text">My Investments</a></li>
                                        <li><a href="transfer.php"  class="cyan-text">Cashout</a></li>
                                        <li><a href="transferd.php"  class="cyan-text">Transferred Investment</a></li>
                                        <li><a href="transaction.php" class="cyan-text">My Transactions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-box"></i> Profile</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="profile.php"><?php echo $name; ?> Profile</a>
                                        </li>
                                        <li><a href="password.php">Change Password</a>
                                        </li>
                                        <li><a href="../logout.php">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

