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
                                    $sb= $con->query("SELECT customer.fname, customer.lname, customer.phone, subscription.pID, subscription.amount FROM customer, subscription WHERE customer.userID=subscription.userID AND customer.userID='$uid' AND subscription.status='Active'");
                                    while($ra=$sb->fetch_array()){
                                        $pID= $ra['pID'];
                                        $pr=$con->query("SELECT name, image FROM project WHERE pID='$pID'");
                                        $rr=$pr->fetch_array();
                                    ?>
                                    <li class="collection-item">
                                        <div class="row">
                                            <a href="view2/<?php echo $pID; ?>">  <div class="col s5">
                                                <p class="collections-title"> <?php echo $ra['fname']." ".$ra['lname']  ?></p>
                                            </div>
                                            <div class="col s4">
                                                <p class="collections-title"> <?php echo $rr['name']; ?></p>
                                            </div>
                                            <div class="col s3">
                                                <p class="collections-title"> <?php echo number_format($ra['amount']); ?> </p>                                               
                                            </div>
                                            </a>
                                        </div>
                                    </li>
                                    
                                    <?php } ?> 
                                </ul>
                                  </div>
                                  <div class="col s12 m7 17">
                                    <div class="sample-chart-wrapper">
                                      <canvas id="line-chart-sample" height="120"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="divider"></div>
                              <!--Bar Chart-->
                              <div id="chartjs-bar-chart" class="section">
                                <h4 class="header">Investment Performance</h4>
                                <div class="row">
                                  <div class="col s12 m9 20">
                                    <table  id="data-table-simple" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">
                                        <span style="color: #00b0ff;"> <i class="mdi-action-store circle"></i></span>
                                    </th>
                                    <th>Project</th>
                                    <th>Project Cost (=N=)</th>
                                    <th>Investors</th>
                                    <th width="5%"></th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Project</th>
                                    <th>Project Cost</th>
                                    <th>Investors</th>
                                    <th></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php 
                                $p=$con->query("SELECT * FROM project");
                                while($ro=$p->fetch_array()){
                                    $id= $ro['pID'];
                                    $price = $ro['price'];
                                    $status = $ro['status'];
                                    
                                    $cus=$con->query("SELECT count(pID) AS count, sum(amount) AS sum FROM subscription WHERE pID='$id'");
                                    $r=$cus->fetch_array();
                                    $sum=$r['sum'];
                                ?>
                                <tr>
                                    <td> <img src="../project/<?php echo $ro['image']; ?>" alt="" height="50" width="50" class="circle"></td>
                                    <td>
                                        <p class="collections-title">
                                            <?php echo $ro['name']; ?><br>
                                            <small><?php echo $ro['detail']; ?></small>
                                        </p>
                                    </td>
                                    <td><p class="collections-title"> <?php echo number_format($price); ?></p></td>
                                    <td><?php echo $r['count']; ?></td>
                                    <td>
                                        <span class="pull-right">
                                            <a class="mdi-action-visibility" title="View project detail" href="p.php?id=<?php echo $ro['pID']; ?>"></a>
                                        </span>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                          </table> 
                                  </div>
                                  <div class="col s12 m3 10">
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
                                </div>
                              </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                      
                   
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        

                   

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       

<?php include 'foot.php'; ?>