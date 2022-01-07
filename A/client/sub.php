<?php 
include 'head.php';
include 'stat.php';
?>

                    <!--work collections start-->
                    <div id="work-collections">
                        
                        <div class="row">
                            <div id="chartjs" class="section">
                                <h4 class="header">Investment Summary</h4>
                                <div class="row">
                                    <div class="col s6 m5 10">
                                        <table  id="data-table-simple"  cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="5%">
                                                    <span style="color: #00b0ff;"> <i class="mdi-action-store circle"></i></span>
                                                </th>
                                                <th>Project</th>
                                                <th>Amount Invested (=N=)</th>
                                                <th width="10%"> Cashout</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $total_inv=0;
                                            //$p=$con->query("SELECT * FROM subscription, transfer WHERE transfer.buyer_id = '$uid' AND subscription.userID= '$uid'");
                                            $p=$con->query("SELECT * FROM subscription WHERE userID='$uid' AND status='Active'");
                                            while($ro=$p->fetch_array()){
                                                $id= $ro['pID'];
                                                $price = $ro['amount'];

                                                $total_inv +=$price;

                                                $cus=$con->query("SELECT *  FROM project WHERE pID='$id'");
                                                $r=$cus->fetch_array();
                                            ?>
                                            <tr>
                                                <td> <img src="../project/<?php echo $r['image']; ?>" alt="" height="50" width="50" class="circle"></td>
                                                <td>
                                                    <p class="collections-title">
                                                        <?php echo $r['name']; ?> 
                                                    </p>
                                                </td>
                                                <td><p class="collections-title"> <?php echo number_format($price); ?></p></td>
                                                <td><a class="mdi-editor-attach-money" title="Cashout on this Project" href="view.php?id=<?php echo $ro['pID']; ?>" onclick="return confirm('Cashout on this Project?')"> </a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                      </table> <hr/>
                            <span class="btn btn-primary col s12 m12 24">Total Investment: #<?php  echo number_format($total_inv); ?></span> 
                            
                                    </div>
                                  <div class="col s6 m7 l0">
                                    <div class="sample-chart-wrapper">
                                      <canvas id="line-chart-sample" height="140"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        
                    </div>
                    <!--work collections end-->
                    
                    
                    
                    
                    
                    
                    

                    <!--card widgets start-->
                    <div id="card-widgets">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        

                   

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       

<?php include 'foot.php'; ?>