<?php 
include 'head.php';
$prj=$_GET['id'];

$ms=$con->query("SELECT * FROM project WHERE pID='$prj'");
$nu=$ms->num_rows;
$r=$ms->fetch_array();
  $price = $r['price'];
  $nam= $r['name'];
  $loc=$r['location'];
  $img= $r['image'];
  $n= substr($nam, 0, 1);
          
 

 
 
          
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
                        <li><a href="#!" class="email-menu"><i class="mdi-content-content-paste"></i></a>
                        </li>
                        <li><a href="#!" class="email-type">Project Information</a>
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
                      <span class="email-title">Cost</span>
                      <p class="truncate grey-text ultra-small">Project Cost</p>
                      <a href="#!" class="secondary-content"><span class="badge  darken-1"><?php echo number_format($price); ?></span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-action-store icon yellow-text text-darken-3"></i>
                      <span class="email-title"><a  class="btn btn-info email-subject truncate" >Project in Progress</a></span>
                    </li>
                  </ul>
                </div>
                <div id="email-details" class="col s12 m7 l7 card-panel">
                  <?php
                    
                    
                        echo "<div class='email-content-wrap'>
                          <div class='row'>
                          <div class='email-content'>
                          <img src='../project/$img' alt='' class='col s12 m12 24'>
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
