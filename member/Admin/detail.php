<?php 
include 'head.php'; 

$us= dbConnect()->prepare("SELECT count(pID) AS num FROM project");
$us->execute();
$ru=$us->fetch();
$num=$ru['num'];
?>

            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Subscriptions</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <div class="user-profile-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="user-profile-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="user-profile-img">
                                                    <img src="../img/notification/5.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="user-profile-content">
                                                    <h2>Projects</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="user-profile-social-list">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                            <div class="analytics-content">
                                                <h5>Projects</h5>
                                                <h2 class="counter"><?php echo number_format($num); ?></h2>
                                                <div id="sparkline22"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            
            
            <div class="widgets-personal-info-area" style="margin-top: 10px !important;">
                <div class="container-fluid">
                    <div class="row">
                        <?php 
                        $pid = $_GET['id'];
                        $kp=  dbConnect()->prepare("SELECT * FROM project WHERE pID ='$pid' ");
                        $kp->execute();
                        while($r=$kp->fetch()){
                        $image=$r['image'];
                        $nm=$r['name'];
                        $ad=$r['address'];
                        $pid=$r['pID'];
                        $area=$r['area'];
                        $plot=  number_format($r['koboplot']);
                        echo "
                        <div class='col-lg-9' style='margin-bottom:8px !important;'>
                            <div class='personal-info-wrap shadow-reset'>
                                <div class='widget-head-info-box'>
                                    <div class='persoanl-widget-hd'>
                                        <h2>$nm</h2>
                                        <p>$ad</p>
                                    </div>
                                    <img src='../upload/$image' width='120' height='120' class='img-circle circle-border m-b-md' alt='profile'>
                                    <div class='social-widget-result'>
                                        <span>$area sqM</span> |
                                        <span>Unit Price:# $plot</span> 
                                    </div>
                                </div>
                                <div class='widget-text-box'>
                                    <h4>$nm Features</h4>
                                    <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith and you have to be willing to do so.</p>
                                    <div class='text-right like-love-list'>
                                        <a href='subscribe?id=$pid' class='btn btn-xs btn-primary'><i class='fa fa-shopping-bag'></i> Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                        } ?>
                        <div class="col-lg-3">
                            <div class="user-profile-about shadow-reset">
                                <div class="admin-widget-flot-ch">
                                    <h1>₦ <?php // echo $ret; ?></h1>
                                    <h3>Total Return</h3>
                                    <p>My Returns.</p>
                                </div>
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-chart88"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
   <?php include 'foot.php'; ?>