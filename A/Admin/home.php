<?php 
include 'head.php';
include 'stat.php';
?>  <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--work collections start-->
                    <div id="work-collections">
                        <div class="row">
                            <div id="chartjs" class="section">
                                <h4 class="header">Investment Summary</h4>
                                <div class="row">
                                  <div class="col s12 m5 l5">
                                    <ul id="issues-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-editor-attach-money circle blue darken-2"></i>
                                        <span class="collection-header">Subscription</span>
                                        <p>Investment and Subscriptions</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-wallet-travel "></i></a>
                                    </li>
                                    <?php 
                                    $sb= $con->query("SELECT customer.fname, customer.lname, customer.phone, subscription.pID, subscription.amount FROM customer, subscription WHERE customer.userID=subscription.userID ");
                                    while($ra=$sb->fetch_array()){
                                        $pID= $ra['pID'];
                                        $pr=$con->query("SELECT name, image FROM project WHERE pID='$pID'");
                                        $rr=$pr->fetch_array();
                                    ?>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title"> <?php echo $ra['fname']." ".$ra['lname']  ?></p>
                                            </div>
                                            <div class="col s4">
                                                <p class="collections-title"> <?php echo $rr['name']; ?></p>
                                            </div>
                                            <div class="col s3">
                                                <p class="collections-title"> <?php echo number_format($ra['amount']); ?> </p>                                               
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <?php } ?> 
                                </ul>
                                  </div>
                                  <div class="col s12 m7 l7">
                                    <div class="sample-chart-wrapper">
                                      <canvas id="line-chart-sample" height="120"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="divider"></div>
                              <!--Bar Chart-->
                              <div id="chartjs-bar-chart" class="section">
                               <!-- <h4 class="header">Investment Performance</h4>-->
                                <div class="row">
                                  <div class="col s12 m5 l5">
                                    <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-store circle light-blue darken-2"></i>
                                        <span class="collection-header">Projects on offer</span>
                                        <p>Recent Project</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-schedule"></i></a>
                                    </li>
                                    <?php 
                                    $qu=$con->query("SELECT * FROM project ORDER BY pID DESC LIMIT 2");
                                    while($ro=$qu->fetch_array()){
                                        $pro = $ro['progress'];
                                        $status = $ro['status'];
                                        //if($pro < 10){ $st="";}
                                    ?>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s1">
                                                <img src="../project/<?php echo $ro['image']; ?>" alt="" height="50" width="50" class="circle">
                                            </div>
                                            <a href="index.php?editP&id=<?php echo $ro['pID']; ?>"> 
                                                <div class="col s3">
                                                    <span class="collections-title aligncenter"><?php echo $ro['name']; ?></span>
                                                </div>
                                            </a>
                                            <div class="col s3">
                                                <p class="collections-title"><?php echo $ro['location']; ?></p>
                                                </div>
                                            <div class="col s3">
                                               <span class='task-cat green'><?php echo $ro['status']; ?></span>
                                            </div>
                                            <div class="col s2">
                                                <div class="progress">
                                                    <div class="determinate" style="width: <?php echo $pro ?>%"></div>   
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                                  </div>
                                  <div class="col s12 m7 l7">
                                    <div class="sample-chart-wrapper">
                                      <canvas id="bar-chart-sample" height="120"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        
                        
                        
                       <!-- <div class="row">
                            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-store circle light-blue darken-2"></i>
                                        <span class="collection-header">Projects on offer</span>
                                        <p>Recent Project</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-schedule"></i></a>
                                    </li>
                                    <?php 
                                    $qu=$con->query("SELECT * FROM project ORDER BY pID DESC LIMIT 2");
                                    while($ro=$qu->fetch_array()){
                                        $pro = $ro['progress'];
                                        $status = $ro['status'];
                                        //if($pro < 10){ $st="";}
                                    ?>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s1">
                                                <img src="../project/<?php echo $ro['image']; ?>" alt="" height="50" width="50" class="circle">
                                            </div>
                                            <a href="index.php?editP&id=<?php echo $ro['pID']; ?>"> 
                                                <div class="col s3">
                                                    <span class="collections-title aligncenter"><?php echo $ro['name']; ?></span>
                                                </div>
                                            </a>
                                            <div class="col s3">
                                                <p class="collections-title"><?php echo $ro['location']; ?></p>
                                                </div>
                                            <div class="col s3">
                                               <span class='task-cat green'><?php echo $ro['status']; ?></span>
                                            </div>
                                            <div class="col s2">
                                                <div class="progress">
                                                    <div class="determinate" style="width: <?php echo $pro ?>%"></div>   
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col s12 m12 l6">
                                <ul id="issues-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-editor-attach-money circle blue darken-2"></i>
                                        <span class="collection-header">Subscription</span>
                                        <p>Investment and Subscriptions</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-wallet-travel "></i></a>
                                    </li>
                                    <?php 
                                    $sb= $con->query("SELECT customer.fname, customer.lname, customer.phone, subscription.pID, subscription.amount FROM customer, subscription WHERE customer.userID=subscription.userID AND customer.userID='$uid'");
                                    while($ra=$sb->fetch_array()){
                                        $pID= $ra['pID'];
                                        $pr=$con->query("SELECT name, image FROM project WHERE pID='$pID'");
                                        $rr=$pr->fetch_array();
                                    ?>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title"> <?php echo $ra['fname']." ".$ra['lname']  ?></p>
                                            </div>
                                            <div class="col s4">
                                                <p class="collections-title"> <?php echo $rr['name']; ?></p>
                                            </div>
                                            <div class="col s3">
                                                <p class="collections-title"> <?php echo number_format($ra['amount']); ?> </p>                                               
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <?php } ?> 
                                </ul>
                            </div>
                        </div>-->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="row">
                             <!-- Other Content-->
              <div id="profile-page-wall" class="col s12 m8">
                  <div class="row">
                       <div id="card-widgets">
                            <div class="col s12 m6 l4">
                                <div id="flight-card" class="card">
                                    <div class="card-header amber darken-2">
                                        <div class="card-title">
                                            <h4 class="flight-card-title">Housing</h4>
                                            <p class="flight-card-date">June 18</p>
                                        </div>
                                    </div>
                                    <div class="card-content-bg white-text">
                                        <div class="card-content">
                                            <div class="row flight-state-wrapper">
                                                <div class="col s6 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin">Ikeja GRA</h4>
                                                        <p class="ultra-small">Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 m6 l6 center-align flight-state-two right">
                                                    <div class="flight-info">
                                                        <p class="small"><span class="grey-text text-lighten-4">Currently Selling:</span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12 m6 l4">
                                <div id="flight-card" class="card">
                                    <div class="card-header amber darken-2">
                                        <div class="card-title">
                                            <h4 class="flight-card-title">Mall</h4>
                                            <p class="flight-card-date">June 18</p>
                                        </div>
                                    </div>
                                    <div class="card-content-bg1 white-text">
                                        <div class="card-content">
                                            <div class="row flight-state-wrapper">
                                                <div class="col s6 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin">Abijo GRA</h4>
                                                        <p class="ultra-small">Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 m6 l6 center-align flight-state-two right">
                                                    <div class="flight-info">
                                                        <p class="small"><span class="grey-text text-lighten-4">Currently Selling:</span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12 m6 l4">
                                <div id="flight-card" class="card">
                                    <div class="card-header amber darken-2">
                                        <div class="card-title">
                                            <h4 class="flight-card-title">Lekki FTZ</h4>
                                            <p class="flight-card-date">June 18</p>
                                        </div>
                                    </div>
                                    <div class="card-content-bg2 white-text">
                                        <div class="card-content">
                                            <div class="row flight-state-wrapper">
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin">Lekki FTZ</h4>
                                                        <p class="ultra-small">Lagos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 m6 l6 center-align flight-state-two right">
                                                    <div class="flight-info">
                                                        <p class="small"><span class="grey-text text-lighten-4">Currently Selling:</span> </p>
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
                            
                            <!-- profile-page-sidebar-->
                                <div id="profile-page-sidebar" class="col s12 m4">

                                  <!-- Profile About Details  -->
                                 <!-- <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <li class="collection-item">
                                      <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Project</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
                                      </div>
                                    </li>
                                    <li class="collection-item">
                                      <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">HTML, CSS</div>
                                      </div>
                                    </li>
                                    <li class="collection-item">
                                      <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">NY, USA</div>
                                      </div>
                                    </li>
                                    <li class="collection-item">
                                      <div class="row">
                                        <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
                                        <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
                                      </div>
                                    </li>
                                  </ul>-->
                                  <!--/ Profile About Details  -->

                                  <!-- Profile feed  -->
                                  <ul id="profile-page-about-feed" class="collection z-depth-1">
                                    <li class="collection-item avatar">
                                     <img src="../images/atlanta1.jpg" alt="" class="circle"/>
                                     <!-- <img src="images/avatar.jpg" alt="" class="circle">-->
                                      <span class="title">Featured Project</span>
                                      <p>Newly added project.
                                        <br> <span class="ultra-small">3 Locations</span>
                                      </p>
                                      <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                      <i class="mdi-file-folder circle"></i>
                                      <span class="title">New Investment</span>
                                      <p>Crystal Homes Project 
                                        <br> <span class="ultra-small">Ibeju Lekki</span>
                                      </p>
                                      <a href="#!" class="secondary-content"><i class="mdi-social-domain"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                      <i class="mdi-action-assessment circle green"></i>
                                      <span class="title">New Payment</span>
                                      <p>Latest payment
                                        <br> <span class="ultra-small"># 30,000,000.00</span>
                                      </p>
                                      <a href="#!" class="secondary-content"><i class="mdi-editor-attach-money"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                      <i class="mdi-av-play-arrow circle red"></i>
                                      <span class="title">Latest News</span>
                                      <p>company management news
                                        <br> <span class="ultra-small">Second Line</span>
                                      </p>
                                      <a href="#!" class="secondary-content"><i class="mdi-action-track-changes"></i></a>
                                    </li>
                                  </ul>
                                  <!-- Profile feed  -->





                          </div>
                          <!-- profile-page-sidebar-->
              
                        </div>
                    </div>
                    <!--work collections end-->
                    
                    
                    
                    
                    
                    
                    

                    <!--card widgets start-->
                   
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        

                   

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       

<?php include 'foot.php'; ?>