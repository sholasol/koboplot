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
                                                    <div class="price-graph m">
                                                        <span id="sparkline1"></span>
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
                                                    <div class="price-graph m">
                                                        <span id="sparkline6"></span>
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
                                                    <div class="price-graph m">
                                                        <span id="sparkline2"></span>
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
                                                    <div class="price-graph m">
                                                        <span id="sparkline5"></span>
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
                        <div class="col-lg-12">
                            <div class="post-user-profile-awrap shadow-reset">
                                <div class="user-profile-post">
                                    <div class="row">
                                        
                                        <div class="container">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                  <div class="row">
                                    <h3 class="page-header" ><span class = "glyphicon glyphicon-user"></span> Area chart With Data </h3>
                                    <ul class="nav nav-tabs">
                                      <li><a href="index.php">Json Linked Charts</a></li>
                                      <li><a href="barchart.php">DB linked Barchart</a></li>
                                      <li><a href="donut.php">DB Linked Donut</a></li>
                                      <li><a href="linechart.php">DB Linked LineChart</a></li>
                                      <li class="active"><a href="area.php">DB Linked Area</a></li>
                                    </ul>
                                    <div class="container">
                                        <div class="row">
                                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <?php
                                        // visits by day
                                        $sql =  dbConnect()->prepare("SELECT  DATE_FORMAT(visitdate, '%Y-%m-%d') AS daydate, COUNT(pagefrom) AS pagefrom ,COUNT(ip) as ip,COUNT(pageno) AS totalpages FROM totalview /*WHERE visitdate >= (CURDATE() - INTERVAL 1 MONTH) */GROUP by pagefrom,ip,pageno  ORDER BY daydate ASC");
                                        //$stmt = $PDO->prepare($sql);
                                        $sql ->execute();
                                        $data=$sql->fetchAll();
                                        $phpobj =json_encode($data);
                                        echo '<h4> Json Data </h4>';
                                        //echo json_encode($data);
                                        ?>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h3 class="panel-title"></i> PHP PDO  Mysql Morris Line Graph - Visits by ip, pages,page-from per day within the last 30 days</h3>
                                            </div>
                                            <div class="panel-body">
                                              <div id="morris-area-chart">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                       <?php 
                                       $sql1 =  dbConnect()->prepare("SELECT ip as IPAddress,count(*) as Quantity from totalview GROUP by ip ORDER BY Quantity DESC LIMIT 5");
                                        
                                        $sql1 ->execute();
                                        $data2=$sql1->fetchAll();
                                        $phpobj2 =json_encode($data2);
                                        echo '<h4> Json Data </h4>';
                                        //echo json_encode($data2);
                                       ?>
                                        
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h3 class="panel-title"></i> PHP PDO  Mysql Morris Bar Graph - Top 5 IP Visits  </h3>
                                                </div>
                                                <div class="panel-body">
                                                  <div id="morris-bar-chart">
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <?php
                                        $sq =  dbConnect()->prepare("SELECT ip as label,count(*) as value from totalview GROUP by label ORDER BY value DESC LIMIT 5");
                                        $sq ->execute();
                                        $data3=$sq->fetchAll(PDO::FETCH_ASSOC);
                                        $phpobj3 =json_encode($data3);
                                        echo '<h4> Json Data </h4>';
                                        echo json_encode($data3);

                                        ?>
                                        <hr>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h3 class="panel-title"></i> PHP PDO  Mysql Morris Bar Graph - Top 5 IP Visits  </h3>
                                            </div>
                                            <div class="panel-body">
                                              <div id="morris-donut-chart">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include 'foot.php'; ?>