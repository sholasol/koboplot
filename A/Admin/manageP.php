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
                                    <th>Project Cost (=N=)</th>
                                    <th>No.</th>
                                    <th>Sum Invested (=N=)</th>
                                    <th>Status</th>
                                    <th width="9%"></th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Project</th>
                                    <th>Project Cost</th>
                                    <th>No.</th>
                                    <th>Sum Invested</th>
                                    <th>Status</th>
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
                                    <td><?php echo  number_format($sum); ?></td>
                                    <td><span class="task-cat green"><?php echo $status;?></span></td>
                                    <td>
                                        <span class="pull-right">
                                            <a class="mdi-action-visibility" title="View project detail" href="p.php?id=<?php echo $ro['pID']; ?>"></a>
                                            <a class="mdi-editor-mode-edit" title="Edit Project" href="editP.php?id=<?php echo $ro['pID']; ?>" onclick="return confirm('Edit this project?')"></a>
                                            <a class="mdi-action-delete" title="Delete Project" href="deleteP.php?id=<?php echo $ro['pID']; ?>" onclick="return confirm('Delete this Project?')" style="color: red;"></a>
                                        </span>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                          </table> 
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    <!--work collections end-->
                    
                    
                    
                    
                    
                    
                    

                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">

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
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        

                   

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       

<?php include 'foot.php'; ?>