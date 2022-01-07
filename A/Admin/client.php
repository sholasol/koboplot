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
                                    <th>Client Name</th>
                                    <th>No of Investment</th>
                                    <th>Sum Invested (=N=)</th>
                                    <th>Joined</th>
                                    <th width="7%"></th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Client Name</th>
                                    <th>No of Investment</th>
                                    <th>Sum Invested</th>
                                    <th>Joined</th>
                                    <th></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php 
                                $p=$con->query("SELECT * FROM customer");
                                while($ro=$p->fetch_array()){
                                    $id= $ro['userID'];
                                    $date= $ro['created'];
                                    
                                    $cus=$con->query("SELECT count(pID) AS count, sum(amount) AS sum FROM subscription WHERE userID='$id' AND status='Active'");
                                    $r=$cus->fetch_array();
                                    $sum=$r['sum'];
                                ?>
                                <tr>
                                    <td>
                                        <p class="collections-title">
                                            <a href="vClient.php?id=<?php echo $id; ?>"> <?php echo $ro['fname']." ".$ro['lname']; ?></a><br>
                                            <small><?php echo $ro['email'].", ".$ro['phone']; ?></small>
                                        </p>
                                    </td>
                                    <td><?php echo $r['count']; ?></td>
                                    <td><?php echo  number_format($sum); ?></td>
                                    <td><span class="task-cat green"><?php echo $date; ?></span></td>
                                    <td>
                                        <span class="pull-right">
                                            <a class="mdi-action-visibility" title="View Client Detail" href="vClient.php?id=<?php echo $id; ?>"></a>
                                           <!-- <a class="mdi-action-delete" title="Delete Project" href="index.php?deleteP&id=<?php echo $ro['pID']; ?>" onclick="return confirm('Delete this Project?')" style="color: red;"></a>-->
                                        </span>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                          </table> 
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    <!--work collections end-->
                    
                
                        
                        
                        

                        

                   

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       

<?php include 'foot.php'; ?>