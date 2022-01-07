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
                                            <li><span class="bread-blod">Overview</span>
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
                                            <li><span class="bread-blod">Overview</span>
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
                                        <h2>Projects</h2>
                                        <div class="main-income-phara">
                                            <p>Total</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span><i class="fa fa-sort-amount-desc"></i></span><span class="counter"><?php echo number_format($proj); ?></span></h3>
                                        </div>
                                    </div>
                                    <div class="income-range">
                                        <p>Total Projects</p>
                                        <span class="income-percentange"><i class="fa fa-bolt"></i></span>
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
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo $sum; ?></span></h3>
                                        </div>
                                    </div>
                                    <div class="income-range order-cl">
                                        <p>Total Project Cost</p>
                                        <span class="income-percentange"><?php echo $sum; ?> </span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Payouts</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo $payout; ?></span></h3>
                                        </div>
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <p>Amount</p>
                                        <span class="income-percentange">0 <i class="fa fa-level-up"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Transfered</h2>
                                        <div class="main-income-phara low-value-cl">
                                            <p>Transfers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo number_format($transfer); ?></span></h3>
                                        </div>
                                    </div>
                                    <div class="income-range low-value-cl">
                                        <p>Returns</p>
                                        <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
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
            
            
            
           <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area" style="margin-top: 10px !important;">
                <div class="container-fluid">
                    <div class="row">
                        
                        
                        
                        
                        
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Kobounits</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" ></th>
                                                    <th data-field="sn">S/N</th>
                                                    <th data-field="project" >Project</th>
                                                    <th data-field="cost" >Cost (=N=)</th>
                                                    <th data-field="markup" >Mark Up (=N=)</th>
                                                    <th data-field="area" >Units</th>
                                                    <th data-field="kobounit">Kobo Unit</th>
                                                    <th data-field="status" >Status</th>
                                                    <th data-field="investors">Investors</th>
                                                    <th data-field="date" >Date</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $p= dbConnect()->prepare("SELECT * FROM project WHERE kobounit > 0 ORDER BY pID DESC");
                                                $p->execute();
                                                $counter = 0;
                                                while($r=$p->fetch()){
                                                    $id= $r['pID'];
                                                    $price = $r['price'];
                                                    $status = $r['status'];

                                                    $cus= dbConnect()->prepare("SELECT count(userID) AS count, sum(amount) AS sum FROM subscription WHERE pID='$id'");
                                                    $cus->execute();
                                                    $ro=$cus->fetch();
                                                    $sum=$ro['sum'];
                                                    $count=$ro['count'];
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php  echo ++$counter; ?></td>
                                                    <td><?php  echo $r['name']; ?></td>
                                                    <td><?php echo"=N= "; echo number_format($r['price']); ?></td>
                                                    <td><?php echo"=N= "; echo number_format($r['markup']); ?></td>
                                                    <td><?php  echo $r['area']; ?></td>
                                                    <td class="datatable-ct"><?php echo"=N= "; echo number_format($r['kobounit']); ?><!--<span class="pie">1/6</span>-->
                                                    </td>
                                                    <td><?php  echo $r['status']; ?></td>
                                                    <td><?php  echo number_format($count); ?></td>
                                                    <td><?php  echo $r['created']; ?></td>
                                                    <td>
                                                        <div class="col-lg-12">
                                                            <select class="form-control pull-right b-none" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                                <option>Action</option>
                                                                <option value="detail?id=<?php  echo $id; ?>">View</option>
                                                                <option value="attraction/<?php // echo $p; ?>">Add Attraction</option>
                                                                <option value="deactivate/<?php // echo $p; ?>">Deactivate</option>
                                                            </select>
                                                          </div>
                                                    </td>
                                                </tr>
                                                <?php  } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Kobounit </h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" ></th>
                                                    <th data-field="sn">S/N</th>
                                                    <th data-field="project" >Project</th>
                                                    <th data-field="cost" >Cost (=N=)</th>
                                                    <th data-field="markup" >Mark Up (=N=)</th>
                                                    <th data-field="area" >Area (SqM)</th>
                                                    <th data-field="koboplot">Kobo Plot</th>
                                                    <th data-field="status" >Status</th>
                                                    <th data-field="investors">Investors</th>
                                                    <th data-field="date" >Date</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $p= dbConnect()->prepare("SELECT * FROM project WHERE koboplot >0 ORDER BY pID DESC");
                                                $p->execute();
                                                $counter = 0;
                                                while($r=$p->fetch()){
                                                    $id= $r['pID'];
                                                    $price = $r['price'];
                                                    $status = $r['status'];

                                                    $cus= dbConnect()->prepare("SELECT count(userID) AS count, sum(amount) AS sum FROM subscription WHERE pID='$id'");
                                                    $cus->execute();
                                                    $ro=$cus->fetch();
                                                    $sum=$ro['sum'];
                                                    $count=$ro['count'];
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php  echo ++$counter; ?></td>
                                                    <td><?php  echo $r['name']; ?></td>
                                                    <td><?php echo"=N= "; echo number_format($r['price']); ?></td>
                                                    <td><?php echo"=N= "; echo number_format($r['markup']); ?></td>
                                                    <td><?php  echo $r['area']; ?></td>
                                                    <td class="datatable-ct"><?php echo"=N= "; echo number_format($r['koboplot']); ?><!--<span class="pie">1/6</span>-->
                                                    </td>
                                                    <td><?php  echo $r['status']; ?></td>
                                                    <td><?php  echo number_format($count); ?></td>
                                                    <td><?php  echo $r['created']; ?></td>
                                                    <td>
                                                        <div class="col-lg-12">
                                                            <select class="form-control pull-right b-none" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                                                <option>Action</option>
                                                                <option value="detail?id=<?php  echo $id; ?>">View</option>
                                                                <option value="attraction/<?php // echo $p; ?>">Add Attraction</option>
                                                                <option value="deactivate/<?php // echo $p; ?>">Deactivate</option>
                                                            </select>
                                                          </div>
                                                    </td>
                                                </tr>
                                                <?php  } ?>
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