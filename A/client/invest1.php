<?php 
include 'head.php';
//include 'stat.php';
?>



 <!--breadcrumbs start-->
    <section id="content">
       <label class="btn btn-primary s12 m12 l6">Recent Investment Opportunities</label>
            <!--work collections start-->
            <div id="work-collections">
                <div class="row">
                 <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="75%">Project</th>
                            <th width="25%"></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Project</th>
                            <th></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <?php 
                        //$p=$con->query("SELECT * FROM project, subscription WHERE project.pID !=subscription.pID AND subscription.userID='$uid'");
                        $p=$con->query("SELECT * FROM project");
                        while($ro=$p->fetch_array()){
                            $id= $ro['pID'];
                            $price = $ro['price'];

                            $cus=$con->query("SELECT count(pID) AS count, sum(amount) AS sum FROM subscription WHERE pID='$id'");
                            $r=$cus->fetch_array();
                            $sum=$r['sum'];
                        ?>
                        <tr>
                            <td>
                                <section class="plans-container" id="plans">
                                    <article>
                                      <div class="card">
                                        <div class="card-image purple waves-effect">
                                          <div class="card-title"><?php echo $ro['name']; ?></div>
                                          <div class="price"><img src="../project/<?php echo $ro['image']; ?>" alt="" height="400" width="180"></div>
                                          <div class="price-desc"><?php echo "Project Estimate: #". number_format($price); ?></div>
                                        </div>
                                      </div>
                                    </article>
                                  </section>

                            </td>
                            <td>
                                <div class="card-action center-align">  
                                    <p class="collections-title"> <?php echo  number_format($r['count']); ?><br><i class="mdi-action-account-child"></i> <small>Subscriptions</small></p><br>
                                    <p class="collections-title"> <?php echo "# ". number_format($sum); ?><br> <small>Invested Amount</small></p><br>
                                  <a title="Invest in this Project" href="investment.php?id=<?php echo $ro['pID']; ?>" onclick="return confirm('Invest in this project?')" class="waves-effect waves-light btn">Subscribe</a>
                                </div>
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
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        

                   

                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       

<?php include 'foot.php'; ?>