<?php 
include 'head.php';
$id = $_GET['id'];

$p=$con->query("SELECT * FROM customer WHERE userID='$id'");
$rw=$p->fetch_array();

$nm=$rw['fname']." ".$rw['lname'];

$tt=$con->query("SELECT sum(amount) AS amt FROM subscription WHERE userID='$id' AND status='Active'");
$rt=$tt->fetch_array();
$tot = $rt['amt'];
?>  

<!-- START CONTENT -->
      <section id="content">

        <!--start container-->
        <div class="container">

          <div id="mail-app" class="section">
              <div class="row">
              <div class="col s12">
                <nav class="blue">
                  <div class="nav-wrapper">
                    <div class="left col s12 m5 l5">
                      <ul>
                        <li><a href="#!" class="email-menu"><i class="mdi-action-shopping-basket"></i></a>
                        </li>
                        <li><a href="#!" class="email-type"><?php echo $nm;?> Subscriptions  </a>
                        </li>
                      </ul>
                        <span class="btn btn-primary pull-right">Total Investment: <?php echo number_format($tot); ?></span>
                    </div>
                  </div>
                </nav>
              </div>
           <?php
           //$t=$con->query("SELECT * FROM transfer WHERE status='Active' AND userID !='$uid' AND buyer_id !='$uid'");
           
           $t=$con->query("SELECT * FROM subscription WHERE userID='$id' AND status='Active'");
           $nu=$t->num_rows;
           while($rw=$t->fetch_array()){
               $tID= $rw['pID'];
               $price = $rw['amount'];
               
               
               $cus=$con->query("SELECT * FROM project WHERE pID='$tID'");
                $r=$cus->fetch_array();
                $nam= $r['name'];
                $loc=$r['location'];
                $img= $r['image'];
                
                $n= substr($nam, 0, 1);
               
           ?>
            
              <div class="col s12">
                <div id="email-list" class="col s10 m4 l4 card-panel z-depth-1">
                  <ul class="collection">
                    <li class="collection-item avatar email-unread">
                      <span class="circle green accent-4"><?php echo $n; ?></span>
                      <a href=""> <span class="email-title"><?php echo $nam; ?></span></a>
                      <a href=""> <p class="truncate blue-text ultra-small"><?php echo "#".number_format($price); ?></p></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-maps-place icon green-text"></i>
                      <span class="email-title">Location</span>
                      <p class="truncate grey-text ultra-small"><?php echo $loc; ?></p>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-editor-attach-money icon yellow-text text-darken-3"></i>
                      <span class="email-title">Investment Amount: <?php echo "#".number_format($price); ?></span>
                      <p class="truncate grey-text ultra-small">Subscription amount</p>
                    </li>
                  </ul>
                </div>
                <div id="email-details" class="col s12 m7 l7 card-panel">
                  <p class="email-subject truncate"> <?php echo "A unit of ".$nam .' @ <span class="btn btn-info">'."#".number_format($price).'</span>'; ?> </p>
                  <hr class="grey-text text-lighten-2">
                  <div class="email-content-wrap">
                    <div class="email-content">
                        <p><a><img src="../project/<?php echo $r['image']; ?>" alt="" class="col s12 m12 24"></a></p>
                    </div>
                  </div>
                  
                  <hr>
                  
                </div>
        </div>
           <?php }
           if($nu < 1){
               echo '<span class="btn btn-info">'."There are no secondary investment opportunities at this time.".'</span>';
           }
           ?>
         </div>
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
