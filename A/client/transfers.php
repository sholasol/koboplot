<?php 
include 'head.php';
$prj=$_GET['id'];

$ms=$con->query("SELECT * FROM subscription WHERE pID='$prj'");
$nu=$ms->num_rows;
$row=$ms->fetch_array();
  $price = $row['amount'];

  $cus=$con->query("SELECT * FROM project WHERE pID='$prj'");
  $r=$cus->fetch_array();
  $nam= $r['name'];
  $loc=$r['location'];
  $img= $r['image'];
  $n= substr($nam, 0, 1);
          
 
 if(isset($_GET['tran'])){
  $tran=$_GET['tran'];
  
  $ROI= 100000;
  $amt=$price + $ROI;
  $q=$con->query("INSERT INTO transfer SET pID='$prj', userID='$uid', amount='$amt', created=now() ");
  if($q){
      $q2=$con->query("UPDATE subscription SET status='Transfer' WHERE pID='$prj'");
      if($q2){
          echo  " <script>alert('Your investement had been successfully listed for sale'); window.location='transfers.php?id=$prj'</script>"; 
      }
  }
 }
 
 
          
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
                        <li><a href="#!" class="email-type"><?php echo $nam; ?></a>
                        </li>
                      </ul>
                    </div>
                    <div class="col s12 m7 l7 hide-on-med-and-down">
                      <ul class="right">
                        <li><a href="transfers.php?id=<?php echo $prj?>&tran=<?php echo $prj?>" title="Transfer Investment"><i class="mdi-action-shopping-cart"></i></a>
                        </li>
                        <li><a href="#!"><i class="mdi-navigation-more-vert"></i></a>
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
                      <a href=""> <p class="truncate blue-text ultra-small"><?php  echo number_format($price); ?></p></a>
                      <a href="" class="secondary-content email-time"><span class="grey-text ultra-small"><?php // echo $loc; ?></span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-maps-place icon green-text"></i>
                      <span class="email-title">Location</span>
                      <p class="truncate grey-text ultra-small"><?php echo $loc; ?></p>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-editor-attach-money icon yellow-text text-darken-3"></i>
                      <span class="email-title">Amount</span>
                      <p class="truncate grey-text ultra-small">Amount Invested</p>
                      <a href="#!" class="secondary-content"><span class="badge  darken-3"><?php echo number_format($price); ?></span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-action-shopping-cart icon yellow-text text-darken-3"></i>
                      <span class="email-title"><a href="transfers.php?id=<?php echo $prj;?>&prj=<?php echo $prj;?>" class="btn btn-info email-subject truncate" onclick="return confirm('Would you like to cashout/transfer this investment?')">Cashout</a></span>
                    </li>
                  </ul>
                </div>
                <div id="email-details" class="col s12 m7 l7 card-panel">
                    <p class="email-subject truncate"> Investment Summary:  <span class="pull-right"><?php echo "#".number_format($price); ?></span>&nbsp;&nbsp;&nbsp;&nbsp; <a href="transfers.php?id=<?php echo $prj;?>&prj=<?php echo $prj;?>" class="btn btn-info email-subject truncate" onclick="return confirm('Would you cashout/transfer this investment?')">Cashout</a></p>
                  <hr class="grey-text text-lighten-2">
                  <?php
                    
                    
                        echo "<div class='email-content-wrap'>
                          <div class='email-content'>
                            <p><img src='../project/$img' alt='' class='col s12 m12 24'></p>
                          </div>
                        </div>
                        <hr>
                        <div class='email-reply'>
                          <div class='row'>
                            <div class='col s8 m8 14 center-align'>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                      ";
                                 

                     ?>
            </div>

            
            
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
