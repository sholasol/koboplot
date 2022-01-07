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
                                            <li><a href="home">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="#">Transfer</a> </li>
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
                                            <li><span class="bread-blod">Transfer</span>
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
                                                <h5>Transfer</h5>
                                                <h2 class="counter"><?php echo number_format($trn); ?></h2>
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

                                      <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="SN">S/N</th>
                                                    <th data-field="property" >Property</th>
                                                    <th data-field="amount" >Bought At</th>
                                                    <th data-field="listed" >Listed Amount</th>
                                                    <th data-field="location" >Location</th>
                                                    <th data-field="category" >Category</th>
                                                    <th data-field="status">Status</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $p= dbConnect()->prepare("SELECT * FROM transfer, project WHERE transfer.pID = project.pID AND transfer.userID = '$user_id' ");
                                                $p->execute();
                                                $counter=0;
                                                while($ro=$p->fetch()){
                                                    $id= $ro['pID'];
                                                    $price = $ro['price'];
                                                    $status = $ro['status'];

                                                    $cus= dbConnect()->prepare("SELECT count(pID) AS count, sum(amount) AS sum, amount FROM subscription WHERE pID='$id'");
                                                    $cus->execute();
                                                    $r=$cus->fetch();
                                                    $sum=$r['sum'];
                                                ?>
                                                <tr>
                                                   <td></td>
                                                    <td><?php echo ++$counter;?></td>
                                                    <td><?php echo $ro['name']; ?></td>
                                                    <td><?php echo $r['amount']; ?></td>
                                                    <td><?php echo $ro['amount']; ?></td>
                                                    <td><?php echo $ro['location']; ?></td>
                                                    <td><?php echo $ro['category']; ?></td>
                                                    <td><?php echo $ro['status']; ?></td>
                                                    <td>
                                                        <div class="col-lg-12">
                                                            <select class="form-control pull-right b-none" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                                <option>Action</option>
                                                                <option value="#/<?php // echo $p; ?>">View</option>
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
            </div>
        </div>
    </div>
   <?php include 'foot.php'; ?>