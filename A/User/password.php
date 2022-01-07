<?php include 'head.php'; ?>
<?php




?>

<div class="section"><br><br><br>
            <!-- Form with icon prefixes -->
            <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Change Password</h4>
                <div class="row">
                    <form class="col s12" method="POST" action="pwd.php">
                    <div class="row">
                      <div class="input-field col s12">
                          <input id="first_name" type="password" name="pas"  required />
                        <label for="first_name">Old Password</label>
                      </div>
                      <div class="input-field col s6">
                          <input id="first_name" type="password" name="pass"  required />
                        <label for="first_name">New Password</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="last_name" type="password" name="cpass" required>
                        <label for="last_name">Confirm New Password</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="pws">Submit
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
             <!-- Floating Action Button -->
                    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                        <a class="btn-floating btn-large blue">
                          <i class="large mdi-action-group-work "></i>
                        </a>
                        <ul>
                            <li><a href="index.php?client" title="New Clients" class="btn-floating red"><i class="large mdi-action-account-child "></i></a></li>
                          <li><a href="index.php?project" title="Ongoing Projects" class="btn-floating yellow darken-1"><i class="large mdi-action-home"></i></a></li>
                          <li><a href="index.php?payment" title="Recent Payments" class="btn-floating green"><i class="large mdi-maps-local-atm "></i></a></li>
                          <li><a href="index.php?message" title="Messages" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                        </ul>
                    </div>
                    <!-- Floating Action Button -->

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
    <script src="../own/js/plugins/chartjs/chartjs-sample-chart.js" type="text/javascript"></script>
    <!-- sparkline -->
    <script type="text/javascript" src="../own/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/sparkline/sparkline-script.js"></script>
      

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../own/js/plugins.js"></script>
    
    <!-- Data Tables-->
    <script type="text/javascript" src="../own/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../own/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- Toast Notification -->
</body>


</html>

