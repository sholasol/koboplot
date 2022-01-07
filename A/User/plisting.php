<?php 
include 'head.php';
          
 
 if(isset($_GET['buy'])){
  $buy=$_GET['buy'];
  
  $q=$con->query("UPDATE transfer SET buyer_id='$uid', status='Sold' WHERE pID='$buy'");
  if($q){
          echo  " <script>alert('You have successfully subscribed to this investment');</script>"; 
      }
  
 }
 
 
          
?>  

<!-- START CONTENT -->
      <section id="content">

        <!--start container-->
        <div class="container">

          <div id="mail-app" class="section">
              <div class="row">
                  <div class="m9">
              <div class="col s12 m12 24">
                <nav class="blue">
                  <div class="nav-wrapper">
                    <div class="left col s12 m12 24">
                      <ul>
                        <li><a href="#!" class="email-menu"><i class="mdi-action-shopping-basket"></i></a>
                        </li>
                        <li><a href="#!" class="email-type">Primary Offers</a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </nav>
              </div>
           <?php
           //$t=$con->query("SELECT * FROM transfer WHERE status='Active' AND userID !='$uid' AND buyer_id !='$uid'");
           $t=$con->query("SELECT * FROM project WHERE status !='Completed'");
           $nu=$t->num_rows;
           while($rw=$t->fetch_array()){
               $tID= $rw['pID'];
               //$cus=$con->query("SELECT * FROM project WHERE pID='$tID'");
                //$r=$cus->fetch_array();
                $nam= $rw['name'];
                $loc=$rw['location'];
                $img= $rw['image'];
                $price = $rw['price'];
                
                $n= substr($nam, 0, 1);
               
           ?>
              <div class="col s8 m12 24">
                <div id="email-list" class="col s12 m5 14 card-panel z-depth-1">
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
                      <span class="email-title">Offered for <?php echo "#".number_format($price); ?></span>
                      <p class="truncate grey-text ultra-small">On Offer</p>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-action-shopping-cart icon yellow-text text-darken-3"></i>
                      <span class="email-title"><a href="" class="btn btn-info email-subject truncate">On Sale</a></span>
                    </li>
                  </ul>
                </div>
                <div id="email-details" class="col s12 m7 20 card-panel">
                    <img src="../project/<?php echo $rw['image']; ?>" alt="" class="col s6 m6" height="220">
                    <img src="../project/<?php echo $rw['image']; ?>" alt="" class="col s6 m6" height="220">
<!--                  <p class="email-subject truncate"> <?php echo "A unit of ".$nam. " is on offer for ".'<span class="btn btn-info">'."#".number_format($price).'</span>'; ?> </p>-->

<!--                  <div class="email-content-wrap">  
                    <div class="email-content">
                        <img src="../project/<?php echo $rw['image']; ?>" alt="" class="col s12 m12 24">
                        <p><a href="" title="On Sale" >Something</a></p>
                    </div>
                  </div>-->
                </div>
        </div>
           <?php } ?>
          </div>
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
