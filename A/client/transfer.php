<?php 
include 'head.php';
include 'stat.php';
?>

                    <!--work collections start-->
                    <div id="work-collections">
                        <div class="row">
                         <table id="data-table-simple"  cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">
                                        <span style="color: #00b0ff;"> <i class="mdi-action-store circle"></i></span>
                                    </th>
                                    <th>Project</th>
                                    <th>Maturity Date</th>
                                    <th>Amount Invested (=N=)</th>
                                    <th>Transfer</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Project</th>
                                    <th>Maturity Date</th>
                                    <th>Amount Invested (=N=)</th>
                                    <th>Transfer</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php 
                                $total_inv=0;
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
                                            <?php echo $r['name']; ?><br>
                                            <small><?php echo $r['detail']; ?></small>
                                        </p>
                                    </td>
                                    <td>Date</td>
                                    <td><p class="collections-title"> <?php echo number_format($price); ?></p></td>
                                    <td><a class="mdi-maps-local-atm" title="Transfer my investment" href="transfers.php?id=<?php echo $id; ?>" onclick="return confirm('Would you like to transfer this investment?')"> </a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                          </table> <hr/>
                            <span class="btn btn-primary col s12 m12 24">Total Investment: #<?php  echo number_format($total_inv); ?></span> 
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    <!--work collections end-->
                    
                    
                    
                    
                    
                    
                    

                    <!--card widgets start-->
                    <div id="card-widgets">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        

                   

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       

<?php include 'foot.php'; ?>