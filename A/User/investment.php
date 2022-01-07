<?php 
include 'head.php';
include 'stat.php';
?>

                    <!--work collections start-->
                    <div id="work-collections">
                        
                        <div class="row">
                            <div id="chartjs" class="section">
                                <h4 class="header">Project Subscription</h4>
                                <div class="row">
                                    <div class="col s12 m12 24">
                                        <table id="data-table-simple" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="5%">
                                                    <span style="color: #00b0ff;"> <i class="mdi-action-store circle"></i></span>
                                                </th>
                                                <th>Project</th>
                                                <th>Investor</th>
                                                <th>Amount Invested (=N=)</th>
                                                <th>Date</th>
                                                <th width="10%"> More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $total_inv=0;
                                            //$p=$con->query("SELECT * FROM subscription, transfer WHERE transfer.buyer_id = '$uid' AND subscription.userID= '$uid'");
                                            $p=$con->query("SELECT * FROM subscription");
                                            while($ro=$p->fetch_array()){
                                                $usr= $ro['userID'];
                                                $id= $ro['pID'];
                                                $sid= $ro['subID'];
                                                $price = $ro['amount'];

                                                $total_inv +=$price;

                                                $cus=$con->query("SELECT *  FROM project WHERE pID='$id'");
                                                $r=$cus->fetch_array();
                                                
                                                $us=$con->query("SELECT *  FROM customer WHERE userID='$usr'");
                                                $rw=$us->fetch_array();
                                                $use = $rw['fname']." ".$rw['lname'];
                                            ?>
                                            <tr>
                                                <td> <img src="../project/<?php echo $r['image']; ?>" alt="" height="50" width="50" class="circle"></td>
                                                <td>
                                                    <p class="collections-title">
                                                        <?php echo $r['name']; ?> 
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="collections-title">
                                                        <?php echo $use; ?> <br>
                                                        <small><?php echo $rw['email'].", ".$rw['phone'];?></small>
                                                    </p>
                                                </td>
                                                <td><p class="collections-title"><span class="btn btn-primary"> <?php echo number_format($price); ?></span></p></td>
                                                <td><p class="collections-title"> <?php echo $ro['created']; ?></p></td>
                                                <td><a class="mdi-action-visibility" title="Project Details" href="detail.php?id=<?php echo $ro['pID']; ?>"> </a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                      </table> <hr/>
                            <span class="btn btn-primary col s12 m12 24">Total Investment: #<?php  echo number_format($total_inv); ?></span> 
                            
                                    </div>
                                </div>
                              </div>
                        </div>
                        
                    </div>
                    <!--work collections end-->
                    
                    
                    
                    
                    
                    
                    

                    <!--card widgets start-->
                    <div id="card-widgets">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        

                   

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       

<?php include 'foot.php'; ?>