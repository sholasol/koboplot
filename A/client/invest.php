<?php 
include 'head.php';
          
 

 
 
          
?>  

<!-- START CONTENT -->
      <section id="content">

        <!--start container-->
        <div class="container">

          <div id="mail-app" class="section">
           <?php
           //$t=$con->query("SELECT * FROM transfer WHERE status='Active' AND userID !='$uid' AND buyer_id !='$uid'");
           $t=$con->query("SELECT * FROM project ");
           $nu=$t->num_rows;
           while($r=$t->fetch_array()){
                $nam= $r['name'];
                $loc=$r['location'];
                $img= $r['image'];
               $tID= $r['pID'];
               $price = $r['price'];
                
                $n= substr($nam, 0, 1);
                
                $cus=$con->query("SELECT count(pID) AS count, sum(amount) AS sum FROM subscription WHERE pID='$tID'");
                $rw=$cus->fetch_array();
                $sum=$rw['sum'];
                $cust = $rw['count'];
               
           ?>
            <div class="row">
              <div class="col s12">
                <nav class="blue">
                  <div class="nav-wrapper">
                    <div class="left col s12 m5 l5">
                      <ul>
                        <li><a href="#!" class="email-menu"><i class="mdi-action-store"></i></a>
                        </li>
                        <li><a href="#!" class="email-type">Investment Opportunities</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
              <div class="col s12">
                <div id="email-list" class="col s10 m4 l4 card-panel z-depth-1">
                  <ul class="collection">
                    <li class="collection-item avatar email-unread">
                      <span class="circle green accent-4"><?php echo $n; ?></span>
                      <a href=""> <span class="email-title"><?php echo $nam; ?></span></a>
                      <a href=""> <p class="truncate blue-text ultra-small"><?php echo "No.of Investors: ".number_format($cust); ?></p></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-maps-place icon green-text"></i>
                      <span class="email-title">Location</span>
                      <p class="truncate grey-text ultra-small"><?php echo $loc; ?></p>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-editor-attach-money icon yellow-text text-darken-3"></i>
                      <span class="email-title">Project Cost: <span class="btn btn-primary"> <?php echo "# ".number_format($price); ?></span></span>
                      
                    </li>
                    <li class="collection-item avatar email-unread">
                      <span class="email-title"><a title="Invest in this Project" href="investment.php?id=<?php echo $r['pID']; ?>" onclick="return confirm('Invest in this project?')" class="waves-effect waves-light btn">Subscribe</a></span>
                    </li>
                  </ul>
                </div>
                <div id="email-details" class="col s12 m7 l7 card-panel">
                  <div class="email-content-wrap">
                    <div class="email-content">
                        <p>
                            <a title="Invest in this Project" href="investment.php?id=<?php echo $r['pID']; ?>" onclick="return confirm('Invest in this project?')" >
                                <img src="../project/<?php echo $r['image']; ?>" alt="" width="300" height="350" class="col s12 m12 24">
                            </a>
                        </p>
                    </div>
                  </div>
                  
                  <hr>
                  
                </div>
        </div>
        </div>
           <?php }
           if($nu < 1){
               echo '<span class="btn btn-info">'."There are no investment opportunities at this time.".'</span>';
           }
           ?>
      </div>
    </div>
    <!--end container-->

    </section>
    <!-- END CONTENT -->
<!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            &nbsp;
        </div>
       
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2018 
                <span class="right"> Owned Together </span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="../own/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="../own/js/materialize.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../own/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="../own/js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="../own/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="../own/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/sparkline/sparkline-script.js"></script>
      

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../own/js/plugins.js"></script>
    <!-- Toast Notification -->
</body>


</html>
