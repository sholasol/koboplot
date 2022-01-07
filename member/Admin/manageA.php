<?php 
include 'head.php';

$us= dbConnect()->prepare("SELECT count(id) AS num FROM ads WHERE compID='$agency'");
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
                                            <li><span class="bread-blod">Ads Spot</span>
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
                                                    <h2>Ads Spot</h2>
                                                    <p class="profile-founder">Founder of <strong>Uttara It Park</strong>
                                                    </p>
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
                                                            <strong>542</strong> Projects
                                                        </td>
                                                        <td>
                                                            <strong>222</strong> Followers
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>612</strong> Comments
                                                        </td>
                                                        <td>
                                                            <strong>542</strong> Articles
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>254</strong> Tags
                                                        </td>
                                                        <td>
                                                            <strong>552</strong> Friends
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                            <div class="analytics-content">
                                                <h5>All Adspots</h5>
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
            
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area" style="margin-top: 10px !important;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Ads Spot</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <span><a href="ads"><i class="fa fa-plus-circle btn btn-info"> Add New</i></a></span>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="SN">S/N</th>
                                                    <th data-field="name" data-editable="true">Ads</th>
                                                    <th data-field="programme" data-editable="true">Programme</th>
                                                    <th data-field="ads" data-editable="true">Ads Duration</th>
                                                    <th data-field="adsspot" data-editable="true">Ads Spot</th>
                                                    <th data-field="duration" data-editable="true">Prog. Duration</th>
                                                    <th data-field="showtime" data-editable="true">Show Time</th>
                                                    <th data-field="task" data-editable="true">Status</th>
                                                    <th data-field="price" data-editable="true">CreatedBY</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $ag= dbConnect()->prepare("SELECT * FROM program, ads WHERE program.proID=ads.proID AND ads.compID=:user");
                                                $ag->bindParam(':user', $agency);
                                                $ag->execute();
                                                $counter = 0;
                                                while($r=$ag->fetch()){
                                                    $cm=$r['compID'];
                                                    $cb=$r['createdby'];
                                                    $ads_id = $r['id'];
                                                    $pid = $r['proID'];
                                                    
                                                    $u= dbConnect()->prepare("SELECT fname, lname FROM users WHERE userID=:cm");
                                                    $u->bindParam(':cm', $cm);
                                                    $u->execute();
                                                    $ru=$u->fetch();
                                                    $comp=$ru['fname']." ".$ru['lname'];
                                                    
                                                    $c= dbConnect()->prepare("SELECT fname, lname FROM users WHERE userID=:cb");
                                                    $c->bindParam(':cb', $cb);
                                                    $c->execute();
                                                    $rc=$c->fetch();
                                                    $crB=$rc['fname']." ".$rc['lname'];
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo ++$counter; ?></td>
                                                    <td><?php echo $r['name']; ?></td>
                                                    <td><?php echo $r['program']; ?></td>
                                                    <td><?php echo $r['ads_duration']." Minute"; ?></td>
                                                    <td><?php echo $r['location']; ?></td>
                                                    <td><?php echo $r['duration']." Minute"; ?></td>
                                                    <td><?php echo $r['showtime']; ?></td>
                                                    <td><?php echo $r['status']; ?></td>
                                                    <td><?php echo $crB; ?></td>
                                                    <td>
                                                        <div class="col-lg-12">
                                                            <select class="form-control pull-right b-none" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                                <option>Action</option>
                                                                <option value="adcost/<?php echo $ads_id; ?>">Add Cost</option>
                                                                <option value="viewA/<?php echo $ads_id; ?>">View</option>
                                                                <option value="Editads/<?php echo $ads_id; ?>">Edit</option>
                                                                
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
                </div>
            </div>
            <!-- Data table area End-->
        </div>
    </div>
   <?php include 'foot.php'; ?>