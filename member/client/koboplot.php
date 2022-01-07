<?php include 'head.php'; ?>

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
                                                    <h2>Overview</h2>
                                                </div>
                                                <p>
                                                    A kobo Plot is a crowd funding opportunity for investors. With this feature, investors can invest in units of our Estate and Lands spread all over Lagos.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="user-profile-social-list">
                                            <table class="table small m-b-xs">
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td>
                                                            <strong>My Investment(s)</strong>
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $sum; ?></strong> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Transfer Investments</strong> 
                                                        </td>
                                                        <td>
                                                            <strong><?php echo $trn; ?></strong>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                            <div class="analytics-content">
                                                <h5>Subscriptions</h5>
                                                <h2 class="counter"><?php echo number_format($sub); ?></h2>
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
                        $kp=  dbConnect()->prepare("SELECT * FROM project WHERE koboplot > 0");
                        $kp->execute();
                        while($r=$kp->fetch()){
                        $image=$r['image'];
                        $nm=$r['name'];
                        $ad=$r['address'];
                        $pid=$r['pID'];
                        $area=$r['area'];
                        $plot=  number_format($r['koboplot']);
                        echo "
                        <div class='col-lg-4' style='margin-bottom:8px !important;'>
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
                                        <a href='detail?id=$pid' class='btn btn-xs btn-white'><i class='fa fa-folder-open'></i> More Detail </a>
                                        <a href='subscribe?id=$pid' class='btn btn-xs btn-primary'><i class='fa fa-shopping-bag'></i> Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                        } ?>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
   <?php include 'foot.php'; ?>