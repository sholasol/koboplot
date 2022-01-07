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
                                            <li><span class="bread-blod">Dashboard</span>
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
            
            <div class="user-prfile-activity-area mg-b-40 mg-t-30" style="margin-bottom: 0px !important;">
                <div class="container-fluid">
                    <div class="row">
                        <!-- income order visit user Start -->
                        <div class="income-order-visit-user-area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2>Investment</h2>
                                                    <div class="main-income-phara">
                                                        <p>Total Investment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro" style="background:#455A64;">
                                                <div class="income-rate-total">
                                                    <div class="price-adminpro-rate">
                                                        <h3 class="m"><span>=N=</span><span class="counter"><?php echo $sum; ?></span></h3>
                                                    </div>
                                                </div>
                                                <div class="income-range">
                                                    <p class="m">My Investment</p>
                                                    <span class="income-percentange m"> <i class="fa fa-bolt"></i></span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2>Subscription</h2>
                                                    <div class="main-income-phara order-cl">
                                                        <p>Total</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro" style="background:#4E342E;">
                                                <div class="income-rate-total">
                                                    <div class="price-adminpro-rate">
                                                        <h3 class="m"><span class="counter"><?php echo number_format($cust); ?></span></h3>
                                                    </div>
                                                </div>
                                                <div class="income-range order-cl">
                                                    <p class="m">New Programmes</p>
                                                    <span class="income-percentange m"> <i class="fa fa-level-up"></i></span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2>Sold</h2>
                                                    <div class="main-income-phara visitor-cl">
                                                        <p> Sold</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro" style="background:#424242;">
                                                <div class="income-rate-total">
                                                    <div class="price-adminpro-rate">
                                                        <h3 class="m"><span class="counter"><?php echo $payout; ?></span></h3>
                                                    </div>
                                                </div>
                                                <div class="income-range visitor-cl">
                                                    <p class="m">Income from sold</p>
                                                    <span class="income-percentange m"> <i class="fa fa-level-up"></i></span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2>Transfers</h2>
                                                    <div class="main-income-phara low-value-cl">
                                                        <p>Transfers</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro" style="background:#37474F;">
                                                <div class="income-rate-total">
                                                    <div class="price-adminpro-rate">
                                                        <h3 class="m"><span class="counter"><?php echo number_format($trn); ?></span></h3>
                                                    </div>
                                                </div>
                                                <div class="income-range low-value-cl">
                                                    <p class="m">Investment Transfer</p>
                                                    <span class="income-percentange m"> <i class="fa fa-level-down"></i></span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- income order visit user End -->
                    </div>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
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
            
            
            
            
            
            
            <div class="user-prfile-activity-area mg-b-40 mg-t-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="post-user-profile-awrap shadow-reset">
                                <div class="user-profile-post">
                                    <div class="row">

                                      <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="SN">S/N</th>
                                                    <th data-field="property" >Property</th>
                                                    <th data-field="investment" >Investment</th>
                                                    <th data-field="location" >Location</th>
                                                    <th data-field="category" >Category</th>
                                                    <th data-field="status">Status</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $p= dbConnect()->prepare("SELECT * FROM subscription, project WHERE subscription.pID = project.pID AND subscription.userID = '$user_id' AND subscription.status ='Active'");
                                                $p->execute();
                                                $counter=0;
                                                while($ro=$p->fetch()){
                                                    $id= $ro['pID'];
                                                    $price = $ro['price'];
                                                    $status = $ro['status'];

                                                    $cus= dbConnect()->prepare("SELECT count(pID) AS count, sum(amount) AS sum FROM subscription WHERE pID='$id'");
                                                    $cus->execute();
                                                    $r=$cus->fetch();
                                                    $sum=$r['sum'];
                                                ?>
                                                <tr>
                                                   <td></td>
                                                    <td><?php echo ++$counter;?></td>
                                                    <td><?php echo $ro['name']; ?></td>
                                                    <td><?php echo $ro['amount']; ?></td>
                                                    <td><?php echo $ro['location']; ?></td>
                                                    <td><?php echo $ro['category']; ?></td>
                                                    <td><?php echo $ro['status']; ?></td>
                                                    <td>
                                                        <div class="col-lg-12">
                                                            <select class="form-control pull-right b-none" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                                <option>Action</option>
                                                                <option value="detail?id=<?php  echo $id; ?>">View</option>
                                                            </select>
                                                          </div>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    </div>
                                </div>  
                            </div>
                        </div>
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