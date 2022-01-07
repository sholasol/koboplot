<?php 
include 'head.php';
$prj=$_GET['id'];

//$ms=$con->query("SELECT * FROM subscription WHERE pID='$prj'");
$ms=$con->query("SELECT * FROM transfer WHERE pID='$prj' AND userID='$uid' AND status='Active'");
$nu=$ms->num_rows;
$row=$ms->fetch_array();
  $price = $row['amount'];
  $status = $row['status'];
  if($status=='Active'){$status ='On Sale';}
  if($status =='Sold'){$status ='Sold';}

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
                      <a href=""> <p class="truncate blue-text ultra-small"><?php echo number_format($price); ?></p></a>
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
                    </li>
                  </ul>
                </div>
                <div id="email-details" class="col s12 m7 l7 card-panel">
                    <p class="email-subject truncate"> Investment Summary:  <span class="pull-right"><?php echo "#".number_format($price); ?></span></p>
                  <hr class="grey-text text-lighten-2">
                  <?php
                    
                    
                        echo "<div class='email-content-wrap'>
                          <div class='row'>
                            <div class='col s10 m10 l0'>";
                             // if($n > 0){
                                 echo "<ul class='collection'>
                                    <li class='collection-item avatar'>
                                      <img src='../own/images/avatar.jpg' alt='' class='circle'>
                                      <span class='email-title'>$name</span>
                                      <p class='truncate grey-text ultra-small'>$email</p>
                                      <p class='grey-text ultra-small'>$phone</p>
                                    </li>
                                  </ul>

                            </div>

                            <div class='col s2 m2 l2 email-actions'>
                              <a href=''><span><i class='mdi-action-shopping-cart'></i></span> <small>$status</small></a>
                            </div>
                          </div>
                          <div class='email-content'>
                            <p><img src='../project/$img' alt='' class='col s12 m12 24'></p>
                          </div>
                        </div>
                        <hr>

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
